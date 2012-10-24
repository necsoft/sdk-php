<?php require_once "../../../lib/mercadopago.php";

$mp = new MP ("CLIENT_ID", "SECRET_CLIENT");

$preference = array (
	"items" => array (
		array (
			"title" => "sdk-php",
			"quantity" => 1,
			"currency_id" => "ARS",
			"unit_price" => 10.2
		)
	)
);

$preferenceResult = $mp->create_preference($preference);

?>

<!doctype html>
<html>
    <head>
        <title>MercadoPago SDK - Create Preference and Show Checkout Example</title>
    </head>
    <body>
       	<a href="<?php echo $preferenceResult["response"]["init_point"]; ?>" name="MP-payButton" class="orange-ar-m-sq-arall">Pay</a>
			<script type="text/javascript">
				(function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}window.$MPBR_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();
			</script>
    </body>
</html>

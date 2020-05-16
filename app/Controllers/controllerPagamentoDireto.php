$Data["email"]="josethome.band@hotmail.com";
$Data["token"]="0562393C51FF4AAE85FF6667D8CF285C";
$Data["currency"]="BRL";
$Data["itemId1"]="1";
$Data["itemDescription1"]="Website desenvolvido pela WEF.";
$Data["itemAmount1"]="1000.00";
$Data["itemQuantity1"]="1";
$Data["itemWeight1"]="1";
$Data["reference"]="83783783737";
$Data["senderName"]="João da Silva";
$Data["senderAreaCode"]="37";
$Data["senderPhone"]="99999999";
$Data["senderEmail"]="c50431836257301999384@sandbox.pagseguro.com.br";
<!--$Data["senderEmail"]="c51994292615446022931@sandbox.pagseguro.com.br";-->
$Data["shippingType"]="1";
$Data["shippingAddressStreet"]="Rua Antonieta";
$Data["shippingAddressNumber"]="10";
$Data["shippingAddressComplement"]="Casa";
$Data["shippingAddressDistrict"]="Jardim Paulistano";
$Data["shippingAddressPostalCode"]="30690090";
$Data["shippingAddressCity"]="Belo Horizonte";
$Data["shippingAddressState"]="MG";
$Data["shippingAddressCountry"]="ATA";

$BuildQuery=http_build_query($Data);
$Url="https://ws.sandbox.pagseguro.uol.com.br/v2/checkout";

$Curl=curl_init($Url);
curl_setopt($Curl,CURLOPT_HTTPHEADER,Array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
curl_setopt($Curl,CURLOPT_POST,true);
curl_setopt($Curl,CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($Curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($Curl,CURLOPT_POSTFIELDS,$BuildQuery);
$Retorno=curl_exec($Curl);
curl_close($Curl);

$Xml=simplexml_load_string($Retorno);
var_dump($Xml);
<!-- eche $Xml->code; -->

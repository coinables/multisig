<?php
/*
p2pkh: "mjgSXjzXZ49W2gGvuCD4HRGs6g8qpav1Mb"
p2shp2wpkh: "2N9TxccYGAwUdtSEct3H2gzDe3HpVEwfbKm"
p2wpkh: "tb1q9k4az2q0vw4rnwrhtwk5c3n7x5l7s992ytd32a"
pk: "cUXrHQtCBm4PRnHrBJBzqMEAT1gEuokKovFMF4UCrfyK6EmMW8hA"
publicKey: "03216b54397457af834f36496c66b60fb063dff0d91ba11128fd3c5101a73e331e"
redeemScript: "00142dabd1280f63aa39b8775bad4c467e353fe814aa"

p2pkh: "mnQP6XkfpKUwobXto8hFqkjRFkDZEdYo9z"
p2shp2wpkh: "2N3LaZzpQmqyJZJhKA6UGJmjnvbxvmeNmaN"
p2wpkh: "tb1qfw92hlcp64gsef2rq6kqdws2s74ftcg73vw0kv"
pk: "cSZz16JLcAUzRh45K9cjZPume19VUruv2iM8dmyk89wm8CJRHtuv"
publicKey: "0254dac58218dce3e806d2759a35ca331bc222a1e8590f4c18980316eb8f3c90ad"
redeemScript: "00144b8aabff01d5510ca54306ac06ba0a87aa95e11e"

p2pkh: "mmbhWmHUCtvULwch2JwJ8TPa19JPftxSHq"
p2shp2wpkh: "2N8tyQ2zgSxA1qSUPjEFuGX4dxpYZc458Eu"
p2wpkh: "tb1qg2m8al43drwp6nkm35gd8wglhjlzphles04p2g"
pk: "cPPvA9CqME6czQLPNoSM7LkV8cMjVKrERbvTDaH1268QF3PJEZvd"
publicKey: "02ad9a8787d7e479948d994c45e3c3c350c95834240662e8e205a3668e91a34c7e"
redeemScript: "001442b67efeb168dc1d4edb8d10d3b91fbcbe20dff9"


Array ( [address] => 2NCywmKbZ29H64d6xP4JNSKFmBKpXyJmnDN [redeemScript] => 522103216b54397457af834f36496c66b60fb063dff0d91ba11128fd3c5101a73e331e210254dac58218dce3e806d2759a35ca331bc222a1e8590f4c18980316eb8f3c90ad2102ad9a8787d7e479948d994c45e3c3c350c95834240662e8e205a3668e91a34c7e53ae )
*/
require("easybitcoin.php");

$bitcoin = new Bitcoin("someusername","somepassword","localhost","18332");

$txid = "eff13976dc6acd817983e09cfbff4b2f062346600367560005697cd560359323";
$vout = 0;


$inputArray = array('txid'=>$txid,'vout'=>$vout);

$outputArray = array('mkHS9ne12qx9pS9VojpwU5xtRd4T7X7ZUt'=>'0.0045');	   

$buildtx = $bitcoin->createrawtransaction(array($inputArray), array($outputArray));

if($bitcoin->error){
	print_r($bitcoin->error);
} else {
	print_r($buildtx);
}
?>
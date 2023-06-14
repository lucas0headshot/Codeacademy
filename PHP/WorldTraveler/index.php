<?php
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;
echo "We started with $riel riel, $kyat kyat, $krones krones and $lek lek";

$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;
$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krones = $krones * $krones_to_usd;
$usd_from_lek = $lek * $lek_to_usd;
echo "\nIf we exchange...  we will have $usd_from_riel\$USD from riel, $usd_from_kyat\$USD from kyat, $usd_from_krones\$USD from krones and $usd_from_lek\$USD from lek";

$final_amount = round($usd_from_riel) + round($usd_from_kyat) + round($usd_from_krones) + round($usd_from_lek) - 4;
echo "\nBut, the currency exchange takes a flat \$1 per conversion, cause this now we have a total of $final_amount\$USD";
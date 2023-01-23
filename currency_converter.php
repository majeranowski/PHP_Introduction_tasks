<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;
  echo "we started with $riel riels, $kyat kyats, $krones krones and $lek leks";

$riel_exchange = 0.00024;
$kyat_exchange = 0.00048;
$krones_exchange = 0.10;
$lek_exchange = 0.0094;

$riel_to_usd = $riel * $riel_exchange;
$kyat_to_usd = $kyat * $kyat_exchange;
$krones_to_usd = $krones * $krones_exchange;
$lek_to_usd = $lek * $lek_exchange;

echo "\n\nI have $riel_to_usd from riels, $kyat_to_usd from kyats, $krones_to_usd from krones and $lek_to_usd from leks";
$riel_to_usd++;
$kyat_to_usd++;
$krones_to_usd++;
$lek_to_usd++;
echo "\n\nI have after fee $riel_to_usd from riels, $kyat_to_usd from kyats, $krones_to_usd from krones and $lek_to_usd from leks";
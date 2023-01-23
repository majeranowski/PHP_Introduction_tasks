<?php
$drinks = ["coffe" => 5, "tea" => 4, "bear" => 7, "cola" => 6];
$pastries = ["rogalik", "buleczka", "drozdzowka", "chalka"];
?>
<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php
foreach($drinks as $drink => $price):?>
<li><?=$drink?> : <?=$price?>$</li>
<?php endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php for($i = 0; $i < count($pastries); $i++):?>
<li><?=$pastries[$i]?></li>
<?php endfor; ?>
</ul>

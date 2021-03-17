<?php
require_once 'config.php';
$stmt=$db->query("select nev,tipus,nem from versenyszam order by nev,tipus asc");
$lista="";

while($row=$stmt->fetch()){
$lista.="<tr><td>{$row['nev']}</td><td>{$row['tipus']}</td><td>{$row['nem']}</td></tr>";}
?>




<table class="table table-striped">
<thead>
<th>Név</th>
<th>Típus</th>
<th>Nem</th>

</thead>
<tbody>
 <?=$lista?>
</tbody>
</table>
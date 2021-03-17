<?php
require_once "config.php";


//legördülőfeltöltés
$sql="SELECT orszag from eredmeny group by orszag";


$versenyzok="";
$versenyzok2="";

$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    extract($row);
  $versenyzok.="<option value='{$orszag}'>{$orszag}</option>";
}




//kiválasztott kiirása
if(isset($_POST['btn'])){
    $oid=$_POST['oid'];
    $sql="SELECT versenyzo.nev as neve, eredmeny.ev  as evszam 
    FROM versenyzo,eredmeny WHERE versenyzo.az=eredmeny.versenyzoaz and eredmeny.orszag={$oid}"; 
$stmt=$db->query($sql);





    while($row=$stmt->fetch()){

        extract($row);
        $versenyzok2.="<li>{$neve}  {$evszam} </li>";

      

    }

}


?>

<form method="post">
        <select name="oid">
    <?=$versenyzok?>
    </select>

<input type="submit" name="btn" value="Mehet">
</form>

<ol>
<?=$versenyzok2?>
</ol>
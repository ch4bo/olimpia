<?php
$msg="";
require_once "config.php";

   if(isset($_POST['beir'])){
       extract($_POST);
       $sql="insert into versenyszam values (null,'{$nev}','{$tipus}','{$nem}')";
       $stmt=$db->exec($sql);

if($stmt)
    $msg="Sikeres  az adatbeírás.";
else $msg="Nem sikerült az adatbeírás!!";

}
?>

<div class="col-6">
    <form method="post">
        <label for="">Új versenyszám:</label>

       Neve <input type="text" name="nev" id="" class="form-control" required>
       Tipusa <input type="text" name="tipus" id="" class="form-control" required>
       Neme: <input type="text" name="nem" id="" class="form-control" required>
        
        
    

        <input type="submit" value="Felvesz" name="beir" class="btn btn-outline-primary">
    </form>
</div>

<div>
<?=$msg?>
</div> 

<?php
if(isset ($_GET['nombre']))
  $nombre=$_GET['nombre'];

else
  $nombre=12;


  echo'<h1> TABLE de '.$nombre.'</h1>';
for($i=1;$i<=10;$i++){
  $res=$i*$nombre;
  echo $i.'x'.$nombre.'='.$res."<br>";
}


echo"<form method='GET' action='table.php'>
<input type='text' name='nombre'>
<buttom type='submit' name='envoyer'>Envoyer
</form>"

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Calculatrice</title>
    </head>

    <body>
      
    <?php
      extract($_GET);
      
      if(isset ($_GET['oper1'])  && isset ($_GET['signe'])  && isset ($_GET['oper2'])){
        if($signe == 'addition'){
          $res=$oper1+$oper2;
        }
         else if($signe == 'division'){
          $res=$oper1/$oper2;
        }
    
         else if($signe == 'multiplication'){
          $res=$oper1*$oper2;
        }
         else if($signe == 'soustraction'){
          $res=$oper1-$oper2;
        }
      }
?>
      
<form  action='calc.php' methode='GET'>
  <fieldset>
    <legend>
      Calculatrice
    </legend>
    
    <input type='text' name="oper1" value="<?php if (isset($res)) echo $res;?>">
 

        <label for="signe"></label>
       <select name="signe" >
         <option value="addition">+</option>
           <option value="soustraction">-</option>  
         <option value="division">/</option>
           <option value="multiplication">*</option>
       </select>

    <input type='text' name="oper2"></br>
  <?php 
      if (isset($res)) {
         echo " = ".$res ;
      }
      ?>
  </fieldset>
      
      <input type='submit' name="Calculer">
      
      </form>
                                 
 
  
  </body>
</html>
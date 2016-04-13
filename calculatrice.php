<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Calculatrice</title>
    </head>

    <body>
<form  action='calculatrice' methode='GET'>
  <fieldset>
    <legend>
      Calculatrice
    </legend>
    
    <label>Oper1</label>
    <input type='text' name="oper1">
 

 <label for="Oper2"></label>
       <select name="Oper2" id="Oper2">
           <option value="division">/</option>
           <option value="multiplication">*</option>
           <option value="adition">+</option>
           <option value="sosutraction">-</option>
       </select>

   <label>Oper3</label>
    <input type='text' name="oper3"></br>
  </fieldset>
      </form>
  
  
  </body>
</html>
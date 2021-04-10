<?php require "Automobile.php"?> 
<?php $auto = new Automobile($_POST["licence"],$_POST["brand"],$_POST["model"],$_POST["year"],$_POST["color"]);
 echo $auto;?>
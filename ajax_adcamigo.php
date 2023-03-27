<?php
 include("../Db/commanvar.php");
 include("../Db/class.db.php");

if(isset($_POST["codigo"], $_POST["item"]))
{
 $obj=new db_connect;
 
 $query = "DELETE FROM horimetros_itens WHERE codigo = ".$_POST["codigo"]."and item = ".$_POST["item"] ;
 $obj->db_query($query); /* Query Execution */ 
 $obj->free();
 
}
?>
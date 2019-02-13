<form action= "" method= "get">
	enter name : <input type= "text" name= "frind_name"/>
	 <input type= "submit" value= "add frind"/>

</form>

<?php
     $f_name= $_GET['frind_name'];
	 echo "moon : $f_name";
	 ?>
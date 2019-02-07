<?php
require_once "configure.php";
require_once "lib.php";


if(!isset($_POST['submit'] ) ) { 
    echo "<form action='$_SERVER[PHP_SELF]' method='post'>
    <label>Enter Category</label><br><input type='text' name='cat' /><br>
    <input type='submit' name='submit' value='submit' /></form>"; 
} else { 
$cat = cl($_POST['cat']);
echo "$cat inserted into category table<br>";
echo "<a href='insertcategory.php'>Return and add another</a><br><a href='index.php'>Return Home</a>";
$db->exec("INSERT INTO category(cat_title) VALUES('$cat')");
                     
}
?>

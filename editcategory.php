<?php
require_once "configure.php";
require_once "lib.php";


if(!isset($_POST['submit'] ) ) { 
$id = $_REQUEST['id'];
$sq = $db->query("SELECT * FROM category WHERE id = '$id' ");
while ($row = $sq->fetchArray(SQLITE3_ASSOC) ) { 
echo "<b>" . $row[cat_title] . "</b><br>";
    echo "<form action='$_SERVER[PHP_SELF]' method='post'>
    <label>Enter Category</label><br><input type='text' value='$row[cat_title]' name='cat' /><br><input type='text' value='$row[id]' name='id' />
    <input type='submit' name='submit' value='submit' /></form>"; } 
} else { 
$cat = cl($_POST['cat']);
$id = $_POST['id'];
echo "$cat updated in category table<br>";
echo "<a href='updatecategorylead.php'>Return and edit another</a><br><a href='index.php'>Return Home</a>";
$db->exec("UPDATE category SET cat_title = '$cat' WHERE id = '$id'");
                     
}
?>

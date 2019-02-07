<?
require_once "configure.php";
if(isset($_REQUEST['id']) ) { 
$id = $_REQUEST['id'];
$sq = $db->query("DELETE FROM category WHERE id = '$id'");
echo "Record $id has been deleted successfully<br><a href='updatecategorylead.php'>Return and edit another</a><br><a href='index.php'>Return Home</a>"; } 
?>
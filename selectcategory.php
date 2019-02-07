<?
require_once "configure.php";
$sq = $db->query("SELECT * FROM category");
while ($row = $sq->fetchArray(SQLITE3_ASSOC) ) { 
echo "<b>" . $row[cat_title] . "</b><br>"; } 
?>
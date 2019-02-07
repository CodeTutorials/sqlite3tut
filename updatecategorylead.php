<?
require_once "configure.php";
$sq = $db->query("SELECT * FROM category");
while ($row = $sq->fetchArray(SQLITE3_ASSOC) ) { 
echo "<a href='editcategory.php?id=$row[id]'><b> Edit " . $row[cat_title] . "</b></a>|<a href='deletecategory.php?id=$row[id]'><b> Delete " . $row[cat_title] . "</b></a><br>"; } 
?>

<?php
// Display all sqlite tables
    include "configure.php";
    $tablesquery = $db->query("SELECT name FROM sqlite_master WHERE type='table';");

    while ($table = $tablesquery->fetchArray(SQLITE3_ASSOC)) {
        if ($table['name'] != "sqlite_sequence") {
            echo $table['name'] . ' <br />';
        }
    } 
    
$sq = $db->query("SELECT sql FROM sqlite_master
WHERE tbl_name = 'persons' AND type = 'table'");
while($field = $sq->fetchArray(SQLITE3_NUM) ) { 
echo "$field[0]";
} 
    
?>
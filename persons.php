<?php
include "configure.php";
  $sql =<<<EOF
     CREATE TABLE persons
     (pr_id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,

pr_firstname, pr_lastname, pr_street, pr_suburb, pr_town, pr_state, pr_zip, pr_mobilenumber, pr_email, pr_dateofbirth, pr_cate1, pr_cate2


);
EOF;

  $ret = $db->exec($sql);
  if(!$ret){
     echo $db->lastErrorMsg();
  } else {
     echo "Table created successfully\n";
  }
  $db->close();
?>

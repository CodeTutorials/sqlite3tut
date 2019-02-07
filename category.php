<?php
include "configure.php";
  $sql =<<<EOF
     CREATE TABLE category
     (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,

cat_title


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
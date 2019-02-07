<?php
require_once "configure.php";
require_once "lib.php";
$pr_firstname = cl($_POST['pr_firstname']);
$pr_lastname = cl($_POST['pr_lastname']);
$pr_street = cl($_POST['pr_street']);
$pr_suburb = cl($_POST['pr_suburb']);
$pr_town = cl($_POST['pr_town']);
$pr_state = cl($_POST['pr_state']);
$pr_zip = cl($_POST['pr_zip']);
$pr_mobilenumber = cl($_POST['pr_mobilenumber']);
$pr_email = $_POST['pr_email'];
$pr_dateofbirth = $_POST['pr_dateofbirth'];
$pr_cate1 = $_POST['cate1'];
$pr_cate2 = $_POST['cate2'];
echo "<table border='1' width='100%'>";
      echo "<tr><th>Name</th><th>Surname</th><th>Street</th><th>Suburb</th><th>Town</th><th>State</th><th>Zip</th><th>Mobile</th><th>Email</th><th>Date of Birth</th><th>Category 1</th><th>Category 2</th><tr>
<tr><th>$pr_firstname</th><th>$pr_lastname</th><th>$pr_street</th><th>$pr_suburb</th><th>$pr_town</th><th>$pr_state</th><th>$pr_zip</th><th>$pr_mobilenumber</th><th>$pr_email</th><th>$pr_dateofbirth</th><th>$pr_cate1</th><th>$pr_cate2</th><tr>";
        echo "</table><p><a href='insertpersons.php'>Return and add another</a><br><a href='index.php'>Return Home</a></p>";

$sq = $db->query("INSERT INTO persons(pr_firstname, pr_lastname, pr_street, pr_suburb, pr_town, pr_state, pr_zip, pr_mobilenumber, pr_email, pr_dateofbirth, pr_cate1, pr_cate2) VALUES('$pr_firstname','$pr_lastname','$pr_street','$pr_suburb','$pr_town','$pr_state','$pr_zip','$pr_mobilenumber','$pr_email','$pr_dateofbirth','$pr_cate1','$pr_cate2')");
?>
<?
require_once "configure.php";

?><h2>Please Enter Details</h2>
<form name='rform' id='rform' action='processpersons.php' method='post' onsubmit=''>

<label>First Name</label><br><input type='text' name='pr_firstname' value='' placeholder ='First Name' /><br>
<label>Surname</label><br><input type='text' name='pr_lastname' value='' placeholder ='Surname' /><br>
<label>Street Number and Name: eg 2 Main Street</label><br><input type='text' name='pr_street' value='' placeholder ='Street' /><br>
<label>Suburb</label><br><input type='text' name='pr_suburb' value='' placeholder ='Suburb' /><br>
<label>Town</label><br><input type='text' name='pr_town' value='' placeholder ='Town' /><br>
<label>State</label><br><input type='text' name='pr_state' value='' placeholder ='State' /><br>
<label>Zip</label><br><input type='text' name='pr_zip' value='' placeholder ='Zip' /><br>
<label>Birth Date</label><br><input type='date' name='pr_dateofbirth' value='' placeholder='Date of birth' /><br>
<label>Email Address</label><br><input type='email' id='' name='pr_email' value='' placeholder ='Email' /><br>
<label>Mobile Number</label><br><input type='number' id='' name='pr_mobilenumber' value='' placeholder ='Mobile number' /><br>
<label>Category 1</label><br><select id='' name='cate1'><br>

             <option value=''>Default</option>
<?
$sq = $db->query("SELECT * FROM category");
while ($row = $sq->fetchArray(SQLITE3_ASSOC) ) { 
             echo  "<option value='$row[id]'>$row[cat_title]</option>"; } 
?>
               
               </select><br>
<label>Category 2</label><br><select id='' name='cate2'><br>
                   <option value=''>Default</option>
<?

             
$sq = $db->query("SELECT * FROM category");
while ($row = $sq->fetchArray(SQLITE3_ASSOC) ) { 
             echo  "<option value='$row[id]'>$row[cat_title]</option>"; } 
?>
               
               </select><br>

<input type='submit' name='submit' value='submit' />

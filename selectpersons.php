<?
require_once "configure.php";

?>

   <div class='row'>
     <div class='col-12'>
      
         
        
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Street</th>
                  <th>Suburb</th>
                  <th>Town</th>
                  <th>State</th>
                  <th>Zip</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  
                  <th>Date of Birth</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Street</th>
                  <th>Suburb</th>
                  <th>Town</th>
                  <th>State</th>
                  <th>Zip</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  
                  <th>Date of Birth</th>
                  
                </tr>
              </tfoot>
              <tbody>
              <?php
              require "lib.php";
              
       $stmt = $db->query("SELECT * FROM persons");
while ($row = $stmt->fetchArray(SQLITE3_ASSOC)) {
    
$now = date("Y-m-d");




            echo "<tr>";
            
               echo "<td>" . $row["pr_firstname"]. ' ' . $row["pr_lastname"] . "</td>";
               
               echo "<td>" . $row[pr_street] . "</td>"; 
               echo "<td>" . $row[pr_suburb] . "</td><td>" . $row["pr_town"] . "</td>"; 
                echo "<td>" . $row[pr_state] . "</td><td>" . $row["pr_zip"] . "</td>";
                 echo "<td>" . $row[pr_mobilenumber] . "</td><td>" . $row["pr_email"] . "</td>";
                  echo "<td>" . $row[pr_dateofbirth] . "</td>";
               echo "</tr>";
               

               } 
               ?>
              
             
              </tbody>
            </table>
            </div>
            </div>





</div>
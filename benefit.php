<?php
require_once('connect.php');
session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Database project</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">

  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="BNN.png" border="0" />
      <div class="topnav">
        <a href="usersignin.php">Log in</a>
        <a href="userregister.php">Sign up</a>
        <a href="usermanagement.php">Home</a>
      </div>
    </div>
    <div class="motto">
      <h1>We provide professional laundry service</h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <h1 style="text-align:center">Promotion</h1>
            <br><br><br><br>
          <table>
                  <col width="5%">
                  <col width="15%">
                  <col width="5%">



                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Discount</th>
                  </tr>


                   <tr>
                      <td>1.</td>
                      <td>Discount for Gold member</td>
                      <td>15%</td>
                  </tr>
                  <tr>
                     <td>2.</td>
                     <td>Discount for Silver member</td>
                     <td>5%</td>
                 </tr>



              </table>
              <br><br><br><br>
              <h2 style="text-align:center">Infrom staff at counter to use promotion </h2>
              <br><br><br><br>
              <a href="usermanagement.php">
                <h2 style="text-align:center">Go back</h2>
              </a>
        </div>





      </div>

    </div>
  </div>

  </body>

</html>

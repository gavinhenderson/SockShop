<div class="container col-md-3">
  <a href="staffindex.php"><div id="vieworders" class="container col-md-12" style="padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;">
    <p>View Placed Orders</p>
  </div></a>
  <a href="checkstock.php"><div id="checkstock" class="container col-md-12" style="padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;">
    <p>Check Stock</p>
  </div></a>
  <a href="orderstock.php"><div id="newstock" class="container col-md-12" style="padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;">
    <p>Order New Stock</p>
  </div></a>
  <a href="recievestock.php"><div id="recievestock" class="container col-md-12" style="padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;">
    <p>Recieve Stock</p>
  </div></a>
  <a href="editaccount.php"><div id="editaccount" class="container col-md-12" style="padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;">
    <p>Edit Account</p>
  </div></a>
  <a href="editproducts1.php"><div id="editproducts" class="container col-md-12" style="padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;">
    <p>Edit Products</p>
  </div></a>

  <?php
  include_once('db.php');
  $query = "SELECT Admin FROM staffmember where Email='".$_SESSION['staffusername']."'";
  $stmt = $mysql->prepare($query);
  $isAdmin = False;
  try{
    $stmt->execute();
    $result = $stmt->fetch();
    if($result['Admin']){
      $isAdmin = True;
    }
  } catch ( PDOException $e ){
    echo $e->getMessage();
  }

  if($isAdmin){
    echo "<a href='editaccounts1.php'><div id=\"editaccounts\" class=\"container col-md-12\" style=\"padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;\">
      <p>Edit Accounts</p>
    </div></a>
    <a href='editmanufacturers.php'><div id=\"editmanufacturers\" class=\"container col-md-12\" style=\"padding-top:10px; padding-bottom: 10px; font-size:120%; background-color:#ffecd8;\">
      <p>Manufacturers</p>
    </div></a>";
  }

  ?>
</div>

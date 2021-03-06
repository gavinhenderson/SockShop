<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('php/head.php'); ?>
</head>
<script>
$('document').ready(function(){
  $('#editaccounts').css('background-color','#f7c986')
})
</script>
<body>
  <div class="container">

    <!-- The navbar -->
    <?php include('php/header.php'); ?>

    <!-- Options tab -->
    <?php include('php/sidepanel.php'); ?>

    <!-- Check Stock -->
    <form action='php/createstaffaccount.php' method='post'>
      <div class="container col-md-9" style="background-color:#ffecd8; max-height:700px; text-align:center; border-radius:5px; padding-top:10px; padding-bottom:10px">
        <div class="container col-md-6">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname">
          <label for="lname" style="padding-top:20px">Last Name:</label>
          <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname">
          <label for="bankacc" style="padding-top:20px">Bank Account No:</label>
          <input type="text" class="form-control" id="bankacc" placeholder="Enter your bank account" name="bankacc">
          <label for="email" style="padding-top:20px">Email Address:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
          <label for="phone" style="padding-top:20px">Phone No:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter your Phone No" name="phone">
          <label for="weeklyhrs" style="padding-top:20px">Weekly Hours:</label>
          <input type="text" class="form-control" id="weeklyhrs" placeholder="Enter your Weekly Hrs" name="weeklyhrs">
          <label for="position" style="padding-top:20px">Position:</label>
          <input type="text" class="form-control" id="position" placeholder="Enter your Position" name="position">
        </div>
        <div class="container col-md-6">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address">
          <label for="postcode" style="padding-top:20px">Postcode:</label>
          <input type="text" class="form-control" id="postcode" placeholder="Enter your postcode" name="postcode">
          <label for="banksort" style="padding-top:20px">Bank Sort Code:</label>
          <input type="text" class="form-control" id="banksort" placeholder="Enter your bank sort code" name="banksort">
          <label for="nationalinsurance" style="padding-top:20px">National Insurance:</label>
          <input type="text" class="form-control" id="nationalinsurance" placeholder="Enter your National Insurance" name="nationalinsurance">
          <label for="password" style="padding-top:20px">Password:</label>
          <input type="text" class="form-control" id="password" placeholder="Enter your password" name="password">
          <label for="wage" style="padding-top:20px">Wage P/H:</label>
          <input type="text" class="form-control" id="wage" placeholder="Enter your wage" name="wage">
          <label for="location" style="padding-top:20px">Location:</label>
          <select class="form-control" id="location" name="location">
            <option>Dundee</option>
            <option>Edinburgh</option>
            <option>Glasgow</option>
            <option>Aberdeen</option>
          </select>
          <label for="admin" style="padding-top:20px">Admin Access:</label>
          <select class="form-control" id="admin" name="admin">
            <option>No</option>
            <option>Yes</option>
          </select>
        </div>
        <div class="container col-md-12" style="text-align: center">
          <button type="submit" class="btn btn-primary btn-md" id="change" style="margin: auto; width:20%; margin-top: 15px;">Submit Changes</button>
        </div>
      </div>
    </form>

    <!-- Footer -->
    <?php include('php/footer.php'); ?>

    </div>
    </body>
    </html>

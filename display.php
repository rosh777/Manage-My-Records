<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Record History</title>
  </head>
  <body>

    <?php

      include('dbconnect.php');

      // create queries to select data
      $query = "SELECT customerdetails.id, customerdetails.shop_name, customerdetails.mobile_no, paymentdetails.adv_payment+paymentdetails.installment_1+paymentdetails.installment_2+paymentdetails.installment_3+paymentdetails.installment_4 AS payment_total FROM customerdetails, paymentdetails WHERE customerdetails.id = paymentdetails.payment_id ORDER BY customerdetails.id DESC";

      $result = mysqli_query($conn, $query);

    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand">RonoltoIndia Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li>
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="display.php">History</a>
          </li>
        </ul>
    </nav>
    <div class="container">
      <h3 style="text-align: center; margin-top: 10px;">All Records</h3>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1"><img src="img/search-icon.png"></span>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search..." aria-label="Shop name" aria-describedby="basic-addon1" title="Type shop name">
      </div>
      <table class="table table-hover" id="myTable">
        <thead>
          <tr style="background: gray; color: white; text-shadow: 2px 2px 5px black;">
            <th scope="col">ID</th>
            <th scope="col">Shop Name</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Total Payment</th>
            <th style="text-align: center;" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

          <?php

            while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['shop_name']; ?></td>
            <td><?php echo $row['mobile_no']; ?></td>
            <td>₹ <?php echo $row['payment_total']; ?></td>
            <td style="text-align: center;">
              <a href="updateform.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-secondary btn-sm">Update</button></a>
              
              <a href="delete.php?id=<?php echo $row['id']; ?>"  onclick="return confirm('Sure to delete ?'); "><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></a>
            </td>
          </tr>

          <?php
          }
          mysqli_close($conn);
          ?>

        </tbody>
      </table>
     
    </div>

    <!-- Optional JavaScript -->
    <script>
        function myFunction() {
          var input, filter, table, tr, td, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Admin.RonoltoInd</title>
  </head>
  <body>
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
      <h3 style="text-align: center; margin-top: 10px;">Add New Records</h3>
          <form action="insert.php" method="post">
            <div class="row">
                <div class="col-sm-6">
                  <h4 style="margin-top: 10px;">Customer Details</h4>
                  <div class="form-group">
                    <label for="shop_name">Shop Name</label>
                    <input type="text" name="shop-name" class="form-control" id="shop_name" placeholder="Enter shop name">
                  </div>
                  <div class="form-group">
                    <label for="shop_add">Shop Address</label>
                    <textarea class="form-control" name="shop-add" id="shop_add" rows="3" placeholder="Enter address of shop here"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="mobile_no">Mobile Number</label>
                    <input type="text" name="mobile-no" class="form-control" id="mobile_no" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="invoice_no">Invoice Number</label>
                      <input class="form-control" name="invoice-no" type="number" min="0" value="1" id="invoice_no">
                  </div>
                  <form>
                  <div class="form-group">
                    <label for="exampleInputFile">Invoice Document</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Choose invoice detail file.</small>
                  </div>    
                </div>
                
                <div class="col-sm-6">
                  <h4 style="margin-top: 10px;">Payment Details</h4>
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="adv_payment">Advance Payment</label>
                        <input type="number" step="any" min="0" name="adv-payment" class="form-control" id="adv_payment" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="adv_date">Date</label>
                          <input class="form-control" name="adv-date" type="date" value="" id="adv_date">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="installment_1">Installment-1</label>
                        <input type="number" step="any" min="0" name="installment-1" class="form-control" id="installment_1" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="date_1">Date</label>
                          <input class="form-control" name="date-1" type="date" value="" id="date_1">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="installment_2">Installment-2</label>
                        <input type="number" step="any" min="0" name="installment-2" class="form-control" id="installment_2" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="date_2">Date</label>
                          <input class="form-control" name="date-2" type="date" value="" id="date_2">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="installment_3">Installment-3</label>
                        <input type="number" step="any" min="0" name="installment-3" class="form-control" id="installment_3" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="date_3">Date</label>
                          <input class="form-control" name="date-3" type="date" value="" id="date-3">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="installment_4">Installment-4</label>
                        <input type="number" step="any" min="0" name="installment-4" class="form-control" id="installment_4" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="date_4">Date</label>
                          <input class="form-control" name="date-4" type="date" value="" id="date_4">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group row">
                      <label for="total_payment" class="col-2 col-form-label">Total</label>
                      <div class="col-10">
                        <input class="form-control" type="" id="total_payment">
                      </div>
                    </div> 
                    </div>
                  </div>
                </div>
  
                          
            </div>
                     <button type="submit" class="btn btn-secondary btn-lg btn-block">Save Record</button>
          </form>
     
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
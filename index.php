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
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
      </div>
    </nav>
    <div class="container">
      <h2 style="text-align: center; margin-top: 10px;">Add New Records</h2>
          <form action="insert.php" method="post">
            <div class="row">
                <div class="col-sm-6">
                  <h3 style="margin-top: 20px;">Customer Details</h3>
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
                      <input class="form-control" name="invoice-no" type="number" value="1" id="invoice_no">
                  </div>
                  <form>
                  <div class="form-group">
                    <label for="exampleInputFile">Invoice Document</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Choose invoice detail file.</small>
                  </div>    
                </div>
                
                <div class="col-sm-6">
                  <h3  style="margin-top: 20px;">Payment Details</h3>
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="adv_payment">Advance Payment</label>
                        <input type="number" name="adv-payment" class="form-control" id="adv_payment" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="example-date-input">Date</label>
                          <input class="form-control" type="date" value="" id="example-date-input">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="adv_payment">Installment-1</label>
                        <input type="number" name="adv-payment" class="form-control" id="adv_payment" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="example-date-input">Date</label>
                          <input class="form-control" type="date" value="" id="example-date-input">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="adv_payment">Installment-2</label>
                        <input type="number" name="adv-payment" class="form-control" id="adv_payment" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="example-date-input">Date</label>
                          <input class="form-control" type="date" value="" id="example-date-input">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="adv_payment">Installment-3</label>
                        <input type="number" name="adv-payment" class="form-control" id="adv_payment" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="example-date-input">Date</label>
                          <input class="form-control" type="date" value="" id="example-date-input">
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <label for="adv_payment">Installment-4</label>
                        <input type="number" name="adv-payment" class="form-control" id="adv_payment" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="example-date-input">Date</label>
                          <input class="form-control" type="date" value="" id="example-date-input">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group row">
                      <label for="total_payment" class="col-2 col-form-label">Total : </label>
                      <div class="col-10">
                        <input class="form-control" type="number" id="total_payment">
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
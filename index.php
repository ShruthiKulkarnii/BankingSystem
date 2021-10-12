<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/design.css">
  <title> UNION BANK </title>
</head>
<body background="bg.jpg" class="bg">
  <?php include 'navbar.php' ?>
  
  <div class="">
    <div class="">
      <div class="container text-center py-3">
        <h3 class="display-4">Welcome to Union Bank </h3>
      </div>
      <div class="container py-5">
        <div class="row text-center">
          <div class="col-4 h-100">
            <a href="viewCustomers.php">
              <button class="btn btn-secondary"><span class="h1">View<br>Customers</span></button>
            </a>
          </div>
          <div class="col-4 h-100">
            <a href="transferMoney.php">
              <button class="btn btn-secondary"><span class="h1">Transfer<br>Money</span></button>
            </a>
          </div>
          <div class="col-4 h-100">
            <a href="records.php">
              <button class="btn btn-secondary"><span class="h1">Transaction<br>History</span></button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
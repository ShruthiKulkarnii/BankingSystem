<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="design.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>View Customers</title>
</head>
<body class="bg">
  <?php
  include 'dbconnect.php';

  $sql = "SELECT * FROM customers";
  $result = $conn->query($sql);

  ?>
  <?php include 'navbar.php' ?>
  <div class="container py-3">
    <table class="table table-light table-striped table-hover">
      <thead>
        <tr>
          <th>Account Number</th>
          <th>Name</th>
          <th>e-mail</th>
          <th>Current Balance</th>
          <th>Function</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row["account_no"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo "Rs." . $row["current_balance"]; ?></td>
              <td>
                <form action="transferMoney.php">
                  <a>
                    <button type="submit" class="btn btn-primary">
                      Transact
                    </button>
                  </a>
                </form>
              </td>
            </tr>
        <?php }
        } else {
          echo "0 results";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>


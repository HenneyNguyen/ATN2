<!DOCTYPE html>
<html lang="en">
<head>
  <title> Customer Management</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <ul class="nav nav-pills nav-stacked">
        &nbsp;
        &nbsp;
        &nbsp;
        <li class="active"><a href="#section1" >ATN company</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
     &nbsp;
      <div class="panel panel-success">
        <div class="panel-heading">Customer Edit</div>
        <div class="panel-body" >     
          <form action="hanlde.php" method="post" enctype="MULTIPLE/form-data">
            <div class="form-group">
              <label for="ID">ID:</label>
              <input type="text" name="ID" class="form-control">
            </div>
            <div class="form-group">
              <label for="Name">Full Name:</label>
              <input type="text" name="Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="Age">Age:</label>
              <td><input type="text" name="Age" class="form-control"></td>
            </div>
            <div class="form-group">
              <label for="Phone">Phone:</label>
              <td><input type="text" name="Phone" class="form-control"></td>
            </div>
            <div class="form-group">
              <label for="Email">Email:</label>
              <td><input type="text" name="Email" class="form-control"></td>
            </div>
              <input type="submit" class="btn btn-info" name="them" id="them">
            </form>
        </div>
      </div>

     &nbsp;
      <div class="panel panel-danger">
        <div class="panel-heading">Customer Info</div>
        <div class="panel-body">     
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                  <?php
                  require_once('./dbconnector.php');
                  $cn = new DBConnector();
                  $sql="Select * from customer";
                  $rows = $cn->runQuery($sql) or die ("");
                  foreach ($rows as $r) {
                  ?>  
              <tr>
                <td><?=$r['ID']?></td>
                <td><?=$r['Name']?></td>
                <td><?=$r['Age']?></td>
                <td><?=$r['Phone']?></td>
                <td><?=$r['Email']?></td>
                <td>
                  <a href="hanlde.php?id=<?=$r['id']?>" class="btn btn-success" role="button" >
                  DELETE
                  </a>

                </td> 
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
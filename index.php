<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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
      <div class="panel panel-primary">
        <div class="panel-heading">Staff Edit</div>
        <div class="panel-body">     
          <form action="" method="post" enctype="MULTIPLE/form-data">
            <div class="form-group">
              <label for="email">Name:</label>
              <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
              <label for="pwd">Job:</label>
              <td><input type="text" name="job" class="form-control" value=""></td>
            </div>
            <div class="form-group">
              <label for="pwd">Address:</label>
              <td><input type="text" name="address" class="form-control" value=""></td>
            </div>
            <div class="form-group">
              <label for="pwd">Salary:</label>
              <td><input type="text" name="salary" class="form-control" value=""></td>
            </div>
              <input type="submit" class="btn btn-info" name="them" id="them" value="Add">
            </form>
        </div>
      </div>

     &nbsp;
      <div class="panel panel-primary">
        <div class="panel-heading">Staff Edit</div>
        <div class="panel-body">     
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Job</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Satus</th>
              </tr>
            </thead>
            <tbody>
                  <?php
                  require_once('./dbconnector.php');
                  $cn = new DBConnector();
                  $sql="Select * from staff";
                  $rows = $cn->runQuery($sql);
                  foreach ($rows as $r) {
                  ?>  
              <tr>
                <td><?=$r['name']?></td>
                <td><?=$r['job']?></td>
                <td><?=$r['address']?></td>
                <td><?=$r['salary']?></td>
                <td>
                  <a href="handling.php?id=<?=$r['id']?>" class="delete" title="Delete" data-toggle="tooltip">
                    <i class="material-icons">&#xE872;</i>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Employee</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/add">Add Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/search">Search employee</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div></div>
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<table class="table table-borderless">
<strong>Employee Add</strong>
<tr>
    <td>Name</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Code</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Designation</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Salary</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>DOB</td>
    <td><input type="date" class="form-control"></td>
</tr>
<tr>
    <td>Place</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>pin</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td>Phone</td>
    <td><input type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-dark">Submit</button></td>
</tr>
</table></div></div></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 

</body>
</html>
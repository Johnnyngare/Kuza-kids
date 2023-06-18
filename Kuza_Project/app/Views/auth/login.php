<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <style>
    body {
      background-color: #fff;
      font-family: sans-serif;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
    }

    h4 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-control {
      border: 1px solid #ccc;
      padding: 10px;
      width: 100%;
    }

    .btn {
      background-color: #000;
      color: #fff;
      border: none;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-primary {
      background-color: #000;
      color: #fff;
      border: none;
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }

    .text-danger {
      color: red;
    }
  </style>
</head>
<body>



<div class="container">
    <div class="row" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Sign In</h4>
            <form action="">
            <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Enter your email">
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="text" class="form-controller" name="password" placeholder="Enter password">
</div>
<div class="form-group">
   <button class="btn btn-primary btn-block" type="submit">Sign In</button>
</div>
<br>
<a href="<?=site_url('auth/register'); ?>">Have no Account, create new account</a>
</form>


        </div>

    </div>
</div>

    
</body>
</html>
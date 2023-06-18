<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
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
  <h4 class="text-center">Sign Up</h4>
  <form action="<?= base_url('auth/save'); ?>" method="post">
    <?= csrf_field(); ?>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter your full name" value="<?= set_value('name'); ?>">
      <?= isset($validation) ? '<span class="text-danger">' . display_error($validation, 'name') . '</span>' : '' ?>

    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email" value="<?= set_value('email'); ?>">
      <?= isset($validation) ? '<span class="text-danger">' . display_error($validation, 'email') . '</span>' : '' ?>

    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
      <?= isset($validation) ? '<span class="text-danger">' . display_error($validation, 'password') . '</span>' : '' ?>

    </div>
    <div class="form-group">
      <label for="cpassword">Confirm Password</label>
      <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password">
      <?= isset($validation) ? '<span class="text-danger">' . display_error($validation, 'cpassword') . '</span>' : '' ?>

    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
    </div>
    <br>
    <a href="<?= site_url('auth'); ?>">I already have an account, login now</a>
  </form>
</div>

</body>
</html>

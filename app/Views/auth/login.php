<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
  <h4 class="text-center">Login</h4>
  <form action="<?= base_url('auth/login'); ?>" method="post">
    <?= csrf_field(); ?>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email">
      <?php if (isset($validation) && $validation->hasError('email')) : ?>
        <span class="text-danger"><?= $validation->getError('email'); ?></span>
      <?php endif; ?>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password">
      <?php if (isset($validation) && $validation->hasError('password')) : ?>
        <span class="text-danger"><?= $validation->getError('password'); ?></span>
      <?php endif; ?>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>
</div>

</body>
</html>

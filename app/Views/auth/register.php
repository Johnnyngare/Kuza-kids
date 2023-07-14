<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCAMS</title>
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

    .alert {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
    }

    .alert-danger {
      background-color: #f44336;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    
    <h4 class="text-center">SCAMS</h4>
    <form action="<?= base_url('auth/save'); ?>" method="post">
      <?= csrf_field(); ?>

      <?php if (session()->getFlashdata('fail')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
      <?php endif; ?>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your full name" value="<?= set_value('name'); ?>">
        <?php if (isset($validation) && $validation->getError('name')) : ?>
          <span class="text-danger"><?= $validation->getError('name'); ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="<?= set_value('email'); ?>">
        <?php if (isset($validation) && $validation->hasError('email')) : ?>
          <span class="text-danger"><?= $validation->getError('email'); ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password">
        <?php if (isset($validation) && $validation->hasError('password')) : ?>
          <span class="text-danger"><?= $validation->getError('password'); ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password">
        <?php if (isset($validation) && $validation->hasError('cpassword')) : ?>
          <span class="text-danger"><?= $validation->getError('cpassword'); ?></span>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>

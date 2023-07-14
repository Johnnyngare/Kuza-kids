<html>
<head>
    <title>Authentication Page</title>
</head>
<body>
    <h1>Authentication Page</h1>

    <form action="/register" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <?php if ($validation && $validation->getError('name')) : ?>
            <p><?php echo $validation->getError('name'); ?></p>
        <?php endif; ?>
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <?php if ($validation && $validation->getError('email')) : ?>
            <p><?php echo $validation->getError('email'); ?></p>
        <?php endif; ?>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <?php if ($validation && $validation->getError('password')) : ?>
            <p><?php echo $validation->getError('password'); ?></p>
        <?php endif; ?>
        <br>

        <label for="cpassword">Confirm Password:</label>
        <input type="password" name="cpassword" id="cpassword">
        <?php if ($validation && $validation->getError('cpassword')) : ?>
            <p><?php echo $validation->getError('cpassword'); ?></p>
        <?php endif; ?>
        <br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

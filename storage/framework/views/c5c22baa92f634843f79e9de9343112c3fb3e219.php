<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Edynos | Register</title>

    <link href="assets/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/landing/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/landing/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="assets/landing/css/animate.css" rel="stylesheet">
    <link href="assets/landing/css/style.css" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Er</h1>

            </div>
            <h3>Edynos Registration</h3>
            <p>Create an account and jump in.</p>
            <form class="m-t" role="form" method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                    <input id="username" type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                    <?php if($errors->has('username')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('username')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                      <input id="password" type="password" class="form-control" name="password" required>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                    <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                    <p class="text-muted text-center"><small>Already have an account?</small></p>
                    <a class="btn btn-sm btn-white btn-block" href="<?php echo e(route('login')); ?>">Login</a>
                </form>
                <p class="m-t"> <small>Crafted with care using laravel framework &copy; 2014</small> </p>
            </div>
        </div>


    <!-- Mainly scripts -->
    <script src="assets/landing/js/jquery-3.1.1.min.js"></script>
    <script src="assets/landing/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="assets/landing/js/plugins/iCheck/icheck.min.js"></script>

</body>

</html>

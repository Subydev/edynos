<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <title>Edynos | Login</title>

    <link href="assets/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/landing/font-awesome/css/font-awesome.css" rel="stylesheet">

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

                <h1 class="logo-name">El</h1>

            </div>
            <h3>Welcome to Edynos</h3>
            <p>For tuners, by tuners.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p></p>
            <form class="m-t" role="form" method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <input id="username" placeholder="Username" type="username" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                    <?php if($errors->has('username')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('username')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="<?php echo e(route('password.request')); ?>"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Don't have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo e(route('register')); ?>">Create an account</a>
            </form>
            <p class="m-t"> <small>Edynos, proudly build on laravel framework &copy; 2017</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="assets/landing/js/jquery-3.1.1.min.js"></script>
    <script src="assets/landing/js/bootstrap.min.js"></script>

</body>

</html>

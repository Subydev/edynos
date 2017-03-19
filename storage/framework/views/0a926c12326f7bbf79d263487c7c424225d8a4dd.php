<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Edynos | Password</title>
]
    <link rel="stylesheet" href="<?php echo e(asset('/assets/landing/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/landing/font-awesome/css/font-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/landing/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/landing/css/style.css')); ?>">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
    <div id="app">

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
<script type="text/javascript" src="<?php echo e(URL::asset('js/app.js')); ?>"></script>

</body>
</html>

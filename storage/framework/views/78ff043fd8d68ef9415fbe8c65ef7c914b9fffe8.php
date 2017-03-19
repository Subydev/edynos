<?php $__env->startSection('content'); ?>
  <body class="gray-bg">

      <div class="passwordBox animated fadeInDown">
          <div class="row">

              <div class="col-md-12">
                  <div class="ibox-content">

                      <h2 class="font-bold">Forgot password</h2>

                      <?php if(session('status')): ?>
                          <div class="alert alert-success">
                              <?php echo e(session('status')); ?>

                          </div>
                      <?php endif; ?>

                      <p>
                          Enter your email address and your password will be reset and emailed to you.
                      </p>

                      <div class="row">

                          <div class="col-lg-12">
                              <form class="m-t" role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
                                <?php echo e(csrf_field()); ?>


                                  <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                      <input id="email" placeholder="Email Address" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                      <?php if($errors->has('email')): ?>
                                          <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                          </span>
                                      <?php endif; ?>
                                  </div>

                                  <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>

                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <hr/>
          <div class="row">
              <div class="col-md-6">
                  Edynos
              </div>
              <div class="col-md-6 text-right">
                 <small>© 2017</small>
              </div>
          </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.passwords.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
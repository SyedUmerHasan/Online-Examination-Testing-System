<?php $__env->startSection('content'); ?>
      <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="/app-assets/images/logo/logo-dark.png" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login with Modern</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>


                      <fieldset class="form-group position-relative has-icon-left mb-0 <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" class="form-control form-control-lg input-lg" id="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus
                        required placeholder="Enter Your Email Address">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input id="password" type="password" name="password" class="form-control form-control-lg input-lg" 
                        placeholder="Enter Password" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> 
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right"><a href="<?php echo e(route('password.request')); ?>" class="card-link">Forgot Password?</a></div>
                      </div>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <p class="float-sm-left text-center m-0"><a href="<?php echo e(route('password.request')); ?>" class="card-link">Recover password</a></p>
                    <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="<?php echo e(route('register')); ?>" class="card-link">Sign Up</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_layout.ad_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
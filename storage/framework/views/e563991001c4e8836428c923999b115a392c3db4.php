<?php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
?>



<?php $__env->startSection('title', 'Forgot Password'); ?>

<?php $__env->startSection('page-style'); ?>

<link rel="stylesheet" href="<?php echo e(asset(mix('assets/vendor/css/pages/page-auth.css'))); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        <!-- <img src="<?php echo e(asset('assets/img/pages/forgot-password-'.$configData['style'].'.png')); ?>" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/forgot-password-light.png" data-app-dark-img="pages/forgot-password-dark.png"> -->
        <div class="mx-auto">
          <h3>No te preocupes, te enviaremos las intrucciones 👩🏻‍💻</h3>
          <p>
            Podemos ayudarte a recuperar tu informacion. Primero, introduce <br> tu email y haz click en el boton.
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->
    <!-- Forgot Password -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-4">
          <a href="<?php echo e(url('/')); ?>" class="app-brand-link gap-2 mb-2">
            <!-- <span class="app-brand-logo demo"><?php echo $__env->make('_partials.macros', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></span> -->
            <span class="app-brand-text demo h3 mb-0 fw-bold">ANE</span>
          </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-2">Olvidaste tu contraseña? 🔒</h4>
        <p class="mb-4">Introduce tu email y te enviaremos instrucciones para que reestablescas tu contraseña</p>

        <?php if(session('status')): ?>
        <div class="mb-1 text-success">
          <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>

        <form id="formAuthentication" class="mb-3" action="<?php echo e(route('password.email')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" placeholder="john@example.com" autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
              <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <button type="submit" class="btn btn-primary d-grid w-100">Enviar link de reseteo</button>
        </form>
        <div class="text-center">
          <?php if(Route::has('login')): ?>
          <a href="<?php echo e(route('login')); ?>" class="d-flex align-items-center justify-content-center">
            <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
            Iniciar Sesión
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- /Forgot Password -->
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/blankLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel-init\resources\views/auth/forgot-password.blade.php ENDPATH**/ ?>
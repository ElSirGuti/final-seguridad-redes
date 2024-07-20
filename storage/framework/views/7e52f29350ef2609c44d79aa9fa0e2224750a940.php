

<?php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['link' => 'javascript:void(0)', 'name' => 'User'], ['name' => 'Profile']];
?>

<?php $__env->startSection('title', 'Profile'); ?>


<?php $__env->startSection('content'); ?>

  <?php if(Laravel\Fortify\Features::canUpdateProfileInformation()): ?>
   <div class="mb-4">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-profile-information-form')->html();
} elseif ($_instance->childHasBeenRendered('FVcGZFh')) {
    $componentId = $_instance->getRenderedChildComponentId('FVcGZFh');
    $componentTag = $_instance->getRenderedChildComponentTagName('FVcGZFh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FVcGZFh');
} else {
    $response = \Livewire\Livewire::mount('profile.update-profile-information-form');
    $html = $response->html();
    $_instance->logRenderedChild('FVcGZFh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   </div>
  <?php endif; ?>

  <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
    <div class="mb-4">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password-form')->html();
} elseif ($_instance->childHasBeenRendered('c5uZnXE')) {
    $componentId = $_instance->getRenderedChildComponentId('c5uZnXE');
    $componentTag = $_instance->getRenderedChildComponentTagName('c5uZnXE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('c5uZnXE');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password-form');
    $html = $response->html();
    $_instance->logRenderedChild('c5uZnXE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
  <?php endif; ?>

  <?php if(Laravel\Fortify\Features::canManageTwoFactorAuthentication()): ?>
   <div class="mb-4">
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.two-factor-authentication-form')->html();
} elseif ($_instance->childHasBeenRendered('AzNc6Sa')) {
    $componentId = $_instance->getRenderedChildComponentId('AzNc6Sa');
    $componentTag = $_instance->getRenderedChildComponentTagName('AzNc6Sa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AzNc6Sa');
} else {
    $response = \Livewire\Livewire::mount('profile.two-factor-authentication-form');
    $html = $response->html();
    $_instance->logRenderedChild('AzNc6Sa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
   </div>
  <?php endif; ?>

  <div class="mb-4">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form')->html();
} elseif ($_instance->childHasBeenRendered('i4s2jIf')) {
    $componentId = $_instance->getRenderedChildComponentId('i4s2jIf');
    $componentTag = $_instance->getRenderedChildComponentTagName('i4s2jIf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('i4s2jIf');
} else {
    $response = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form');
    $html = $response->html();
    $_instance->logRenderedChild('i4s2jIf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  </div>

  <?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.delete-user-form')->html();
} elseif ($_instance->childHasBeenRendered('h3TjO4g')) {
    $componentId = $_instance->getRenderedChildComponentId('h3TjO4g');
    $componentTag = $_instance->getRenderedChildComponentTagName('h3TjO4g');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('h3TjO4g');
} else {
    $response = \Livewire\Livewire::mount('profile.delete-user-form');
    $html = $response->html();
    $_instance->logRenderedChild('h3TjO4g', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel-init\resources\views/profile/show.blade.php ENDPATH**/ ?>
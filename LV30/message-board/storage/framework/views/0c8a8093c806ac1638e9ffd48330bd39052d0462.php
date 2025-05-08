

<?php $__env->startSection('content'); ?>
<h1>会員登録</h1>
<?php echo $__env->make('commons.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form action="<?php echo e(route('update'), $user->name); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
    <p>
        <label>名前</label><br>
        <input type="text" name="name" value="<?php echo e($user->name); ?>">
    </p>
    <p>
        <button type="submit">更新する</button>
    </p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel\LV30\message-board\resources\views/profile/edit.blade.php ENDPATH**/ ?>
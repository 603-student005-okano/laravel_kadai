

<?php $__env->startSection('content'); ?>
<h1>マイページ</h1>
<p>ようこそ、<?php echo e($user->name); ?>さん</p>
<p><a href="<?php echo e(route('edit', $user->id)); ?>">プロフィール編集画面へ</a></p>
<form action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="submit" value="ログアウト">
</form>
<form action="<?php echo e(route('destroy')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <input type="submit" value="退会する">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel\LV30\message-board\resources\views/home/index.blade.php ENDPATH**/ ?>
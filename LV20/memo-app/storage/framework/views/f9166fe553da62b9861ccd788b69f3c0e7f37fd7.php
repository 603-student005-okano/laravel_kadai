<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>メモ帳アプリ</title>
    </head>
    <body>
        <h1>メモ一覧</h1>
        <p><a href="<?php echo e(route('memos.create')); ?>">新規メモ作成</a></p>
        <?php $__currentLoopData = $memos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><a href="<?php echo e(route('memos.show', $memo->id)); ?>"><?php echo e($memo->title); ?></a></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\LV20\memo-app\resources\views/index.blade.php ENDPATH**/ ?>
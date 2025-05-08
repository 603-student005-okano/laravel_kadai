<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>メモ帳アプリ</title>
    </head>
    <body>
        <h1>メモ削除確認</h1>
        <h2>タイトル：<?php echo e($memo->title); ?></h2>
        <p>このメモを本当に削除しますか？</p>
        <form action="<?php echo e(route('memos.destroy', $memo->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit">削除する</button>
        </form>
        <hr>
        <a href="<?php echo e(route('memos.show', $memo->id)); ?>">キャンセル</a>
    </body>
</html><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\LV20\memo-app\resources\views/delete.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>メモ帳アプリ</title>
    </head>
    <body>
        <h1>メモの編集</h1>
        <form action="<?php echo e(route('memos.update', $memo->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <dl>
                <dt>タイトル</dt>
                <!-- HTMLで入力チェックをするなら required属性 -->
                <dd><input type="text" name="title" value="<?php echo e($memo->title); ?>" required></dd>
                <dt>本文</dt>
                <!-- textareaに最初から値を入れる場合はタグで囲む -->
                <dd><textarea name="content" required><?php echo e($memo->content); ?></textarea></dd>
            </dl>
            <button type="submit">登録する</button>
        </form>
        <a href="<?php echo e(route('memos.show', $memo->id)); ?>">キャンセル</a>
    </body>
</html><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\LV20\memo-app\resources\views/edit.blade.php ENDPATH**/ ?>
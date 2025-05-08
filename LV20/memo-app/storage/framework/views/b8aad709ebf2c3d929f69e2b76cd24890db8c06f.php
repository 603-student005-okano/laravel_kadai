<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>メモ帳アプリ</title>
    </head>
    <body>
        <h1>メモの新規作成</h1>
        <form action="<?php echo e(route('memos.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <dl>
                <dt>タイトル</dt>
                <!-- HTMLで入力チェックをするなら required属性 -->
                <dd><input type="text" name="title" required></dd>
                <dt>本文</dt>
                <dd><textarea name="content" required></textarea></dd>
            </dl>
            <button type="submit">登録する</button>
        </form>
        <a href="/">キャンセル</a>
    </body>
</html><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\LV20\memo-app\resources\views/create.blade.php ENDPATH**/ ?>
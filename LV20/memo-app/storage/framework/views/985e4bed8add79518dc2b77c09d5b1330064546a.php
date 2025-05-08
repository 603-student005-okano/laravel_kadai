<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>メモ帳アプリ</title>
    </head>
    <body>
        <h1>メモ詳細</h1>
        <h2><?php echo e($memo->title); ?></h2>
        <!-- 改行を反映させるCSS = white-space: pre-wrap -->
        <p style="white-space: pre-wrap"><?php echo e($memo->content); ?></p>
        <p>作成日時：<?php echo e($memo->created_at); ?></p>
        <a href="<?php echo e(route('memos.edit', $memo->id)); ?>">編集する</a> 
        <a href="/">メモ一覧へ</a>
        <hr>
        <a href="<?php echo e(route('memos.delete', $memo->id)); ?>">削除する</a> 
    </body>
</html><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel-kadai\LV20\memo-app\resources\views/show.blade.php ENDPATH**/ ?>
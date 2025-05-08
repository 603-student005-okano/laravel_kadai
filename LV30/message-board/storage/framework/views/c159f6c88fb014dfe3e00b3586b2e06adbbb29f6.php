<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title><?php echo e(config('app.name')); ?></title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header>
            <div class="container">
                <a class="brand" href="/"><?php echo e(config('app.name')); ?></a>
            </div>
        </header>
        <main>
            <div class="container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </body>
</html><?php /**PATH C:\Users\student\Desktop\PHP研修\laravel\LV30\message-board\resources\views/layouts/app.blade.php ENDPATH**/ ?>
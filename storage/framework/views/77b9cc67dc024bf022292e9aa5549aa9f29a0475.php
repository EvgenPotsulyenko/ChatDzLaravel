<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(env('APP_NAME')); ?></title>

    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(mix('/js/app.js')); ?>" defer></script>
</head>
<body>

<div id="app">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
<?php /**PATH C:\OSPanel\domains\untitled\resources\views/layouts/app.blade.php ENDPATH**/ ?>
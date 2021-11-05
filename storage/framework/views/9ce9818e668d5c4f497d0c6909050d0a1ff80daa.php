<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Review</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
<header>
    <h1>Quick Review</h1>
    <nav>
        <?php if(Auth::user()): ?>
            <?php if(Auth::user()->isAdmin()): ?>
                <a href="<?php echo e(route('admin.index')); ?>">Filmy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo e(route('admin.reviews.index')); ?>">Moje recenzje</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo e(route('admin.reviews.all')); ?>">Wszystkie recenzje</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo e(route('admin.profile.index')); ?>">Profil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php else: ?>
                <a href="<?php echo e(route('user.index')); ?>">Filmy</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo e(route('user.reviews.index')); ?>">Moje recenzje</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo e(route('user.profile.index')); ?>">Profil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php endif; ?>

            <a href="<?php echo e(route('logout')); ?>">Wyloguj się</a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>">Zaloguj się</a> &nbsp;
            <a href="<?php echo e(route('register')); ?>">Zarejstruj się</a>
        <?php endif; ?>
    </nav>
</header>
<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH E:\Programy\xampp\htdocs\QuickReview\resources\views/layouts/app.blade.php ENDPATH**/ ?>
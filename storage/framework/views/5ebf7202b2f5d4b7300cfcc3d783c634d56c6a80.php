<?php $__env->startSection('content'); ?>

    <form class="login-form form" id="login-form" method="POST">
    <?php echo csrf_field(); ?>
        <p>Logowanie</p>
        <span style="color: red">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </span>

        <input type="text" placeholder="Login" name="login" required>
        <input type="password" placeholder="Hasło" name="password" required>
        <a href="<?php echo e(route('reset')); ?>" class="forgot-link" style="color: #000000">Nie pamiętam hasła</a>
        <button type="submit">Zaloguj się</button>
        <span>lub</span>
        <a href="<?php echo e(route('register')); ?>" style="color: #000000">Załóż konto</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\QuickReview-test\resources\views/auth/login.blade.php ENDPATH**/ ?>
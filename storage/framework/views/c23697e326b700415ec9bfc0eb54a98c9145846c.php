<?php $__env->startSection('content'); ?>

    <?php if(isset($success)): ?>
    <span style="color: green">
        <?php echo e($success); ?>

    </span>
    <?php endif; ?>

    <form class="login-form form" id="login-form" method="POST">
        <?php echo csrf_field(); ?>
        <p>Resetowanie hasła</p>
        <span style="color: red">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </span>

        <label>Twój adres email</label>
        <input type="email" placeholder="Twój adres email" name="email" required>
        <button type="submit">Resetuj</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\QuickReview\resources\views/auth/reset.blade.php ENDPATH**/ ?>
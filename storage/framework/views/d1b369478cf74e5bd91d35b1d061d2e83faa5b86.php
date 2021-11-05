<?php $__env->startSection('content'); ?>
    <form class="registration-form form" id="login-form" method="POST">
        <?php echo csrf_field(); ?>
        <p>Załóż konto</p>
        <?php if($errors->any()): ?>
            <p>
                <ul style="color: red">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </p>
        <?php endif; ?>
        <input type="text" placeholder="Imię" name="name" required>
        <input type="text" placeholder="Nazwisko" name="surname" required>
        <input type="email" placeholder="Adres e-mail" name="email" required>
        <input type="text" placeholder="Login" name="login" required>
        <input type="password" placeholder="Hasło" name="password" required>
        <input type="password" placeholder="Powtórz hasło" name="passwordRepeat" required>
        <button type="submit">Załóż konto</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\review-dev2\resources\views/auth/register.blade.php ENDPATH**/ ?>
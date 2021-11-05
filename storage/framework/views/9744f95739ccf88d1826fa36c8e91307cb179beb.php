<?php $__env->startSection('content'); ?>
        <form class="form" method="POST">
            <?php echo csrf_field(); ?>
            <p>Moje dane</p>
            <?php if($errors->any()): ?>
                <p>
                <ul style="color: red">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </p>
            <?php endif; ?>

            <label>Imię</label>
            <input type="text" value="<?php echo e(mb_strimwidth($user->name, 0, 50)); ?>" name="name" placeholder="Imię" required>

            <label>Nazwisko</label>
            <input type="text" value="<?php echo e(mb_strimwidth($user->surname, 0, 50)); ?>" name="surname" placeholder="Nazwisko" required>

            <label>Login</label>
            <input type="text" value="<?php echo e(mb_strimwidth($user->login, 0, 50)); ?>" name="login" placeholder="Login" required>

            <button type="submit" id="add-new-film-button">Edytuj swoje dane</button>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\QuickReview\resources\views/user/profile/index.blade.php ENDPATH**/ ?>
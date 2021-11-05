<?php $__env->startSection('content'); ?>

    <form class="form" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <p>Dodanie filmu</p>
        <?php if($errors->any()): ?>
            <p>
            <ul style="color: red">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </p>
        <?php endif; ?>
        <label>Nazwa filmu</label>
        <input type="text" value="" name="title" placeholder="Nazwa filmu" required>

        <label>Gatunek</label>
        <input type="text" value="" name="kind" placeholder="Gatunek" required>

        <label>Data wydania</label>
        <input type="date" value="" name="date" placeholder="Data wydania" required>

        <label>Reżyser</label>
        <input type="text" value="" name="producer" placeholder="Reżyser" required>

        <label>Obraz</label>
        <input type="file" value="" name="image" placeholder="Obraz" accept="image/*" required>

        <button type="submit" id="add-new-film-button">Dodaj film</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\review-dev2\resources\views/admin/films/create.blade.php ENDPATH**/ ?>
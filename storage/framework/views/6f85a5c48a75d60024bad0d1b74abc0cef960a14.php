<?php $__env->startSection('content'); ?>
        <form class="form" method="POST">
            <?php echo csrf_field(); ?>
            <p>Recenzja</p>
            <?php if($errors->any()): ?>
                <p>
                <ul style="color: red">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </p>
            <?php endif; ?>

            <label>Tytuł filmu</label>
            <input type="text" value="<?php echo e(mb_strimwidth($review->film->title, 0, 50)); ?>" placeholder="Tytuł filmu" disabled>

            <label>Tytuł</label>
            <input type="text" name="title" value="<?php echo e(mb_strimwidth($review->title, 0, 50)); ?>" placeholder="Tytuł" required>

            <label>Recenzja</label>
            <textarea name="desc" placeholder="Recenzja" required rows="10"> <?php echo e($review->desc); ?> </textarea>

            <label>Ocena</label>
            <input type="number" name="stars" value="<?php echo e(mb_strimwidth($review->stars, 0, 50)); ?>" placeholder="Ocena" min="0" max="10" step="1" required>

            <button type="submit" id="add-new-film-button">Edytuj recenzję</button>
        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\QuickReview-test\resources\views/admin/reviews/edit.blade.php ENDPATH**/ ?>
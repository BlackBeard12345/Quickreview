<?php $__env->startSection('content'); ?>
        <form class="form" method="POST">
            <?php echo csrf_field(); ?>
            <p>Recenzja</p>

            <label>Tytuł filmu</label>
            <input type="text" value="<?php echo e($review->film->title); ?>" placeholder="Tytuł filmu" disabled>

            <label>Tytuł</label>
            <input type="text" name="title" value="<?php echo e($review->title); ?>" placeholder="Tytuł" disabled>

            <label>Recenzja</label>
            <textarea name="desc" placeholder="Recenzja" disabled rows="10"> <?php echo e($review->desc); ?> </textarea>

            <label>Ocena</label>
            <input type="number" name="stars" value="<?php echo e($review->stars); ?>" placeholder="Ocena" min="0" max="10" step="1" disabled>

        </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\review-dev2\resources\views/user/reviews/show.blade.php ENDPATH**/ ?>
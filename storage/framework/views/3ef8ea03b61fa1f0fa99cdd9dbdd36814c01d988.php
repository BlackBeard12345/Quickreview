<?php $__env->startSection('content'); ?>

<div class="form">

    <table class="all-films-table">

        <thead>
        <tr>
            <th>Film</th>
            <th>Tytuł recenzji</th>
            <th>Recenzja</th>
            <th>Ocena</th>
            <th>Data dodania</th>
            <th>Akcje</th>
        </tr>
        </thead>
        <tbody id="table-body" class="table-body">
        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(mb_strimwidth($review->film->title, 0, 50)); ?></td>
                <td><?php echo e(mb_strimwidth($review->title, 0, 50, '...')); ?></td>
                <td><?php echo e(mb_strimwidth($review->desc, 0, 50, '...')); ?></td>
                <td><?php echo e(mb_strimwidth($review->stars, 0, 50)); ?></td>
                <td><?php echo e(mb_strimwidth($review->created_at, 0, 50)); ?>&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <a href="<?php echo e(route('admin.reviews.show', $review->id)); ?>">Zobacz</a> |
                    <a href="<?php echo e(route('admin.reviews.edit', [$review->film->id, Auth::id()])); ?>">Edytuj</a> | <a href="<?php echo e(route('admin.reviews.delete', $review->film->id)); ?>">Usuń</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\QuickReview\resources\views/admin/reviews/index.blade.php ENDPATH**/ ?>
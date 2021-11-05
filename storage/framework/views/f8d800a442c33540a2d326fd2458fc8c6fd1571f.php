<?php $__env->startSection('content'); ?>

<div class="form">

    <table class="all-films-table">

        <thead>
        <tr>
            <th>Obraz</th>
            <th>Gatunek</th>
            <th>Nazwa filmu</th>
            <th>Data wydania</th>
            <th>Średnia ocen</th>
            <th>Reżyser</th>
            <th>Liczba recenzji</th>
            <th>Akcje</th>
        </tr>
        </thead>
        <tbody id="table-body" class="table-body">
        <?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <img src="<?php echo e($film->path); ?>" width="200">
                </td>
                <td><?php echo e(mb_strimwidth($film->kind, 0, 50)); ?></td>
                <td><?php echo e(mb_strimwidth($film->title, 0, 50)); ?></td>
                <td><?php echo e(mb_strimwidth($film->date, 0, 50)); ?></td>
                <td><?php echo e($film->stars ? mb_strimwidth($film->stars, 0, 50) : '-'); ?></td>
                <td><?php echo e(mb_strimwidth($film->producer, 0, 50)); ?></td>
                <td><?php echo e($film->reviews_count); ?></td>
                <td><a href="<?php echo e(route('user.films.show', $film->id)); ?>">Zobacz</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($films->links()); ?>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\review-dev\resources\views/user/index.blade.php ENDPATH**/ ?>
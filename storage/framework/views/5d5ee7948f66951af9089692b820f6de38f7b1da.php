<?php $__env->startSection('content'); ?>

    <form class="form">
        <p>Informacja o filmie</p>

        <label>Nazwa filmu</label>
        <input type="text" value="<?php echo e(mb_strimwidth($film->title, 0, 50)); ?>" placeholder="Nazwa" disabled>

        <label>Gatunek</label>
        <input type="text" value="<?php echo e(mb_strimwidth($film->kind, 0, 50)); ?>" placeholder="Gatunek" disabled>

        <label>Data wydania</label>
        <input type="date" value="<?php echo e($film->date); ?>" placeholder="Nazwa" disabled>

        <label>Reżyser</label>
        <input type="text" value="<?php echo e(mb_strimwidth($film->producer, 0, 50)); ?>" placeholder="Reżyser" disabled>

        <label>Ocena</label>
        <input type="text" value="<?php echo e($film->stars ? mb_strimwidth($film->stars, 0, 50) : '-'); ?>" placeholder="Stars" disabled>

        <label>Obraz</label>
        <img src="<?php echo e($film->path); ?>" width="400">
    </form>

    <div class="form">
        <p>Recenzji</p>
        <table class="all-films-table">
            <thead>
            <tr>
                <th>Imię użytkownika</th>
                <th>Temat recenzji</th>
                <th>Recenzja</th>
                <th>Ocena</th>
                <th>Akcje</th>
            </tr>
            </thead>
            <tbody id="table-body" class="table-body">
            <?php $__currentLoopData = $film->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(mb_strimwidth($review->user->name, 0, 50)); ?></td>
                    <td><?php echo e(mb_strimwidth($review->title, 0, 50)); ?></td>
                    <td><?php echo e(mb_strimwidth($review->desc, 0, 50, '...')); ?></td>
                    <td><?php echo e(mb_strimwidth($review->stars, 0, 50)); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.reviews.show', $review->id)); ?>">Zobacz</a> |
                        <a href="<?php echo e(route('admin.reviews.edit', [$film->id, $review->user->id])); ?>">Edytuj</a> | <a href="<?php echo e(route('admin.reviews.delete', $film->id)); ?>">Usuń</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <form class="form" method="POST" action="<?php echo e(route('admin.reviews.store', $film->id)); ?>">
        <?php echo csrf_field(); ?>
        <p>Dodaj recenzję</p>
        <?php if($errors->any()): ?>
            <p>
            <ul style="color: red">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </p>
        <?php endif; ?>

        <label>Tytuł</label>
        <input type="text" name="title" placeholder="Tytuł" required>

        <label>Recenzja</label>
        <input type="text" name="desc" placeholder="Recenzja" required>

        <label>Ocena</label>
        <input type="number" name="stars" placeholder="Ocena" min="0" max="10" step="1" required>

        <button type="submit" id="add-new-film-button">Dodaj recenzję</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Programy\xampp\htdocs\review-dev2\resources\views/admin/films/show.blade.php ENDPATH**/ ?>
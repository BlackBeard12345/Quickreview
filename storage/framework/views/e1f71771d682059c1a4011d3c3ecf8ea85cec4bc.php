
<?php if($paginator->lastPage() > 1): ?>
    <div class="col-lg-12 col-md-12">
        <div class="pagination-area">
            <a href="<?php echo e($paginator->url(1)); ?>" class="prev page-numbers <?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>"><i class="fas fa-angle-double-left"></i></a>
            <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
                <?php if($i <= 4): ?>
                    <?php if($paginator->currentPage() == $i): ?>
                        <span class="page-numbers current" aria-current="page"><?php echo e($i); ?></span>
                    <?php else: ?>
                        <a href="<?php echo e($paginator->url($i)); ?>" class="page-numbers"><?php echo e($i); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endfor; ?>
            <a href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>" class="next page-numbers <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>"><i class="fas fa-angle-double-right"></i></a>
        </div>
<?php endif; ?><?php /**PATH E:\Programy\xampp\htdocs\QuickReview-test\resources\views/paginator.blade.php ENDPATH**/ ?>
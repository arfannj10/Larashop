
<?php $__env->startSection('title'); ?> Books list <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                    <th><b>Cover</b></th>
                    <th><b>Title</b></th>
                    <th><b>Author</b></th>
                    <th><b>Status</b></th>
                    <th><b>Categories</b></th>
                    <th><b>Stock</b></th>
                    <th><b>Price</b></th>
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php if($book->cover): ?>
                        <img src="<?php echo e(asset('storage/' . $book->cover)); ?>" width="96px" />
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->author); ?></td>
                    <td>
                        <?php if($book->status == "DRAFT"): ?>
                        <span class="badge bg-dark text-white"><?php echo e($book->status); ?></span>
                        <?php else: ?>
                        <span class="badge badge-success"><?php echo e($book->status); ?>

                        </span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <ul class="pl-3">
                            <?php $__currentLoopData = $book->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($category->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </td>
                    <td><?php echo e($book->stock); ?></td>
                    <td><?php echo e($book->price); ?></td>
                    <td>
                        [TODO: actions]
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="10">
                        <?php echo e($books->appends(Request::all())->links()); ?>

                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\P R O J E C T\Laravel\larashop\resources\views/books/index.blade.php ENDPATH**/ ?>
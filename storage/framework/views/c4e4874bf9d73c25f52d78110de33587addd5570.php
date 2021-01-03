

<?php $__env->startSection("title"); ?> Create User <?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<div class="col-md-8">
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="<?php echo e(route('users.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">Name</label>
        <input class="form-control" placeholder="Full Name" type="text" name="name" id="name" />
        <br>

        <label for="username">Username</label>
        <input class="form-control" placeholder="username" type="text" name="username" id="username" />
        <br>

        <label for="">Roles</label>
        <br>
        <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
        <label for="ADMIN">Administrator</label>

        <input type="checkbox" name="roles[]" id="STAFF" value="STAFF">
        <label for="STAFF">Staff</label>

        <input type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER">
        <label for="CUSTOMER">Customer</label>
        <br>

        <br>
        <label for="phone">Phone number</label>
        <br>
        <input type="text" name="phone" class="form-control">

        <br>
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control"></textarea>

        <br>
        <label for="avatar">Avatar image</label>
        <br>
        <input id="avatar" name="avatar" type="file" class="form-control">

        <hr class="my-3">

        <label for="email">Email</label>
        <input class="form-control" placeholder="user@mail.com" type="text" name="email" id="email" />
        <br>

        <label for="password">Password</label>
        <input class="form-control" placeholder="password" type="password" name="password" id="password" />
        <br>

        <label for="password_confirmation">Password Confirmation</label>
        <input class="form-control" placeholder="password confirmation" type="password" name="password_confirmation"
            id="password_confirmation" />
        <br>

        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.global", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\P R O J E C T\Laravel\larashop\resources\views/users/create.blade.php ENDPATH**/ ?>
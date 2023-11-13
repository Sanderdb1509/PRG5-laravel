<?php $__env->startSection('content'); ?>
<body>
<h1> Create a product</h1>
<div>
<?php if($errors->any()): ?>
<ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>


<?php endif; ?>
</div>
<form method="post" action="<?php echo e(route('product.store')); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('post'); ?>
<div>
    <label>Name</label>
    <input type="text" name="name" placeholder="Name">
</div>
    <div>
        <label>Qty</label>
        <input type="text" name="qty" placeholder="Qty">
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price">
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description">
    </div>
    <div>
        <input type="submit" value="Save a new product"/>
    </div>
</form>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/sanderdb/Project-laravel/resources/views/products/create.blade.php ENDPATH**/ ?>
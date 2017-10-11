<?php $__env->startSection('content'); ?>
        <h1>About</h1>
        <h4><?php echo e($title); ?></h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ex, aperiam incidunt. Eius veniam fugiat neque voluptates ut accusamus delectus nam voluptas quis labore veritatis, quam libero, tempore temporibus vel!
        </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-default">Go back</a>
    <h1><?php echo e($post->title); ?></h1>
    
    <div>
        <?php echo $post->body; ?>

    </div><hr>
    <small>Written on <?php echo e($post->created_at); ?></small>
    <hr>
    <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-info">Edit</a>
    <?php echo Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']); ?>


    <?php echo e(Form::hidden('_method','DELETE')); ?>

    <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
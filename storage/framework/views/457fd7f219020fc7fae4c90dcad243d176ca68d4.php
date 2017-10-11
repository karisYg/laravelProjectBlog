<?php $__env->startSection('content'); ?>
<h2>Edit Post</h2>
	<?php echo Form::open(['action' =>[ 'PostsController@update',$post->id],'method'=>'post']); ?>

	
    <div class="form-group">
    	<?php echo e(Form::label('title','Title')); ?>

    	<?php echo e(Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])); ?>

    </div>
    <div class="form-group">
    	<?php echo e(Form::label('body','Body')); ?>

    	<?php echo e(Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Title'])); ?>

    </div>
    
    <?php echo e(Form::hidden('_method','PUT')); ?>

    <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
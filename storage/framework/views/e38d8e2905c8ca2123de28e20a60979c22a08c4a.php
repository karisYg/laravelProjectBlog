 <?php $__env->startSection('title','Register'); ?>
<?php $__env->startSection('content'); ?>
    <h1>create post</h1>
   <form method="post" action="/posts">
   <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="title">Post Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
    
  </div>

  <div class="form-group">
    <label for="body">Post Body</label>
    <textarea name="body" class="form-control" id="article-ckeditor" rows="3" placeholder="Enter body here"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
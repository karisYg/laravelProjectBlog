<?php $__env->startSection('content'); ?>
    	<div class="jumbotron text-center">
    		
            <h1>Lorem ipsum dolor sit amet</h1>
    		<p>
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure excepturi adipisci animi, dolore reprehenderit saepe totam maxime ipsum, quas sint id quisquam quia eligendi similique tempore quasi voluptatibus voluptatum. Voluptate!
    		</p>
    		<p>
    			<a class="btn btn-primary btn-lg" href="/login" role="button">LOGIN</a>
    			<a class="btn btn-success btn-lg" href="/login" role="button">Register</a>
    		</p>
    		
    	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
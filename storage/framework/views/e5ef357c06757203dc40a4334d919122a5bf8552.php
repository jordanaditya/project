<?php $__env->startSection('title', 'NgeReview.com'); ?>

<?php $__env->startSection('content'); ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>NgeReview.com</h1>
            <span class="subheading">Tempatnya Review Semua Gadget</span>
          </div>
        </div>
      </div>
    </div>
  </header>
 
  <!-- Main Content -->
 <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="<?php echo e($home->link); ?>">
            <h2 class="post-title">
              <?php echo e($home -> title); ?>

            </h2>
            <p class="post-subtitle">
            <a href="<?php echo e($home->link); ?>">
            <img class="img-fluid" src="<?php echo e(asset('storage/'.$home->image)); ?>">
          </a>
              <?php echo e($home->content); ?>

            </p>
          </a>
          
        </div>
        <!-- More -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="<?php echo e($home->link); ?>">Read More &rarr;</a>
        </div>
        <p class="post-meta">Posted by
            <a href="#">Admin</a>
            on October 4, 2020</p>
        <hr>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kuisSatu\resources\views/homes.blade.php ENDPATH**/ ?>
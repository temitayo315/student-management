<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container head">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="color: #ffbf00">SCHOOL LOGO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="<?php echo e(url('/student')); ?>">Student Registration</a></li>
        <li><a href="<?php echo e(url('/courseReg')); ?>">Course Registration</a></li>
      </ul> 
    </div>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/inc/navbar.blade.php ENDPATH**/ ?>
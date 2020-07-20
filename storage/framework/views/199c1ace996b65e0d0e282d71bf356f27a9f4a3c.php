    <?php $__env->startSection('home'); ?>
        
    <div class="row">
        <h2 style="color: #ff6600">List of Registered Student</h2>
            <?php if(session()->has('danger')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session()->get('danger')); ?>

                </div>
            <?php elseif(session()->has('info')): ?>
                 <div class="alert alert-info">
                    <?php echo e(session()->get('info')); ?>

                </div>
                <?php endif; ?>
           <?php echo $__env->make('studentList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h2 style="color: #ff6600">Available Courses</h2>
           <?php echo $__env->make('course.courseList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/index.blade.php ENDPATH**/ ?>
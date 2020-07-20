<!DOCTYPE html>
<html>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="background-image: url('images/gray.jpg');background-size: cover;">
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo $__env->make('inc.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <h2 style="color: #0000cc">New Student Registration</h2><br><br>
            <?php if(session()->has('info')): ?>
                <div class="alert alert-info">
                    <?php echo e(session()->get('info')); ?>

                </div>

                <?php endif; ?>
                <?php echo $__env->make('create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

<script src="<?php echo e(url('assets/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script>
    $(document).ready(function () {
       $('#index_table').dataTable();
    });
</script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/student.blade.php ENDPATH**/ ?>
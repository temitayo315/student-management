<!DOCTYPE html>
<html>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body style="background-image: url('images/gray.jpg');background-size: cover;">
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo $__env->make('inc.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('home'); ?>
        <?php echo $__env->yieldContent('studentReg'); ?>
        <?php echo $__env->yieldContent('courseReg'); ?>
    </div>
<div class="footer">
    <footer>
        <h5>&copy;- 2020</h5>
        <small>Student Management Web App designed by Ayanda Temitayo</small>
    </footer>
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
<?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/inc/master.blade.php ENDPATH**/ ?>
    <?php $__env->startSection('studentReg'); ?>
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h2 style="color: #ff6600; text-align: center;">New Student Registration</h2><br><br>
        <div class="form">
            <form class="form-horizontal" role="form" method="post" action="<?php echo e('/store'); ?>">
                <?php echo csrf_field(); ?>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">Matric No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Matric No" name="cne">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="firstname">First Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="gender">Gender:</label>
                    <div class="col-sm-10">
                       Male <input type="radio" value="Male" name="gender">&nbsp;&nbsp;&nbsp;
                       Female <input type="radio" value="Female" name="gender">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Department:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Department" name="department">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg btn_signUp"><i class="fa fa-save"></i> Submit Record</button>
                    </div>
                </div>
            </form>
        </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/create.blade.php ENDPATH**/ ?>
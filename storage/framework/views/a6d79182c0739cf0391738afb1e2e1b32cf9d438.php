    <?php $__env->startSection('courseReg'); ?>
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h2 style="color: #ff6600; text-align: center;">New Course Registration</h2><br><br>
        <div class="form">
            <form class="form-horizontal" role="form" method="post" action="<?php echo e('/reg_course'); ?>">
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
                    <label class="control-label col-sm-2" for="title">Course Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Course Tiltle" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="code">Course Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Course code" name="code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="unit">Course Unit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Course Unit" name="unit">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Nature</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Elective or Core" name="nature">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info btn-lg btn_signUp"> Register Course</button>
                    </div>
                </div>
            </form>
        </div>
            <div class="col-sm-2"></div>
        </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/course/create.blade.php ENDPATH**/ ?>
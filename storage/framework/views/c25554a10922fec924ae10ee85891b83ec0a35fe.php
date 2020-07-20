<!Doctype HTML>
<html>
<?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="panel-title text-center">Update Student Record</h2>
                </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="<?php echo e('/update/'.$student->id); ?>">
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
                <label class="control-label col-sm-2">Matric No:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo e(Request::old('matric')?:$student->matric); ?>" name="cne">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="firstname">First Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="<?php echo e(Request::old('firstname')?:$student->firstname); ?>" name="firstname">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="<?php echo e(Request::old('lastname')?:$student->lastname); ?>" name="lastname">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="location">Gender</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="<?php echo e(Request::old('gender')?:$student->gender); ?>" name="gender">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Department:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="<?php echo e(Request::old('department')?:$student->department); ?>" name="department">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg btn_signUp"><i class="fa fa-save"></i> Update</button>
                </div>
            </div>
        </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/edit.blade.php ENDPATH**/ ?>
<div class="table-responsive" id="index_table">
    <table class="table table-hover" id="index_table">
        <tr class="text-uppercase">
            <th>S/n</th>
            <th>Matric Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        <tr>
        <?php if(!$students->count()): ?>
            <h2 class="text-info">No Student Record Submitted Yet!</h2>
        </tr>
        
        <?php else: ?>
        <?php $counter = 1; ?>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($counter++); ?></td>
                <td><?php echo e($student->matric); ?></td>
                <td><?php echo e($student->firstname); ?></td>
                <td><?php echo e($student->lastname); ?></td>
                <td><?php echo e($student->gender); ?></td>
                <td><?php echo e($student->department); ?></td>
                <td>
                    <a href="<?php echo e('/edit/'.$student->id); ?>"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</button></a>
                    <a href="<?php echo e('/delete/'.$student->id); ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Delete</button></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/studentList.blade.php ENDPATH**/ ?>
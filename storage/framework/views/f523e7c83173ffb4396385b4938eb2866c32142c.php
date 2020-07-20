
<div class="table-responsive" id="index_table">
    <table class="table table-hover" id="index_table">
        <tr class="text-uppercase">
            <th>S/n</th>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Unit</th>
            <th>Nature</th>
            <th>Action</th>
        </tr>
        <tr>
        <?php if(!$courses->count()): ?>
            <h2 class="text-info">No available courses</h2>
        </tr>
        
        <?php else: ?>
        <?php $counter = 1; ?>
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($counter++); ?></td>
                <td><?php echo e($course->code); ?></td>
                <td><?php echo e($course->title); ?></td>
                <td><?php echo e($course->unit); ?></td>
                <td><?php echo e($course->nature); ?></td>
                <td>
                    <a href="<?php echo e('/editcourse/'.$course->id); ?>"><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Update</button></a>
                    <a href="<?php echo e('/remove/'.$course->id); ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Remove</button></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel\studentMgt\resources\views/course/courseList.blade.php ENDPATH**/ ?>
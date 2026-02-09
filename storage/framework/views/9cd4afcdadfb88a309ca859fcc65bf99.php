

<?php $__env->startSection('content'); ?>

<div class="card card-info card-outline mb-4">
    <div class="card-header">
        <div class="card-title">Student List</div>
    </div>

    <div class="card-body">

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Father Mobile</th>
                    <th>Standard</th>
                    <th>Medium</th>
                    <th>Board</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($student->id); ?></td>
                        <td><?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?></td>
                        <td><?php echo e($student->fmobile); ?></td>
                        <td><?php echo e($student->standardData->name ?? '-'); ?></td>
                        <td><?php echo e($student->mediumData->name ?? '-'); ?></td>
                        <td><?php echo e($student->boardData->name ?? '-'); ?></td>
                        <td><?php echo e($student->gender); ?></td>

                        <td>
                            <a href="<?php echo e(route('admin.students.edit', $student->id)); ?>" class="btn btn-sm btn-primary">
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="8" class="text-center">No Students Found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\shree_coaching_classes\resources\views/admin/students/studentlist.blade.php ENDPATH**/ ?>
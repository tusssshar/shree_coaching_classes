<!-- /.card-header -->
        <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->status_label); ?></td>
                    <td>
                        <span class="badge text-bg-success">Update</span>
                        <span class="badge text-bg-warning">Delete</span>
                        <span class="<?php echo e($item->status_action_badge_class); ?>">
                            <?php echo e($item->status_action_label); ?>

                        </span>                    
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
        <!-- /.card-body --><?php /**PATH D:\xampp\htdocs\laravel\shree_coaching_classes\resources\views/admin/configurations/list/table.blade.php ENDPATH**/ ?>
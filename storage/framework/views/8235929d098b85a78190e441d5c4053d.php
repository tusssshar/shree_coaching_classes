

<?php $__env->startSection('content'); ?>
<!--begin::Form Validation-->
<div class="card card-info card-outline mb-4">
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Update Student</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form method="POST" action="<?php echo e(route('admin.students.update', $student->id)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Row-->
        <div class="row g-3">
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
             name="name" value="<?php echo e(old('name', $student->first_name)); ?>"/>
             <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Middle name</label>
            <input type="text" class="form-control <?php $__errorArgs = ['mname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="mname" value="<?php echo e(old('mname' ,$student->middle_name)); ?>">
            <?php $__errorArgs = ['mname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="lname" value="<?php echo e(old('lname',$student->last_name)); ?>">
            <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">DOB</label>
            <input type="date" class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="dob" value="<?php echo e(old('dob',$student->dob)); ?>">
            <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Age</label>
            <input type="text" class="form-control <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                name="age" value="<?php echo e(old('age',$student->age)); ?>">
               <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Father Mobile</label>
            <input type="text" class="form-control <?php $__errorArgs = ['fmobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
            maxlength="10" name="fmobile" value="<?php echo e(old('fmobile',$student->fmobile)); ?>">
            <?php $__errorArgs = ['fmobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
         <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Mother Mobile</label>
            <input type="text" class="form-control <?php $__errorArgs = ['mmobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
            maxlength="10" name="mmobile" value="<?php echo e(old('mmobile',$student->mmobile)); ?>">
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Standard</label>
            <select class="form-select" id="validationCustom04" name="standard">
            <option>-Select-</option>    
            <?php $__currentLoopData = $allData['standards']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option value="<?php echo e($item->id); ?>" <?php echo e(old('standard', $student->standard) == $item->id ? 'selected' : ''); ?>>
                <?php echo e($item->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['standard'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Medium</label>
            <select class="form-select" id="validationCustom04" name="medium">
            <option>-Select-</option>    
            <?php $__currentLoopData = $allData['mediums']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option value="<?php echo e($item->id); ?>" <?php echo e(old('medium', $student->medium) == $item->id ? 'selected' : ''); ?>>
                <?php echo e($item->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['medium'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Board</label>
            <select class="form-select" id="validationCustom04" name="board">
            <option>-Select-</option>   
            <?php $__currentLoopData = $allData['boards']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option value="<?php echo e($item->id); ?>" <?php echo e(old('board', $student->board) == $item->id ? 'selected' : ''); ?>>
                <?php echo e($item->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['board'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Male</label>
            <input type="radio" name="gender" value="male" <?php echo e(old('gender', $student->gender) == 'male' ? 'checked' : ''); ?>> Male        
        </div>
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Female</label>
            <input type="radio" name="gender" value="female" <?php echo e(old('gender', $student->gender) == 'female' ? 'checked' : ''); ?>> Female
            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">School Name</label>
            <input
            type="text"
            class="form-control <?php $__errorArgs = ['school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            id="validationCustom05"
            name="school"
            value="<?php echo e(old('school', $student->schoolname)); ?>"
            />
            <?php $__errorArgs = ['school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-8">
            <label for="validationCustom05" class="form-label">Home Address</label>
            <textarea class="form-control <?php $__errorArgs = ['home'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
            aria-label="With textarea" name="home"><?php echo e(old('home', $student->address)); ?></textarea>
            <?php $__errorArgs = ['home'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <div class="card card-warning card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header"><div class="card-title">Payment Section</div></div>
        <!--end::Header-->
        </div>
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Total Fees</label>
            <input
            type="text"
            class="form-control <?php $__errorArgs = ['totalfees'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            id="validationCustom05"
            name="totalfees"
            value="<?php echo e(old('totalfees', $student->paymentInfo->total_fees)); ?>"
            />
            <?php $__errorArgs = ['totalfees'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Payment</label>
            <input
            type="text"
            class="form-control <?php $__errorArgs = ['fees'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            id="validationCustom05"
            name="fees"
            value="<?php echo e(old('fees', $student->paymentInfo->paid_amount)); ?>">
            <?php $__errorArgs = ['fees'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Type of Payment</label>
            <select class="form-select <?php $__errorArgs = ['typeofpayment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="validationCustom04" name="typeofpayment">
            <option>-Select-</option>    
            <?php $__currentLoopData = $allData['typeOfPayments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option value="<?php echo e($item->id); ?>" 
                <?php echo e(old('typeofpayment', $student->paymentInfo->type_of_payment) == $item->id ? 'selected' : ''); ?>>
                <?php echo e($item->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['typeofpayment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Mode of Payment</label>
            <select class="form-select <?php $__errorArgs = ['modeofpayment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="validationCustom04" name="modeofpayment">
            <option>-Select-</option>    
            <?php $__currentLoopData = $allData['modeOfPayments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option value="<?php echo e($item->id); ?>" <?php echo e(old('modeofpayment', $student->paymentInfo->mode_of_payment) == $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
            <?php echo e($item->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['modeofpayment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <!--end::Col-->
       
    
     <!--begin::Input Group-->
    <div class="card card-success card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Documents Upload</div></div>
    <!--end::Header-->
    </div>
    <!--begin::Col-->
    <div class="col-md-6">
        <label class="input-group-text form-control <?php $__errorArgs = ['student_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" for="inputGroupFile02">Student Photo</label>
        <input type="file" class="form-control" id="inputGroupFile02" name="student_photo"/>
        <?php if($student->documentInfo->student_photo): ?>
            <p>Old File: <a href="<?php echo e(asset($student->documentInfo->student_photo)); ?>" target="_blank">View</a></p>
        <?php endif; ?>
        <?php $__errorArgs = ['student_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6">
        <label class="input-group-text" for="inputGroupFile02">Government Identity</label>
        <input type="file" class="form-control <?php $__errorArgs = ['government_identity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="inputGroupFile02" name="government_identity"/>
        <?php if($student->documentInfo->government_identity): ?>
            <p>Old File: <a href="<?php echo e(asset($student->documentInfo->government_identity)); ?>" target="_blank">View</a></p>
        <?php endif; ?>
        <?php $__errorArgs = ['government_identity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6">
        <label class="input-group-text" for="inputGroupFile02">Last Year Marksheet</label>
        <input type="file" class="form-control <?php $__errorArgs = ['mark_sheet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="inputGroupFile02" name="mark_sheet"/>
        <?php if($student->documentInfo->last_year_marksheet): ?>
            <p>Old File: <a href="<?php echo e(asset($student->documentInfo->last_year_marksheet)); ?>" target="_blank">View</a></p>
        <?php endif; ?>
        <?php $__errorArgs = ['mark_sheet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <!--end::Col-->
    <!--end::Body-->
    </div>
     </div>
    <!--end::Row-->
    <input type="hidden" name="source_blade" value="student_form"/>
    <!--begin::Footer-->
    <div class="card-footer">
        <button class="btn btn-info" type="submit">Submit form</button>
    </div>
    <!--end::Footer-->
    </form>
    <!--end::Form-->
    <!--begin::JavaScript-->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
   
    </script>
    <!--end::JavaScript-->
</div>
<!--end::Form Validation-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\shree_coaching_classes\resources\views/admin/students/edit.blade.php ENDPATH**/ ?>
<!--begin::Form Validation-->
<div class="card card-info card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Add Standards</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('addConfigurations')); ?>">
    <?php echo csrf_field(); ?>
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Row-->
        <div class="row g-3">
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Standards</label>
            <input
            type="text"
            class="form-control"
            id="validationCustom01"
            name="name"
            value="<?php echo e(old('name')); ?>"
            required
            />
        </div>
        <input type="hidden" name="source_blade" value="std">
        <!--end::Col-->
        <?php echo $__env->make('admin.include.message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!--end::Body-->
    </div>
     </div>
        <!--end::Row-->
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
    (() => {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
        form.addEventListener(
            'submit',
            (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
            },
            false,
        );
        });
    })();
    </script>
    <!--end::JavaScript-->
</div>
<!--end::Form Validation-->
<?php /**PATH D:\xampp\htdocs\laravel\shree_coaching_classes\resources\views/admin/configurations/add/standard.blade.php ENDPATH**/ ?>
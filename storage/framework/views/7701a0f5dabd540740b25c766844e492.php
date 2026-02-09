<?php $__env->startSection('content'); ?>
<!--begin::Collapse-->
<div class="card card-primary card-outline mb-4">
<!--begin::Header-->
<div class="card-header"><div class="card-title">Add Below Configurations</div></div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body">
   <p class="d-inline-flex gap-1">
      <button
      class="btn btn-primary"
      data-bs-toggle="collapse"
      href="#collapseExample"
      role="button"
      aria-expanded="false"
      aria-controls="collapseExample"
      onclick="loadMaster('standard')"
      >
      Standard
      </button>
      <button
      class="btn btn-primary"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapseExample"
      aria-expanded="false"
      aria-controls="collapseExample"
      onclick="loadMaster('medium')"
      >
      Medium
      </button>
      <button
      class="btn btn-primary"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapseExample"
      aria-expanded="false"
      aria-controls="collapseExample"
      onclick="loadMaster('board')"
      >
      Board
      </button>
      <button
      class="btn btn-primary"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapseExample"
      aria-expanded="false"
      aria-controls="collapseExample"
      onclick="loadMaster('typeofpayment')"
      >
      Type of Payment
      </button>
      <button
      class="btn btn-primary"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapseExample"
      aria-expanded="false"
      aria-controls="collapseExample"
      onclick="loadMaster('modeofpayment')"
      >
      Mode of Payment
      </button>
   </p>
   
    <div id="masterSpinner" class="text-center my-4 d-none">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div class="collapse show" id="masterCollapse">
        <div class="card card-body" id="masterContent">
            <?php echo $__env->make('admin.configurations.add.standard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>
<!--end::Body-->
</div>
<!--end::Collapse-->
<?php $__env->stopSection(); ?>
<script>
function loadMaster(type) {
    // show collapse
    $('#masterCollapse').collapse('show');
    // show loader, hide content
    $('#masterSpinner').removeClass('d-none');
    $('#masterContent').addClass('d-none');

    $.get(`/admin/configurations/${type}`, function (html) {
        $('#masterContent').html(html);
    }).always(function () {
        // hide loader, show content
        $('#masterSpinner').addClass('d-none');
        $('#masterContent').removeClass('d-none');
    });
}
</script>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\shree_coaching_classes\resources\views/admin/configurations/add/index.blade.php ENDPATH**/ ?>
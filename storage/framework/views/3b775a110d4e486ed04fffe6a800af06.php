<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.html" class="brand-link">
      <!--begin::Brand Image-->
      <img
        src="../assets/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">AdminLTE 4</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation"
      >
        <li class="nav-item menu-open">
          <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.students.index')); ?>" class="nav-link">
            <i class="nav-icon bi bi-palette"></i>
            <p>Add Students</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.students.list')); ?>" class="nav-link">
            <i class="nav-icon bi bi-palette"></i>
            <p>List Students</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.configurations.index')); ?>" class="nav-link">
            <i class="nav-icon bi bi-palette"></i>
            <p>Add Configurations</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('admin.configurations.list')); ?>" class="nav-link">
            <i class="nav-icon bi bi-palette"></i>
            <p>View Configurations</p>
          </a>
        </li>
      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar--><?php /**PATH D:\xampp\htdocs\laravel\shree_coaching_classes\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>
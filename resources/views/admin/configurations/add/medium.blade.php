<!--begin::Form Validation-->
<div class="card card-info card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Add Medium</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form class="needs-validation" novalidate method="POST" action="{{route('addConfigurations')}}">
    @csrf
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Row-->
        <div class="row g-3">
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Medium</label>
            <input
            type="text"
            class="form-control"
            id="validationCustom01"
            name="name"
            value="{{ old('name') }}"
            required
            />
        </div>
        <input type="hidden" name="source_blade" value="medium">
        <!--end::Col-->
        @include('admin.include.message')
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

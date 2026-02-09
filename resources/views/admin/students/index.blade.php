@extends('admin.layouts.app')

@section('content')
<!--begin::Form Validation-->
<div class="card card-info card-outline mb-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Add Student</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form class="needs-validation" method="POST" action="{{ route('admin.students.save') }}" enctype="multipart/form-data">
        @csrf
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Row-->
        <div class="row g-3">
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
             name="name" value="{{ old('name') }}">
             @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Middle name</label>
            <input type="text" class="form-control @error('mname') is-invalid @enderror"
                name="mname" value="{{ old('mname') }}">
            @error('mname')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control @error('lname') is-invalid @enderror"
                name="lname" value="{{ old('lname') }}">
            @error('lname')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">DOB</label>
            <input type="date" class="form-control @error('dob') is-invalid @enderror"
                name="dob" value="{{ old('dob') }}">
            @error('dob')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Age</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror"
                name="age" value="{{ old('age') }}">
               @error('age')<div class="invalid-feedback">{{ $message }}</div>@enderror 
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Father Mobile</label>
            <input type="text" class="form-control @error('fmobile') is-invalid @enderror" maxlength="10" name="fmobile" value="{{ old('fmobile') }}">
            @error('fmobile')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <!--end::Col-->
         <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Mother Mobile</label>
            <input type="text" class="form-control @error('mmobile') is-invalid @enderror" maxlength="10" name="mmobile" value="{{ old('mmobile') }}">
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Standard</label>
            <select class="form-select" id="validationCustom04" name="standard">
            <option>-Select-</option>    
            @foreach($allData['standards'] as $index => $item) 
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            </select>
            @error('standard')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Medium</label>
            <select class="form-select" id="validationCustom04" name="medium">
            <option>-Select-</option>    
            @foreach($allData['mediums'] as $index => $item) 
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            </select>
            @error('medium')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Board</label>
            <select class="form-select" id="validationCustom04" name="board">
            <option>-Select-</option>   
            @foreach($allData['boards'] as $index => $item) 
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            </select>
            @error('board')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Male</label>
            <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}> Male
        </div>
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Female</label>
            <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}> Female
        @error('gender')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">School Name</label>
            <input
            type="text"
            class="form-control @error('school') is-invalid @enderror"
            id="validationCustom05"
            name="school"
            />
            @error('school')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-8">
            <label for="validationCustom05" class="form-label">Home Address</label>
            <textarea class="form-control @error('home') is-invalid @enderror" aria-label="With textarea" name="home"></textarea>
            @error('home')
            <div class="text-danger">{{ $message }}</div>
            @enderror
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
            class="form-control @error('totalfees') is-invalid @enderror"
            id="validationCustom05"
            name="totalfees"
            />
            @error('totalfees')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Payment</label>
            <input
            type="text"
            class="form-control @error('fees') is-invalid @enderror"
            id="validationCustom05"
            name="fees"
            />
            @error('fees')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Type of Payment</label>
            <select class="form-select @error('typeofpayment') is-invalid @enderror" id="validationCustom04" name="typeofpayment">
            <option>-Select-</option>    
            @foreach($allData['typeOfPayments'] as $index => $item) 
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            </select>
            @error('typeofpayment')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Mode of Payment</label>
            <select class="form-select @error('modeofpayment') is-invalid @enderror" id="validationCustom04" name="modeofpayment">
            <option>-Select-</option>    
            @foreach($allData['modeOfPayments'] as $index => $item) 
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
            </select>
            @error('modeofpayment')
            <div class="text-danger">{{ $message }}</div>
            @enderror
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
        <label class="input-group-text form-control @error('student_photo') is-invalid @enderror" for="inputGroupFile02">Student Photo</label>
        <input type="file" class="form-control" id="inputGroupFile02" name="student_photo"/>
        @error('student_photo')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6">
        <label class="input-group-text" for="inputGroupFile02">Government Identity</label>
        <input type="file" class="form-control @error('government_identity') is-invalid @enderror" id="inputGroupFile02" name="government_identity"/>
        @error('government_identity')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6">
        <label class="input-group-text" for="inputGroupFile02">Last Year Marksheet</label>
        <input type="file" class="form-control @error('mark_sheet') is-invalid @enderror" id="inputGroupFile02" name="mark_sheet"/>
        @error('mark_sheet')
        <div class="text-danger">{{ $message }}</div>
        @enderror
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
@endsection

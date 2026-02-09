@extends('admin.layouts.app')

@section('content')

<div class="card card-info card-outline mb-4">
    <div class="card-header">
        <div class="card-title">Student List</div>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

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
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</td>
                        <td>{{ $student->fmobile }}</td>
                        <td>{{ $student->standardData->name ?? '-' }}</td>
                        <td>{{ $student->mediumData->name ?? '-' }}</td>
                        <td>{{ $student->boardData->name ?? '-' }}</td>
                        <td>{{ $student->gender }}</td>

                        <td>
                            <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-sm btn-primary">
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No Students Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection

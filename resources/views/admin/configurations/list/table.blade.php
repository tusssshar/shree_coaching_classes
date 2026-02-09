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
                @foreach($allData as $index => $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->status_label }}</td>
                    <td>
                        <span class="badge text-bg-success">Update</span>
                        <span class="badge text-bg-warning">Delete</span>
                        <span class="{{ $item->status_action_badge_class }}">
                            {{ $item->status_action_label }}
                        </span>                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
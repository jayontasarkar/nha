<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Designation</th>
            <th>Admin Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->designation }}</td>
                <td>{{ $user->role->title }}</td>
                <td>
                    @if($user->status !== 1)
                        <span class="label label-warning">Suspended</span>
                    @else
                        <span class="label label-success">Active</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-info btn-xs"
                        href="{{ route('settings.users.edit', [$user->id]) }}"
                    >Edit</a>&nbsp;&nbsp;
                    @if($user->status == 1)
                        <a class="btn btn-danger btn-xs"
                            href="{{ route('settings.users.destroy', [$user->id]) }}"
                        ><span class="glyphicon glyphicon-remove"></span></a>
                    @else
                        <a class="btn btn-success btn-xs"
                            href="{{ route('settings.users.destroy', [$user->id]) }}"
                        ><span class="glyphicon glyphicon-ok"></span></a>
                    @endif
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
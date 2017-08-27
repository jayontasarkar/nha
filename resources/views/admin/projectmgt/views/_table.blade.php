<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>Project Title</th>
            <th>Project Location</th>
            <th>Capacity</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->location }}</td>
                <td>{{ $project->capacity }}</td>
                <td>
                    @if($project->status !== 1)
                        <span class="label label-warning">In Progress</span>
                    @else
                        <span class="label label-success">Completed</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-info btn-xs"
                        href="{{ route('projectmgt.show', [$project->id]) }}"
                    >SHOW</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
 
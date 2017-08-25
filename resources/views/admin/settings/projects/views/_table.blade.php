<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>Project Title</th>
            <th>Project Location</th>
            <th>Started On</th>
            <th>Ended On</th>
            <th>Current Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->location }}</td>
                <td>{{ $project->starting_date->format('M d, Y') }}</td>
                <td>{{ $project->ending_date->format('M d, Y') }}</td>
                <td>
                    @if($project->status !== 1)
                        <span class="label label-warning">Work In Progress</span>
                    @else
                        <span class="label label-success">Successfully Completed</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-info btn-xs"
                        href="{{ route('settings.projects.edit', [$project->id]) }}"
                    >Edit</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
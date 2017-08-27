<table class="table table-bordered table-striped table-hover datatable js-exportable">
    <thead>
        <tr>
            <th>#</th>
            <th>Notification Message</th>
            <th>Created On</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notifications as $key => $notification)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{  str_limit(json_decode($notification->data)->message, 100) }}</td>
                <td>{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</td>
                <td>
                    <span class="label label-{{ $notification->read_at ? 'success' : 'danger' }}">
                        {{ $notification->read_at ? 'Read' : 'Unread' }}
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
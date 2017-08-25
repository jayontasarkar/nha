<script type="text/javascript">
    $(function () {
        $('.datatable').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            "bSort" : false,
            buttons: [
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: {{ json_encode($columns) }}
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: {{ json_encode($columns) }}
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: {{ json_encode($columns) }}
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: {{ json_encode($columns) }}
                    }
                }
            ],
            "pageLength": {{ isset($perPage) ? $perPage : 20 }}
        });
    });
</script>
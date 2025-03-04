<script type="text/javascript">
    $(document).ready(function() {

        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('admin/contact-us/datatables') }}",
            columns: [{
                    "data": "id",
                    "defaultContent": ""
                },
                {
                    "data": "user_fullname",
                    "defaultContent": ""
                },

                {
                    "data": "email",
                    "defaultContent": ""
                },
                {
                    "data": "telephone",
                    "defaultContent": ""
                },
                {
                    "data": "message",
                    "defaultContent": ""
                },
                {
                    "data": "interested_in",
                    "defaultContent": ""
                },
                {
                    "data": "how_did_you_hear",
                    "defaultContent": ""
                },
                {
                    "data": "id",
                    "defaultContent": ""
                }
            ],
            columnDefs: [{
                    targets: 'no-sort',
                    orderable: false,
                },
                {
                    targets: 0,
                    render: function(data, type, row, meta) {
                        return meta.row + 1;
                    },
                },
                {
                    targets: -1,
                    render: function(data, type, row, meta) {
                        // var editUrl = "{{ route('edit.property', [':id']) }}".replace(':id', row
                        //     .id);
                        var deleteUrl = "{{ route('contact-us.delete', [':id']) }}".replace(
                            ':id',
                            row.id);
                        return `
                            <div class="text-center d-flex justify-content-between p-3">

                                <div class="m-1">
                                <button type="button" class="form-control delete-btn" data-id="` + row.id +
                            `" data-url="` + deleteUrl + `">Delete</button>
                                  </div>
                            </div>`;
                    },
                }
            ]
        });

        $('#datatable').on('click', '.delete-btn', function() {
            var url = $(this).data('url');
            // console.log(url);
            var rowId = $(this).data('id');
            // console.log(rowId);
            if (confirm('Are you sure you want to delete this item?')) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        // console.log(response);
                        table.row(rowId).remove().draw();
                        // table.ajax.reload();
                    },
                    error: function(err) {
                        alert('Error deleting record.');
                    }
                });
            }
        });
    });
</script>

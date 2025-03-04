<script type="text/javascript">
    $(document).ready(function() {

        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('admin/property/datatables') }}",
            columns: [{
                    "data": "id",
                    "defaultContent": ""
                },
                {
                    "data": "amount",
                    "defaultContent": ""
                },
                {
                    "data": "location_text",
                    "defaultContent": ""
                },
                {
                    "data": "image",
                    "defaultContent": ""
                },
                {
                    "data": "heading",
                    "defaultContent": ""
                },
                // {
                //     "data": "description",
                //     "defaultContent": ""
                // },
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
                    targets: 3,
                    render: function(data, type, row, meta) {
                        console.log(data);

                        return `<div class="text-center">
                                        <img src="` + data + `" alt="image" class="img-fluid avatar-lg rounded">

                                    </div>`
                    },
                }, {
                    targets: -1,
                    render: function(data, type, row, meta) {
                        var editUrl = "{{ route('edit.property', [':id']) }}".replace(':id', row
                            .id);
                        var deleteUrl = "{{ route('delete.property', [':id']) }}".replace(':id',
                            row.id);
                        return `
                            <div class="text-center d-flex justify-content-between p-3">
                                <div class="m-1">
                                <a href="` + editUrl + `" data-toggle="tooltip" data-placement="top" title="Edit now">
                                    <button type="button" class="form-control">Edit</button>
                                </a>
                                </div>
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

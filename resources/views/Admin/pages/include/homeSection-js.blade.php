<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('admin/home-section/datatables') }}",
            columns: [
                { data: "id", name: "id" },
                { data: "greetings", name: "greetings" },
                { data: "slider_title", name: "slider_title" },
                { data: "slider_description", name: "slider_description" },
                { data: "slider_image", name: "slider_image" },
                { data: null, orderable: false, searchable: false } // Action column
            ],
            columnDefs: [
                {
                    targets: 0, // ID column
                    render: function (data, type, row, meta) {
                        return meta.row + 1; // Auto-increment for table row
                    }
                }, {
                    targets: 4, // Image column
                    render: function (data, type, row, meta) {
                        const baseUrl = "{{ url('/') }}"; // Laravel's helper to get the base URL

                        // Construct the full path to the image
                        const fullImagePath = `${baseUrl}/${data}`;

                        return `<img src="${fullImagePath}" alt="Slider Image" class="img-fluid" style="max-height: 100px; max-width: 150px;">`;

                    }
                },
                {
                    targets: -1, // Action column
                    render: function (data, type, row, meta) {
                        var deleteUrl = "{{ url('admin/home-section/delete') }}/" + row.id;
                        return `
                            <div class="text-center d-flex justify-content-around">
                                <button type="button" class="btn btn-danger btn-sm delete-btn" data-id="${row.id}" data-url="${deleteUrl}">
                                    Delete
                                </button>
                            </div>`;
                    }
                }
            ]
        });

        // Delete button functionality
        $('#datatable').on('click', '.delete-btn', function () {
            var url = $(this).data('url');
            var rowId = $(this).data('id');

            if (confirm('Are you sure you want to delete this item?')) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {

                        if (response.success) {
                            table.ajax.reload(null, false); // Reload table without refreshing the page

                            // Display Toastr success message
                            toastr.options.timeOut = 10000;
                            toastr.success(response.success);
                            var audio = new Audio('audio.mp3');
                            audio.play();
                        } else {
                            // Handle unexpected failure
                            toastr.options.timeOut = 10000;
                            toastr.error('Failed to delete the record.');
                            var audio = new Audio('audio.mp3');
                            audio.play();
                        }
                    },
                    error: function (err) {
                        alert('Error deleting record.');
                    }
                });
            }
        });
    });
</script>
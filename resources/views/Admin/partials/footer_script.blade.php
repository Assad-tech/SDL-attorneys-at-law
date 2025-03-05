<!-- Vendor js -->
<script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>
<!-- App js -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
<!-- Toastr js -->
<script src="{{ asset('admin/assets/libs/toastr/build/toastr.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/toastr.js') }}"></script>

<!--Morris Chart-->
{{-- <script src="{{ asset('admin/assets/libs/morris.js/morris.min.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/assets/libs/raphael/raphael.min.js') }}"></script> --}}
<!-- Projects Analytics Dashboard App js -->
{{-- <script src="{{ asset('admin/assets/js/pages/dashboard-sales.js') }}"></script> --}}

<!-- Datatable plugin js -->
<script src="{{ asset('admin/assets/libs/datatables.net/js/dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>

<!-- dropify File Upload js -->
<script src="{{ asset('admin/assets/libs/dropify/js/dropify.min.js') }}"></script>
<!-- File Upload Demo js -->
<script src="{{ asset('admin/assets/js/pages/form-fileupload.js') }}"></script>


<!-- Toastr js -->
<script src="{{ asset('admin/assets/libs/toastr/build/toastr.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/toastr.js') }}"></script>

<!-- Quill Editor js -->
<script src="{{asset('admin/assets/libs/quill/quill.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/moment/min/moment.min.js')}}"></script>
<!-- Quill Demo js -->
<script src="{{asset('admin/assets/js/pages/form-editor.js')}}"></script>

<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                toastr.options.timeOut = 10000;
                toastr.info("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();
                break;
            case 'success':

                toastr.options.timeOut = 10000;
                toastr.success("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'warning':

                toastr.options.timeOut = 10000;
                toastr.warning("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'error':

                toastr.options.timeOut = 10000;
                toastr.error("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
        }
    @endif
</script>
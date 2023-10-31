@include('admin.body.header')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.body.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.body.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('admin.body.footer')
        </div>
        <!-- End of Content Wrapper -->
       
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('Backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('Backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{asset('assets/vendor/switch-button-bootstrap/src/bootstrap-switch-button.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('Backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('Backend/vendor/chart.js/Chart.min.js') }}"></script>
    @yield('scripts')
    <!-- Page level custom scripts -->
    <script src="{{ asset('Backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('Backend/js/demo/chart-pie-demo.js') }}"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        $('#lfm').filemanager('file');
        $('#lfm1').filemanager('file');
        $('#lfm2').filemanager('file');
        $('#lfm3').filemanager('file');
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#summernote' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
            var dataID=$(this).data('id');
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Want to delete the banner form the database file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("thanks you for not deleting the file");
                    }
                });

        })
    </script>
    <script>
        $('input[name=toogle]').change(function(){
            var mode=$(this).prop('checked');
            var id=$(this).val();
            // alert(id);
            $.ajax({
               
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    mode:mode,
                    id:id,
                },
                success:function(response){
                   if(response.status){
                       alert(response.msg);
                   }
                   else{
                       alert('plz try again');
                   }
                }
            })
        });
    </script>
</body>

</html>
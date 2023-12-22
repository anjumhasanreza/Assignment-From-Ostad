<!-- JAVASCRIPT -->
<script src="{{ asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('/assets/js/plugins.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('/assets/js/app.js') }}"></script>













<!-- jQuery -->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": true,
      "responsive": true,
      "searching": true,
      "ordering": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- jQuery -->
<script src="{{asset('/public/admin/js/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/public/admin/js/bootstrap.min.js')}}"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('/public/admin/js/metisMenu.min.js')}}"></script>
<!-- Morris Charts JavaScript -->
<script src="{{asset('/public/admin/js/raphael.min.js')}}"></script>
<script src="{{asset('/public/admin/js/dataTables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/public/admin/js/dataTables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('/public/admin/js/startmin.js')}}"></script>
<script src="{{asset('/public/admin/js/bookstoreAdmin.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
        
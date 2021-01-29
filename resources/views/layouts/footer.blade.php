<script src="{{asset('front/')}}/js/jquery.min.js"></script>
<script src="{{asset('front/')}}/js/popper.min.js"></script>
<script src="{{asset('front/')}}/js/moment.min.js"></script>
<script src="{{asset('front/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('front/')}}/js/simplebar.min.js"></script>
<script src='{{asset('front/')}}/js/daterangepicker.js'></script>
<script src='{{asset('front/')}}/js/jquery.stickOnScroll.js'></script>
<script src="{{asset('front/')}}/js/tinycolor-min.js"></script>
<script src="{{asset('front/')}}/js/config.js"></script>
<script src='{{asset('front/')}}/js/jquery.dataTables.min.js'></script>
<script src='{{asset('front/')}}/js/dataTables.bootstrap4.min.js'></script>
<script>
    $('#dataTable-1').DataTable(
        {
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });
</script>
<script src='{{asset('front/')}}/js/dataTables.bootstrap4.min.js'></script>
<script src="{{asset('front/')}}/js/apps.js"></script>
</body>

</html>

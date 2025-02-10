<script type="text/javascript">
    @session("success")
        toastr.success("{{ $value }}", "Success");
    @endsession
</script>

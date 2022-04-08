<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2500);
</script>
</body>

</html>
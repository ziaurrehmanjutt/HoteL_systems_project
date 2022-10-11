<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="#">Soft dot Com</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/theme/admin') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/theme/admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/theme/admin') ?>/dist/js/adminlte.min.js"></script>
<script src="<?= base_url('assets/theme/admin') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        <?php
        $session = session();
        $eMessage = $session->getFlashdata('eMessage');
        if ($eMessage) {
            print "Toast.fire({icon: '{$eMessage['icon']}',title: '{$eMessage['title']}'})";
        }
        ?>

    });
</script>

</html>
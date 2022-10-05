
  <script src="<?= base_url('assets/theme/admin') ?>/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/theme/admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/theme/admin') ?>/dist/js/adminlte.min.js"></script>
  </body>
  <script src="<?= base_url('assets/theme/admin') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
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
                if($eMessage){
                    print "Toast.fire({icon: '{$eMessage['icon']}',title: '{$eMessage['title']}'})";
                }
          ?>
          
      });
  </script>

  </html>
<script src="<?= base_url('assets/theme/admin') ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url('assets/theme/admin') ?>/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
  $(function() {
    $.validator.setDefaults({
      submitHandler: function() {
        alert("Form successful submitted!");
      }
    });
    $('#quickForm').validate({
      rules: {
        branch_name: {
          required: true,
          minlength: 3
        },
        branch_zip: {
          required: true,

        },
        branch_address: {
          required: true,
          minlength: 5
        },
        branch_lat: {
          required: true
        },
        branch_lng: {
          required: true
        },
      },
      messages: {
        branch_name: {
          required: "<?=lang('admin/Branches.branch_add.required_field')?>",
          minlength: "Your password must be at least 5 characters long"
        },
        branch_zip: {
          required: "<?=lang('admin/Branches.branch_add.required_field')?>",
        },
        branch_address: {
          required: "<?=lang('admin/Branches.branch_add.required_field')?>",
        },
        branch_lat: {
          required: "<?=lang('admin/Branches.branch_add.required_field')?>",
        },
        branch_lng: {
          required: "<?=lang('admin/Branches.branch_add.required_field')?>",
        }
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
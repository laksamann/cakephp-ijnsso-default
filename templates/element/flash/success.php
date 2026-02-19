<?php if (!empty($message)) : ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: <?= json_encode($message) ?>,
    timer: 2500,
    showConfirmButton: false
});
</script>
<?php endif; ?>

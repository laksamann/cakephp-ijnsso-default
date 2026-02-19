<?php if (!empty($message)) : ?>
<script>
Swal.fire({
    icon: 'info',
    title: 'Information',
    text: <?= json_encode($message) ?>,
    timer: 3000,
    showConfirmButton: false
});
</script>
<?php endif; ?>

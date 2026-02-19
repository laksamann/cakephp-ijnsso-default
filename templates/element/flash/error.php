<?php if (!empty($message)) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Error',
    text: <?= json_encode($message) ?>,
});
</script>
<?php endif; ?>

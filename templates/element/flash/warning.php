<?php if (!empty($message)) : ?>
<script>
Swal.fire({
    icon: 'warning',
    title: 'Warning',
    text: <?= json_encode($message) ?>,
});
</script>
<?php endif; ?>

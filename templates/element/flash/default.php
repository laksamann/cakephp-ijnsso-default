<?php if (!empty($message)) : ?>
<script>
Swal.fire({
    icon: 'info',
    title: 'Notice',
    text: <?= json_encode($message) ?>,
    timer: 3500,
    showConfirmButton: false
});
</script>
<?php endif; ?>
<?php if (!empty($message)) : ?>
<div class="card border-0 shadow-sm mb-3 flash-card bg-warning bg-opacity-10">
    <div class="card-body d-flex align-items-center gap-3">

        <div class="text-warning fs-4">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>

        <div class="flex-grow-1">
            <div class="fw-semibold text-warning mb-1">Warning</div>
            <div class="text-muted"><?= h($message) ?></div>
        </div>

        <button class="btn btn-sm btn-light" onclick="this.closest('.flash-card').remove()">Close</button>
    </div>
</div>
<?php endif; ?>

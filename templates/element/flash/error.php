<?php if (!empty($message)) : ?>
<div class="card border-0 shadow-sm mb-3 flash-card bg-danger bg-opacity-10">
    <div class="card-body d-flex align-items-center gap-3">

        <div class="text-danger fs-4">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>

        <div class="flex-grow-1">
            <div class="fw-semibold text-danger mb-1">Error</div>
            <div class="text-muted"><?= h($message) ?></div>
        </div>

        <button class="btn btn-sm btn-light" onclick="this.closest('.flash-card').remove()">Close</button>
    </div>
</div>
<?php endif; ?>

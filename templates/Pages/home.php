<div id="kt_app_content_container" class="app-container container-fluid">
    <?php if (in_array($userLoggedIn->userData->role_sso_id, [1, 2, 3])): ?>
    <div id="kt_app_content" class="app-content flex-column-fluid">
    </div>
    <?php else: ?>
    <div class="alert alert-danger text-center mt-4">
        You're not authorized to view this page.
    </div>
    <?php endif; ?>
</div>
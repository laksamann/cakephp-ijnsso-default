<?= $this->Form->create() ?>
<?= $this->Form->control('username') ?>
<?= $this->Form->control('password', ['type' => 'password']) ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
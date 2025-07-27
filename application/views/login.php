<?php if ($this->session->flashdata('error')): ?>
    <p><?= $this->session->flashdata('error'); ?></p>
<?php endif; ?>

<form method="post" action="<?= base_url('AuthController/login_user') ?>">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
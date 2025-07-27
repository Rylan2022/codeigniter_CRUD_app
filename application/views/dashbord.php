<h2>Welcome <?= $this->session->userdata('user_name') ?></h2>
<a href="<?= base_url('AuthController/logout') ?>">Logout</a>
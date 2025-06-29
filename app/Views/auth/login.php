<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<h2>Login Admin</h2>

<?php if (session()->getFlashdata('error')): ?>
<p style="color:red;"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>

<form action="/login/proses" method="post">
    <p>Username:</p>
    <input type="text" name="username" required>
    <p>Password:</p>
    <input type="password" name="password" required>
    <br><br>
    <button type="submit">Login</button>
</form>

<?= $this->endSection() ?>

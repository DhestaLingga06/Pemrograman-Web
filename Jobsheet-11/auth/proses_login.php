<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require __DIR__ . '/../includes/csrf.php';
require __DIR__ . '/../includes/koneksi.php';

csrf_verify();

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    session_regenerate_id(true);
    
    unset($_SESSION['login_gagal'][$username]);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['role'] = $user['role'];

    if (isset($_POST['remember'])) {
    setcookie('remember', '1', time() + (30 * 24 * 60 * 60), '/');
    }

    header('Location: ../index.php');
    exit;
}

if (!isset($_SESSION['login_gagal'][$username])) {
    $_SESSION['login_gagal'][$username] = 0;
}

$_SESSION['login_gagal'][$username]++;

$jumlah_gagal = $_SESSION['login_gagal'][$username];

if ($jumlah_gagal >= 3) {
    $_SESSION['flash'] = [
        'type' => 'error',
        'pesan' => 'Login gagal 3 kali. Silakan coba lagi nanti.'
    ];
} else {
    $_SESSION['flash'] = [
        'type' => 'error',
        'pesan' => 'Username atau password salah.'
    ];
}

header('Location: login.php');
exit;
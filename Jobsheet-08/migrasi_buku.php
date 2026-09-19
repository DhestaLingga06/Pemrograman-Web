<?php

require __DIR__ . '/includes/koneksi.php';

$json = file_get_contents(__DIR__ . '/data/buku.json');
$data = json_decode($json, true);

$stmt = $pdo->prepare("
    INSERT INTO buku (judul, pengarang, tahun, stok)
    VALUES (:judul, :pengarang, :tahun, :stok)
");

foreach ($data as $buku) {
    $stmt->execute([
        'judul' => $buku['judul'],
        'pengarang' => $buku['pengarang'],
        'tahun' => $buku['tahun'],
        'stok' => $buku['stok']
    ]);
}

echo "Migrasi data buku berhasil.";
?>
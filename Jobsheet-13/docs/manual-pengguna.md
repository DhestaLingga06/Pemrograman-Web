Manual Pengguna — SIMPUS-Mini

1. Registrasi & Login Petugas
Buka http://localhost:8000/auth/register.php.
Isi Nama, Username, Password (minimal 6 karakter), klik Daftar. ![form registrasi](screenshots/registrasi.png)
Setelah berhasil, akan diarahkan ke halaman Login. Masukkan username & password yang baru dibuat, klik Masuk. ![form login](screenshots/login.png)
Setelah berhasil login, navbar menampilkan nama petugas dan tombol Logout, serta menu tambahan (Tambah Buku, Daftar/Tambah Anggota, Peminjaman) yang tidak terlihat oleh Tamu. ![navbar setelah login](screenshots/setelah-login.png)

2. Mengelola Data Buku
Klik menu Tambah Buku, isi Judul, Pengarang, Tahun, ISBN, Stok, Kategori, klik Simpan. ![form tambah buku](screenshots/tambah-buku.png)
Buku baru langsung tampil di Daftar Buku. Gunakan kolom pencarian untuk menyaring berdasarkan judul. ![daftar buku](screenshots/daftar-buku.png)
Klik Edit pada baris buku untuk mengubah data, atau Hapus untuk menghapus (akan muncul konfirmasi sebelum data benar-benar dihapus).

3. Mengelola Data Anggota
Alurnya sama dengan Buku: menu Tambah Anggota → isi form → tampil di Daftar Anggota → Edit/Hapus tersedia per baris.

4. Meminjamkan Buku
Klik menu Peminjaman Baru.
Pilih Anggota dan Buku (hanya buku dengan stok tersedia yang muncul di pilihan), klik Simpan Peminjaman. ![form peminjaman](screenshots/peminjaman.png)
Kembali ke Beranda — kartu "Sedang Dipinjam" bertambah, dan stok buku terkait di Daftar Buku berkurang 1.

5. Mengembalikan Buku
Klik menu Pengembalian.
Cari transaksi berdasarkan nama anggota atau judul buku (opsional), lalu klik Kembalikan pada baris yang sesuai. ![daftar pengembalian](screenshots/pengembalian.png)
Stok buku terkait bertambah kembali 1, dan transaksi hilang dari daftar peminjaman aktif.

6. Melihat Riwayat Peminjaman
Klik menu Riwayat.
Pilih nama anggota dari dropdown, klik Tampilkan.
Tabel menampilkan seluruh riwayat peminjaman anggota tersebut beserta status (Dipinjam/Selesai). ![riwayat peminjaman](screenshots/riwayat-pinjam.png)

7. Logout
Klik Logout di navbar kanan atas untuk mengakhiri sesi. Setelah logout, menu-menu yang membutuhkan login (Tambah Buku, Anggota, Peminjaman) akan hilang dari navbar dan halamannya tidak bisa diakses langsung (otomatis diarahkan ke halaman Login).
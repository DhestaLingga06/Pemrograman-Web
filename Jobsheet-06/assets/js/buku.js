// Memuat daftar buku
function muatDaftarBuku() {
    muatData("../data/buku.json", [
        "judul",
        "pengarang",
        "tahun",
        "stok",
        "kategori"
    ]);
}
document.addEventListener("DOMContentLoaded", function () {
    muatDaftarBuku();

    const btn = document.getElementById("btn-muat-ulang");

    if (btn) {
        btn.addEventListener("click", muatDaftarBuku);
    }
});
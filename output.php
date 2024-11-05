<?php
$harga = [
    "SENIN-KAMIS" => 30000,
    "JUMAT-MINGGU" => 35000
];
$diskon = [
    "MBV" => ["STATUS" => "MEMBER VIP", "DISKON" => 20],
    "MBR" => ["STATUS" => "MEMBER REGULER", "DISKON" => 10],
    "MBN" => ["STATUS" => "NON MEMBER", "DISKON" => 0]
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pilih_hari = $_POST["hari"];
    $pilih_id = $_POST["id_pelanggan"] ;
    $jumlah_beli = $_POST["jumlah_beli"];
    $film = $_POST["film"] ?? '';
    // Memastikan hari dan id pelanggan valid
    if (!isset($harga[$pilih_hari])) {
        echo "Hari tidak valid.";
        exit;
    }
    if (!isset($diskon[$pilih_id])) {
        echo "ID pelanggan tidak valid.";
        exit;
    }
    // Mengambil harga berdasarkan hari
    $harga_hari = $harga[$pilih_hari];
    // Mengambil diskon berdasarkan id pelanggan
    $diskon_pelanggan = $diskon[$pilih_id]["DISKON"];
    $status_pelanggan = $diskon[$pilih_id]["STATUS"];
    // hitung total setelah diskon
    $total_diskon = ($diskon_pelanggan / 100) * $harga_hari;
    $harga_setelah_diskon = $harga_hari - $total_diskon;
    // hitung total harga sebelum PPN
    $total_harga_sebelum_ppn = $harga_setelah_diskon * (int)$jumlah_beli;
    // hitung PPN 11%
    $ppn = 0.11 * $total_harga_sebelum_ppn;
    // hitung total harga setelah PPN
    $total_harga = $total_harga_sebelum_ppn + $ppn;
    echo "<center>
    <div style='width: 300px; border: 1px solid #000; padding: 10px; font-family: Arial;'>
            <h2>Bioskop Rdrhakiem</h2>
            <p>Jl. Siliwangi 127A, Kel. Sepanjang Jaya, Kota Bekasi</p>
            <hr>
            <p>ID PELANGGAN : " . htmlspecialchars($pilih_id) . "</p>
            <p>STATUS : " . htmlspecialchars($status_pelanggan) . "</p>
            <p>FILM : " . htmlspecialchars($film) . "</p>
            <p>JUMLAH BELI : " . (int)$jumlah_beli . "</p>
            <p>DISKON : Rp. " . number_format($total_diskon, 0, ',', '.') . "</p>
            <p>HARGA SEBELUM PPN : Rp. " . number_format($total_harga_sebelum_ppn, 0, ',', '.') . "</p>
            <p>PPN (11%) : Rp. " . number_format($ppn, 0, ',', '.') . "</p>
            <p>TOTAL : Rp. " . number_format($total_harga, 0, ',', '.') . "</p>
            <hr>
            <h3>TERIMA KASIH🚀</h3>
            <a href='input.php'>Kembali</a>
          </div>;
          </center>";   
}
?>
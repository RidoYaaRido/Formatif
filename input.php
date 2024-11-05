<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatif</title>
</head>
<body>
<center>
<div style='width: 300px; border: 1px solid #000; padding: 10px; font-family: Arial;'>
<h1>Bioskop Rdrhakiem</h1>
    <p>Jl. Siliwangi 127A, Kel. Sepanjang Jaya, Kota Bekasi</p>
<form method="post" action="output.php">
    <p>Harga Senin-Kamis : Rp.30.000 </p>
    <p>Harga Jumat-Minggu : Rp.35.000 </p>
    <hr>
    <label for="hari">Pilih Hari:</label>
    <select name="hari" id="hari">
        <option value="SENIN-KAMIS">Senin-Kamis</option>
        <option value="JUMAT-MINGGU">Jumat-Minggu</option>
    </select><br><br>
    <label for="id_pelanggan">Pilih ID Pelanggan:</label>
    <select name="id_pelanggan" id="id_pelanggan">
        <option value="MBV">MBV (MEMBER VIP)</option>
        <option value="MBR">MBR (MEMBER REGULER)</option>
        <option value="MBN">MBN (NON MEMBER)</option>
    </select><br><br>
    <label for="film">Film:</label>
    <input type="text" name="film" id="film"><br><br>
    <label for="jumlah_beli">Jumlah Beli:</label>
    <input type="number" name="jumlah_beli" id="jumlah_beli" min="1" max="4"><br><br>
    <input type="submit" value="submit">
</form>
</div>
<P>rido rifki hakim <br> 2023310042</P>
</center>
</body>
</html>

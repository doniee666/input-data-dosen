<!-- Mengambil data yang akan diedit, berdasarkan id yang dipilih dan
dikirim melalui link (get) -->
<?php
$id=$_GET['id'];
//membuat sql tampil data
$sqldata="SELECT * FROM tbl_dsn WHERE id='$id'";
//ambil koneksi data
require_once "KoneksiDB.php";
//proses sql
$query=mysqli_query($koneksi,$sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
$data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Dosen</h2>
<!-- tag form -->
<form action="Update.php" method="POST">
<label>Id Dosen :</label>
<input type="text" name="id" value="<?=$data['id']?>"
placeholder="Id Dosen" required>
<br>
<label>Nama Dosen :</label>
<input type="text" name="nama" id="nama" value="<?=$data['name']?>"
placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat"
value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
<br>
<label for="">Mata Kuliah :</label>
<select name="mata_kuliah" id="mata_kuliah">
<option value="<?=$data['mata_kuliah']?>"
selected><?=$data['mata_kuliah']?></option>
<option value="Web Programing">Web Programing</option>
<option value="Desain Web">Desain Web</option>
<option value="Jaringan Komputer">Jaringan Komputer</option>
</select>
<br>
<label for="">Umur :</label>
<input type="number" name="umur" id="umur" value="<?=$data['age']?>"
required>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email" value="<?=$data['email']?>"
required>
<br>
<button type="submit" name="kirim" value="kirim">Update Data</button>
</form>
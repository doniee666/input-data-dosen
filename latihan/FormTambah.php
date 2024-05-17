<h2>Tambah Data Dosen</h2>
<!-- tag form -->
<form action="Save.php" method="POST">
<label>Id Dosen :</label>
<input type="text" name="nim" placeholder="Id Dosen"
required>
<br>
<label>Nama Dosen :</label>
<input type="text" name="nama" id="nama" placeholder="Nama Lengkap"
required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat" placeholder="Alamat
Lengkap" required>
<br>
<label for="">Mata Kuliah :</label>
<select name="mata_kuliah" id="mata_kuliah">
<option value="Web Programing" selected>Web Programing</option>
<option value="Desain Web">Desain Web</option>
<option value="Jaringan Komputer">Jaringan Komputer</option>
</select>
<br>
<label for="">Umur :</label>
<input type="number" name="umur" id="umur" required>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email" required>
<br>
<button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>
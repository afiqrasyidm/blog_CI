<h3>Silahkan tuliskan post blog kamu! </h3>

<?php echo form_open('Post/create'); ?>

    <label for="judul">Judul</label>
    <input type="input" name="judul" />
	<br>
	<br>

    <label for="text">Deskripsi</label>
    <textarea rows="4" cols="50" name="deskripsi"></textarea><br />
	<br>
	<br>
    <input type="submit" name="submit" value="Simpan Blog Kamu" />

</form>
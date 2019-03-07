<h3>Update tuliskan post blog kamu! </h3>

<?php echo form_open('post/update/'. $post_data['post_id']); ?>

    <label for="judul">Judul</label>
    <input type="input" name="judul"  value="<?php echo $post_data['judul']; ?>"/>
	<br>
	<br>

    <label for="text">Deskripsi</label>
    <textarea rows="4" cols="50" name="deskripsi"><?php echo $post_data['deskripsi']; ?></textarea><br />
	<br>
	
	<br>
	 <input type="input" name="post_id"  hidden value="<?php echo $post_data['post_id']; ?>"/>
	 
    <input type="submit" name="submit" value="Simpan Blog Kamu" />

</form>


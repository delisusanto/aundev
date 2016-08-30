<html>
<head>
</head>
<body>
<?php echo form_open('kategori/save'); ?>
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
<input name="nama_kategori" class="form-control" placeholder="Nama Kategori" required>
</div>
 <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
   <button type="reset" class="btn btn-warning"> Batal</button>
      <?php echo form_close();?>
</body>
</html>
<form action="/update/<?=$id ?>" method="post">
  <div class="form-group">
    <label for="NPM">NPM</label>
    <input type="text" name="NPM" class="form-control" id="NPM" value="<?=$NPM ?>" >

  </div>
  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" class="form-control" id="Nama" value="<?=$Nama?>" >
  </div>
  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <input type="text" name="Alamat" class="form-control" id="Alamat" value="<?=$Alamat ?>" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
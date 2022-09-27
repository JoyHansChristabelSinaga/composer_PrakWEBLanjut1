<?= $this->extend('template')?>
<?= $this->section('content')?>
<form action ="/store" method ="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="NPM">NPM</label>
        <input type="text" name= "NPM" class="form-control" id="NPM">
      </div>
    <div class="form-group">
     <label for="Nama">Nama</label>
     <input type="text" name= "Nama" class="form-control" id="Nama">
    </div>
    <div class="form-group">
      <label for="Alamat">Alamat</label>
      <input type="text" name= "Alamat" class="form-control" id="Alamat">
   </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="Deskripsi">Deskripsi</label>
      <textarea type="text" name="Deskripsi" id="Deskripsi" class="form-control"></textarea>
    </div>
  </div>
<div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endSection()?>
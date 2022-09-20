<button type="button" class="btn btn-primary">Primary</button>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Created_At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach($mahasiswa as $mhs): ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $mhs['NPM']?></td>
      <td><?= $mhs['Nama']?></td>
      <td><?= $mhs['Alamat']?></td>
      <td><?= $mhs['created_at']?></td>
      <td>
                <div class="d-flex">
                    <a href="/edit/<?=$mhs['id']?>" class="btn btn-warning mr-3">Edit</a>
                    <form action="/delete/<?=$mhs['id'] ?>" method="post">
                        <input name="_method" value="DELETE" type="hidden">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
            </td>
    </tr>
    <?php $no++; endforeach ?>
  </tbody>
</table>
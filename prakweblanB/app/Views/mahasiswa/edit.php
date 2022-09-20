<form action="/update/<?=$id?>" method="post">
    <div class="form-group">
        <label for="npm" class="form-label" id="npm">NPM</label>
        <input type="text" name="npm" id="npm" class="form-control" value="<?= $npm?>">
    </div>
    <div class="form-group">
        <label for="nama" class="form-label" id="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?= $nama?>">
    </div>
    <div class="form-group">
        <label for="alamat" class="form-label" id="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $alamat?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
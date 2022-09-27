<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form action="/update/<?=$mahasiswa['id']?>" method="post">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
            <label for="npm" class="form-label" id="npm">NPM</label>
            <input type="text" name="npm" id="npm" class="form-control" value="<?= $mahasiswa['npm']?>">
        </div>
        <div class="form-group">
            <label for="nama" class="form-label" id="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $mahasiswa['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="alamat" class="form-label" id="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $mahasiswa['alamat'] ?>">
        </div>
        </div>
        <div class="col-6">
            <div class="form-group">
            <textarea type="text" name="deskripsi" id="deskripsi" class="form-control"><?= $mahasiswa['deskripsi'] ?></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endSection() ?>
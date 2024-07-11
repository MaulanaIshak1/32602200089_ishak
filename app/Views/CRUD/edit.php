<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <div class="title"> 
        <h1>Edit data mahasiswa</h1>
    </div>
    <div class="form">
        <form action="/crud/editan" method="post">
            <div class="input">
                <label for="nim">nim</label>
                <input type="text" name="nim" id="nim" value="<?= esc($edit['nim']); ?>" readonly>
            </div>
            <div class="input">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" value="<?= esc($edit['nama']); ?>">
            </div>
            <div class="input">
                <label for="prodi">prodi</label>
                <input type="text" name="prodi" id="prodi" value="<?= esc($edit['prodi']); ?>">
            </div>
            <div class="input">
                <label for="universitas">universitas</label>
                <input type="text" name="universitas" id="universitas" value="<?= esc($edit['universitas']); ?>">
            </div>
            <div class="input">
                <label for="nomor_handphone">No Handphone</label>
                <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= esc($edit['nomor_handphone']); ?>">
            </div>
            <div class="button">
                <button type="submit" value="submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection() ?>

<section class="content-header">
    <a href="<?=site_url('siswa')?>" class="btn btn-sm bg-blue">Data Siswa</a>
</section>

<section class="content container-fluid">
    <div class="panel">
        <div class="panel-heading bg-blue">Tambah Data Siswa</div>
        <div class="panel-body">

            <form method="post" action="<?=site_url('siswa/created')?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
                </div>
                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" class="form-control" name="nisn" placeholder="nisn">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-sm bg-blue">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</section>
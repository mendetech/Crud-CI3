<section class="content-header">
    <a href="<?=site_url('siswa')?>" class="btn btn-sm bg-blue">Data Siswa</a>
</section>

<section class="content container-fluid">
    <div class="panel">
        <div class="panel-heading bg-blue">Ubah Data Siswa</div>
        <div class="panel-body">

            <form method="post" action="<?=site_url('siswa/updated')?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="hidden" class="form-control" name="id_siswa" value="<?=$siswa['id_siswa']?>">
                    <input type="text" class="form-control" name="nama_siswa" value="<?=$siswa['nama_siswa']?>">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="<?=$siswa['jurusan']?>">
                </div>
                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" class="form-control" name="nisn" value="<?=$siswa['nisn']?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-sm bg-blue">Update</button>
                </div>
            </form>

        </div>
    </div>
</section>
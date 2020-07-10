<section class="content-header">
    <a href="<?=site_url('siswa/created')?>" class="btn btn-sm bg-blue">Tambah</a>
</section>

<section class="content container-fluid">
    <div class="panel">
        <div class="panel-heading bg-blue">Data Siswa</div>
        <div class="panel-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan</th>
                        <th>NISN</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($siswa as $row): ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row['nama_siswa'];?></td>
                        <td><?=$row['jurusan'];?></td>
                        <td><?=$row['nisn'];?></td>
                        <td>
                            <a href="<?=site_url('siswa/updated/'.$row['id_siswa'])?>" class="btn btn-sm bg-green"><i class="fas fa-fw fa-pencil-alt"></i> Ubah</a>
                            <a href="<?=site_url('siswa/deleted/'.$row['id_siswa'])?>" class="btn btn-sm bg-red"><i class="fas fa-fw fa-times"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
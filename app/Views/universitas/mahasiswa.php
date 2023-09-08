<div class="col-md-12">
    <h5><?= $page ?></h5>

    <a href="/Universitas/createmhs" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Tambah Data</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tgl Lahir</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama_mhs']; ?></td>
                    <td><?= $mhs['jenkel']; ?></td>
                    <td><?= $mhs['tgl_lahir']; ?></td>
                    <td><?= $mhs['jurusan']; ?></td>
                    <td><?= $mhs['alamat']; ?></td>
                    <td><img src="/img/<?= $mhs['foto']; ?>" width="50"></td>
                    <td width=14%>
                        <a href="/Universitas/editmhs/<?= $mhs['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-square text-white"></i></a>
                        <a href="/Universitas/deletemhs/<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin, Data ini mau dihapus ??')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
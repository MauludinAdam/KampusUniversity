<div class="container">
    <div class="col-md-12">
        <h5><?= $page ?></h5>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dosen</th>
                    <th>No.Telp</th>
                    <th>Jadwal</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($dosen as $value) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['nama_dosen']; ?></td>
                        <td><?= $value['telp']; ?></td>
                        <td><?= $value['jadwal']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td>
                            <a href="<?= base_url('Universitas/editdosen/' . $value['id_dosen']) ?>" class="btn btn-warning"><i class="fas fa-pencil-square text-white"></i> </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
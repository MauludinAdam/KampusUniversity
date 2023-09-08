<div class="col-md-12">
    <div class="card card-outline card-success">
        <div class="card-header">
            <a href="<?= base_url('Prodi/cetakmatkul') ?>" class="btn btn-danger float-right">
                Cetak
            </a>
            <h5><?= $page ?></h5>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1; ?>
                    <?php foreach ($informasi as $value) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nama_matkul']; ?></td>
                            <td><?= $value['hari']; ?></td>
                            <td><?= $value['jam']; ?></td>
                            <td><?= $value['kelas']; ?></td>
                            <td>
                                <a href="<?= base_url('Prodi/editinformasi/' . $value['id_informasi']) ?>" class="btn btn-warning"><i class="fas fa-pencil-square text-white"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
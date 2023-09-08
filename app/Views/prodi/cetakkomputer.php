<div class="col-md-12">
    <div class="card card-outline card-success">
        <div class="card-header">
            <h5><?= $page ?></h5>
        </div>
        <div class="card-body">
            <a href="<?= base_url('Prodi/komputer') ?>" class="btn btn-success mb-2">Kembali</a>
            <button onclick="window.print()" class="btn btn-outline-danger shadow float-right">Print <i class="fa fa-print"></i></button>
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1; ?>
                    <?php foreach ($komputer as $value) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nama_matkul']; ?></td>
                            <td><?= $value['hari']; ?></td>
                            <td><?= $value['jam']; ?></td>
                            <td><?= $value['kelas']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="float-right mt-5">
                <p>Bekasi, 4 september 2023</p><br><br>
                <p class="text-center">Mauludin Adam S.Kom</p>
            </div>
        </div>
    </div>
</div>
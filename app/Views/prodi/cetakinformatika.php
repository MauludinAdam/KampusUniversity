<div class="container">
    <div class="com-md-12">
        <div class="card card-outline">
            <div class="card-header">
                <h5><?= $page ?>
                    <button onclick="window.print()" class="btn btn-outline-danger shadow
                 float-right">Print <i class="fa fa-print"></i></button>
                </h5>
            </div>
            <div class="card-body">
                <a href="<?= base_url('Prodi/informatika') ?>" class="btn btn-outline-success shadow mb-2">Kembali</a>

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
                        <?php foreach ($informatika as $value) : ?>
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
</div>
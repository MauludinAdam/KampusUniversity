<div class="container">
    <div class="col-md-12">
        <div class="card card-outline card-success">

            <div class="card-body">
                <form name="createmhsForm" id="createmhsForm" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama_mhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <input type="hidden" id="id" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class=" col-sm-10">
                            <input type="text" name="nama_mhs" class="form-control <?php echo (isset($validation) && $validation->hasError('nama_mhs')) ? 'is-invalid' : ''; ?>" value="<?= (old('nama_mhs')) ? old('nama_mhs') : $mahasiswa['nama_mhs'] ?>" placeholder="Tulis Nama Di sini">

                            <?php
                            if (isset($validation) && $validation->hasError('nama_mhs')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('nama_mhs') . '</p>';
                            }
                            ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control <?php echo (isset($validation) && $validation->hasError('jenkel')) ? 'is-invalid' : ''; ?>" id="jenkel" name="jenkel" value="<?= (old('jenkel')) ? old('jenkel') : $mahasiswa['jenkel'] ?>">
                                <option value="">---Pilih Jenis Kelamin---</option>
                                <option value="Laki-Laki" <?= $mahasiswa['jenkel'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                                <option value="Perempuan" <?= $mahasiswa['jenkel'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                            <?php
                            if (isset($validation) && $validation->hasError('jenkel')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('jenkel') . '</p>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control <?php echo (isset($validation) && $validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" value="<?= (old('tgl_lahir')) ? old('tgl_lahir') : $mahasiswa['tgl_lahir'] ?>">
                            <?php
                            if (isset($validation) && $validation->hasError('tgl_lahir')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('tgl_lahir') . '</p>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                        <div class="col-sm-10">
                            <input type="number" id="nim" name="nim" class="form-control  <?php echo (isset($validation) && $validation->hasError('nim')) ? 'is-invalid' : ''; ?>" value="<?= (old('nim')) ? old('nim') : $mahasiswa['nim'] ?>" placeholder="Nim">
                            <?php
                            if (isset($validation) && $validation->hasError('nim')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('nim') . '</p>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-control <?php echo (isset($validation) && $validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" id="jurusan" name="jurusan" value="<?= (old('jurusan')) ? old('jurusan') : $mahasiswa['jurusan'] ?>">
                                <option value="" selected>---Pilih Jurusan---</option>
                                <option value="Sistem Informasi" <?= $mahasiswa['jurusan'] == 'Sistem Informasi' ? 'selected' : '' ?>>Sistem Informasi</option>
                                <option value="Teknik Informatika" <?= $mahasiswa['jurusan'] == 'Teknik Informatika' ? 'selected' : '' ?>>Teknik Informatika</option>
                                <option value="Ilmu Komputer" <?= $mahasiswa['jurusan'] == 'Ilmu Komputer' ? 'selected' : '' ?>>Ilmu Komputer</option>
                                <option value="Komputer Akuntansi" <?= $mahasiswa['jurusan'] == 'Komputer Akuntansi' ? 'selected' : '' ?>>Komputer Akuntansi</option>
                            </select>
                            <?php
                            if (isset($validation) && $validation->hasError('jurusan')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('jurusan') . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" id="alamat" name="alamat" class="form-control <?php echo (isset($validation) && $validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= (old('alamat')) ? old('alamat') : $mahasiswa['alamat'] ?>" placeholder="Tulis Alamat Di sini"></textarea>
                            <?php
                            if (isset($validation) && $validation->hasError('alamat')) {
                                echo '<p class="invalid-feedback">' . $validation->getError('alamat') . '</p>';
                            }
                            ?>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                            <a href="<?= base_url('/Universitas/mahasiswa') ?>" class="btn btn-success mt-3"> kembali</a>
                        </div>
                    </div>



            </div>
        </div>
        </form>
    </div>
</div>
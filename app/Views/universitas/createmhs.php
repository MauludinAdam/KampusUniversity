<div class="container">
    <div class="col-md-12">
        <div class="card card-outline card-success">

            <div class="card-body">
                <form name="createmhsForm" id="createmhsForm" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" name="nama_mhs" class="form-control <?php echo (isset($validation) && $validation->hasError('nama_mhs')) ? 'is-invalid' : ''; ?>" value="<?= old('nama_mhs'); ?>" placeholder="Tulis Nama Di sini">
                                <?= csrf_field(); ?>
                                <?php
                                if (isset($validation) && $validation->hasError('nama_mhs')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('nama_mhs') . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control <?php echo (isset($validation) && $validation->hasError('jenkel')) ? 'is-invalid' : ''; ?>" id="jenkel" name="jenkel" value="<?= old('jenkel') ?>">
                                    <option value="" selected>---Pilih Jenis Kelamin---</option>
                                    <option value="Laki-laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php
                                if (isset($validation) && $validation->hasError('jenkel')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('jenkel') . '</p>';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control <?php echo (isset($validation) && $validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" value="<?= old('tgl_lahir'); ?>">
                                <?php
                                if (isset($validation) && $validation->hasError('tgl_lahir')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('tgl_lahir') . '</p>';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nim</label>
                                <input type="number" id="nim" name="nim" class="form-control  <?php echo (isset($validation) && $validation->hasError('nim')) ? 'is-invalid' : ''; ?>" value="<? old('nim'); ?>" placeholder="Nim">
                                <?php
                                if (isset($validation) && $validation->hasError('nim')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('nim') . '</p>';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control <?php echo (isset($validation) && $validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" id="jurusan" name="jurusan">
                                    <option value="" selected>---Pilih Jurusan---</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                                    <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                                </select>
                                <?php
                                if (isset($validation) && $validation->hasError('jurusan')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('jurusan') . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?php echo (isset($validation) && $validation->hasError('foto')) ? 'is-invalid' : ''; ?>" value="<?= old('foto'); ?>" id="foto" name="foto" onchange="previewImage()">
                                    <label class="custom-file-label" for="foto">Pilih Gambar</label>
                                    <div class="col-sm-2 mt-2">
                                        <img src="/image/default.png" width="35" class="image-thumbnail image-preview">
                                    </div>
                                    <?php
                                    if (isset($validation) && $validation->hasError('foto')) {
                                        echo '<p class="invalid-feedback">' . $validation->getError('foto') . '</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea type="text" id="alamat" name="alamat" class="form-control <?php echo (isset($validation) && $validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= old('alamat'); ?>" placeholder="Tulis Alamat Di sini"></textarea>
                                <?php
                                if (isset($validation) && $validation->hasError('alamat')) {
                                    echo '<p class="invalid-feedback">' . $validation->getError('alamat') . '</p>';
                                }
                                ?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h5><?= $page ?>
                    <a href="<?= base_url('prodi/komputer') ?>" class="btn btn-success float-right">Kembali</a>
                </h5>
            </div>
            <div class="card-body">
                <form name="createForm" id="createForm" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mata Kuliah</label>
                                <input type="hidden" id="id_komputer" name="id_informasi" value="<?= $komputer['id_komputer'] ?>">
                                <input type="text" name="nama_matkul" class="form-control" value="<?= $komputer['nama_matkul'] ?>">
                                <?= csrf_field(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Hari</label>
                                <input type="text" name="hari" class="form-control" value="<?= $komputer['hari'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jam</label>
                                <input type="text" name="jam" class="form-control" value="<?= $komputer['jam'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas" class="form-control" value="<?= $komputer['kelas'] ?>">
                            </div>
                            <button type="submit" class="btn btn-info float-right">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
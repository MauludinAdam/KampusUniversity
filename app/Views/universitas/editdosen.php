<div class="container">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h5><?= $page ?></h5>
            </div>
            <div class="card-body">
                <form name="createForm" id="createForm" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Dosen</label>
                                <input type="hidden" id="id_dosen" name="id_dosen" value="<?= $dosen['id_dosen'] ?>">
                                <input type="text" name="nama_dosen" class="form-control" value="<?= $dosen['nama_dosen'] ?>">
                                <?= csrf_field(); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>No. Telp</label>
                                <input type="number" name="telp" class="form-control" value="<?= $dosen['telp'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jadwal</label>
                                <input type="text" name="jadwal" class="form-control" value="<?= $dosen['jadwal'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?= $dosen['email'] ?>">
                            </div>
                            <button type="submit" class="btn btn-info float-right">Update</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
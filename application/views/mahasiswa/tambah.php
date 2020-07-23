<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Form Tambah Mahasiswa</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>    
                        <div class="form-group">
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>    
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <option>Teknik Kimia</option>
                            <option>Teknik Industri</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik Mesin</option>
                            </select>
                        </div>    
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Form Ubah Mahasiswa</div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $mahasiswa['nama'];?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>    
                        <div class="form-group">
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim" value="<?= $mahasiswa['nim'];?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>    
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= $mahasiswa['email'];?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach($jurusan as $j) : ?>
                                <?php if($j == $mahasiswa['jurusan']) : ?>
                                    <option value="<?= $j;?>" selected><?= $j;?></option>
                                <?php else : ?>   
                                    <option value="<?= $j;?>"><?= $j;?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                            </select>
                        </div>    
                        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit People</div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $people['id'];?>">
                    <div class="name">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Insert Name Here" autocomplete="off" value="<?= $people['name'];?>">
                        <small class="form-text text-danger"><?= form_error('name'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"placeholder="Insert Email Here" autocomplete="off" value="<?= $people['email'];?>">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"placeholder="Insert Address Here" autocomplete="off" value="<?= $people['address'];?>">
                        <small class="form-text text-danger"><?= form_error('address'); ?></small>
                    </div>
                    <button type="submit" name="edit" class="btn btn-primary">Change Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
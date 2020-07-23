<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add New People</div>
                <div class="card-body">
                    <form action="" method="post">
                    <div class="name">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Insert Name Here" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('name'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"placeholder="Insert Email Here" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"placeholder="Insert Address Here" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('address'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
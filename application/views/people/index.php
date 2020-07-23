<div class="container">
        <?php if($this->session->flashdata('flash')): ?>
        <div class="row mt-3">
            <div class="col-md-6">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Data has been successfully <strong><?php echo $this->session->flashdata('flash');?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
        </div>
        <?php endif;?>
    
    <h3 class="mt-3">List People</h3>
    <div class="row">
        <div class="col-md-10">
            <form action="<?= base_url('people')?>" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus="on">
                <div class="input-group-append">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>people/add" class="btn btn-primary">Add New People</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-10">
        <h5>Total Pencarian: <?= $total_rows ?></h5>
            <table class="table"> 
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(empty($people)) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger" role="alert">
                                Data tidak ditemukan!
                            </div>
                        </td>
                    </tr>
                <?php endif;?>
                <?php foreach ($people as $people) : ?>
                    <tr>
                        <th><?= ++$start;?></th>
                        <td><?= $people['name']?></td>
                        <td><?= $people['email']?></td>
                        <td>
                            <a href="<?= base_url();?>/people/detail/<?= $people['id'];?>" class="badge badge-warning">Detail</a>
                            <a href="<?= base_url();?>/people/edit/<?= $people['id'];?>" class="badge badge-success">Edit</a>
                            <a href="<?= base_url();?>/people/delete/<?= $people['id'];?>" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
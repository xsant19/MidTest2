<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Customer</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/customer/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table  table-bordered table-condensed table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th scope="row">No</th>
                        <th scope="col">Contact Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">Product</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Tell us more</th>
                        <th scope="row justify-content-md-center">Action</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($customer as $row) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->name; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->phone; ?></td>
                            <td><?= $row->order; ?></td>
                            <td><?= $row->product; ?></td>
                            <td><?= $row->reason; ?></td>
                            <td><?= $row->subject; ?></td>
                            <td><?= $row->tell; ?></td>
                            <td>
                                <a title=" Edit" href="<?= base_url("customer/edit/$row->id_customer"); ?>" class="btn btn-info col">Edit</a>
                                <a title="Delete" href="<?= base_url("customer/delete/$row->id_customer") ?>" class="btn btn-danger col" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
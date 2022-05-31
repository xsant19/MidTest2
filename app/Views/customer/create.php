<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Customer</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Check Your Entry Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('customer/store') ?>">
                <?= csrf_field(); ?>
                <h4 class="text-black">ABSEN GENAP</h4>
                <hr>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Contact Name</label>
                    <input type="text" class=" col-sm-6 form-control" id="name" name="name" required value="<?= old('name'); ?>">
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label ">Email</label>
                    <input type="email" class=" col-sm-6 form-control id=" email" name="email" required value="<?= old('email'); ?>">
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label ">Phone Number</label>
                    <input type="tel" class="col-sm-6 form-control" id="phone" name="phone" required value="<?= old('phone'); ?>">
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="order" class="col-sm-2 col-form-label ">Order Number</label>
                    <input type="number" class="col-sm-6 form-control" id="order" name="order" required value="<?= old('order'); ?>">
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="product" class="col-sm-2 col-form-label ">Product</label>
                    <select name="product" class="col-sm-2 form-control" id="product" required>
                        <option value="None" selected>--None--</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                        <option value="Truck">Truck</option>
                        <option value="Bis">Bis</option>
                    </select>
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="reason" class="col-sm-2 col-form-label">Reason</label>
                    <select name="reason" class="col-sm-6 form-control" id="reason" required>
                        <option value="None" selected>--None--</option>
                        <option value="Rent">Rent Car</option>
                        <option value="Cash">Cash</option>
                        <option value="Credit">Credit</option>
                    </select>
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-sm-2 col-form-label ">Subject</label>
                    <input type="subject" class="col-sm-8 form-control" id="subject" name="subject" required value="<?= old('subject'); ?>">
                    <span class=" col-sm-1" style ="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="tell" class="col-sm-2 col-form-label">Tell Us More</label>
                    <textarea class="col-sm-8 form-control" id="tell" name="tell" required value="<?= old('tell');  ?>"></textarea>
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn rounded-pill bg-success btn-info" />
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
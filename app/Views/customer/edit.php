<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Customer</h3>
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
            <form method="post" action="<?= base_url('customer/update/' . $customer->id_customer) ?>">
                <?= csrf_field(); ?>
                <h4 class="text-black">ABSEN GENAP</h4>
                <hr>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Contact Name</label>
                    <input type="text" class=" col-sm-6 form-control" id="name" name="name" value="<?= $customer->name; ?>">
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label ">Email</label>
                    <input type="email" class=" col-sm-6 form-control id=" email" name="email" name="email" value="<?= $customer->email; ?>" />
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label ">Phone Number</label>
                    <input type="tel" class="col-sm-6 form-control" id="phone" name="phone" value="<?= $customer->phone; ?>" />
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="order" class="col-sm-2 col-form-label ">Order Number</label>
                    <input type="number" class="col-sm-6 form-control" id="order" name="order" value="<?= $customer->order; ?>" />
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="product" class="col-sm-2 col-form-label ">Product</label>
                    <select name="product" class="col-sm-2 form-control" id="product">
                        <option value="None" <?= ($customer->product == "None" ? "selected" : ""); ?>>None</option>
                        <option value="Mobil" <?= ($customer->product == "Mobil" ? "selected" : ""); ?>>Mobil</option>
                        <option value="Motor" <?= ($customer->product == "Motor" ? "selected" : ""); ?>>Motor</option>
                        <option value="Bis" <?= ($customer->product == "Bis" ? "selected" : ""); ?>>Bis</option>
                    </select>
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="reason" class="col-sm-2 col-form-label ">Reason</label>
                    <select name="reason" class="col-sm-6 form-control" id="reason">
                        <option value="None" <?= ($customer->reason == "None" ? "selected" : ""); ?>>None</option>
                        <option value="Rent" <?= ($customer->reason == "Rent" ? "selected" : ""); ?>>Rent</option>
                        <option value="Cash" <?= ($customer->reason == "Cash" ? "selected" : ""); ?>>Cash</option>
                        <option value="Credit" <?= ($customer->reason == "Credit" ? "selected" : ""); ?>>Credit</option>
                    </select>
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-sm-2 col-form-label ">Subject</label>
                    <input type="subject" class="col-sm-8 form-control" id="subject" name="subject" value="<?= $customer->subject; ?>">
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group row">
                    <label for="tell" class="col-sm-2 col-form-label">Tell Us More</label>
                    <textarea class="col-sm-8 form-control" id="tell" name="tell"><?= $customer->tell; ?></textarea>
                    <span class=" col-sm-1" style="color:gray; font-size: 30px;">*</span>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn rounded-pill bg-success btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
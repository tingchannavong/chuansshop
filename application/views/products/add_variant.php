<!doctype html>
<html lang="en" data-bs-theme="auto">
<body>
    <div class='bg-info'>
    <div class='container p-5'>
        <h1 class="fw-bold --bs-primary-text-emphasis"> <?php echo $header; ?> </h1>
        <?php if ($this->session->flashdata('success')): ?>
            <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
        <?php elseif ($this->session->flashdata('error')): ?>
            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        
        <!-- Call to open form via controller_name/function -->
        <?php echo form_open('products/variant_submit'); ?>

        <form>
        <div class="row g-3">
            <div class="col-lg-2">
                <label for="var_id" class="form-label">Variant ID</label>
                <input name="var_id" type="text" class="form-control" id="inputvarID">
                <?php echo form_error('var_id'); ?>
            </div>
            <div class="col-lg-3">
                <label for="barcode" class="form-label">Barcode</label>
                <select name="barcode">
                    <option value="">Select Barcode</option>
                    <?php foreach ($products as $product): ?>
                        <option value="<?= $product->barcode ?>"><?= $product->barcode ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('barcode'); ?>
            </div>
            <div class="col-lg-3">
                <label for="color" class="form-label">Color</label>
                <select name="color">
                    <option value="">Select Color</option>
                    <?php foreach ($colors as $color): ?>
                        <option value="<?= $color->id ?>"><?= $color->color_name ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('color'); ?>
            </div>
            <div class="col-lg-3">
                <label for="size" class="form-label">Size</label>
                <select name="size">
                    <option value="">Select Size</option>
                    <?php foreach ($sizes as $size): ?>
                        <option value="<?= $size->id ?>"><?= $size->size_name ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('size'); ?>
            </div>
            <div class="col-lg-4">
                <label for="quantity" class="form-label">Quantity</label>
                <input name="quantity" type="text" class="form-control" id="inputqty">
                <?php echo form_error('quantity'); ?>
            </div>
            
      
        <div class="row g-3 justify-content-start gx-1">
            <div class="col-md-3">
                <button type="submit" class="btn btn-warning">Next</button>
            </div>
            <div class="col-md-3">
                <button type="button" onclick="window.location.href='<?php echo site_url('products/displayitems'); ?>'" class="btn btn-danger">Cancel</button>
            </div>
        </div>
        </form>
        </div>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->

        <?php echo form_close(); ?>
    </body>
</html>

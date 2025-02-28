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
        <?php echo form_open('products/item_submit'); ?>

        <form>
        <div class="row g-3">
            <div class="col-lg-12">
                <label for="barcode" class="form-label">Barcode</label>
                <input name="barcode" type="text" class="form-control" id="inputBarcode">
                <?php echo form_error('barcode'); ?>
            </div>
            <div class="col-lg-4">
                <label for="name" class="form-label">Name</label>
                <select name="name_id">
                    <option value="">Select Name</option>
                    <?php foreach ($names as $name): ?>
                        <option value="<?= $name->id ?>"><?= $name->product_name ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('name_id'); ?>
            </div>
            <div class="col-lg-4">
                <label for="name" class="form-label">Category</label>
                <select name="category">
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->id ?>"><?= $category->category_name ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('category'); ?>
            </div>
            <div class="col-lg-4">
                <label for="name" class="form-label">Brand</label>
                <select name="brand">
                    <option value="">Select Brand</option>
                    <?php foreach ($brands as $brand): ?>
                        <option value="<?= $brand->id ?>"><?= $brand->brand_name ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('brand'); ?>
            </div>
            <div class="col-lg-4">
                <label for="cost" class="form-label">Cost</label>
                <input name="cost" type="text" class="form-control" id="inputcost">
                <?php echo form_error('cost'); ?>
            </div>
            <div class="col-lg-4">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="text" class="form-control" id="inputprice">
                <?php echo form_error('price'); ?>
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

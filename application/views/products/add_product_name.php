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
        <?php echo form_open('products/name_submit'); ?>

        <form>
        <div class="row g-3">
            <div class="col-lg-6">
                <label for="product_id" class="form-label">Product ID</label>
                <input name="product_id" type="text" class="form-control" id="inputproductID">
                <?php echo form_error('product_id'); ?>
            </div>
            <div class="col-lg-6">
                <label for="product_name" class="form-label">Product Name</label>
                <input name="product_name" type="text" class="form-control" id="inputproductName">
                <?php echo form_error('product_name'); ?>
            </div>
      
        <div class="row g-3 justify-content-start gx-1">
            <div class="col-md-3">
                <button type="submit" class="btn btn-warning">Add</button>
            </div>
            <div class="col-md-3">
                <button type="button" onclick="window.location.href='<?php echo site_url('products/displayproductnames'); ?>'" class="btn btn-danger">Cancel</button>
            </div>
        </div>
        </form>
        </div>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->

        <?php echo form_close(); ?>
    </body>
</html>

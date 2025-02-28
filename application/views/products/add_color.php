<!doctype html>
<html lang="en" data-bs-theme="auto">
<body>
    <div class='bg-info'>
    <div class='container p-5'>
        <h1 class="fw-bold --bs-primary-text-emphasis"> New Color </h1>
        <?php if ($this->session->flashdata('success')): ?>
            <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
        <?php elseif ($this->session->flashdata('error')): ?>
            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        
        <!-- Call to open form via controller_name/function -->
        <?php echo form_open('products/color_submit'); ?>

        <form>
        <div class="row g-3">
            <div class="col-lg-6">
                <label for="color_id" class="form-label">Color ID</label>
                <input name="color_id" type="text" class="form-control" id="inputColorID">
                <?php echo form_error('color_id'); ?>
            </div>
            <div class="col-lg-6">
                <label for="color_name" class="form-label">Color Name</label>
                <input name="color_name" type="text" class="form-control" id="inputColorName">
                <?php echo form_error('color_name'); ?>
            </div>
            <div class="col-lg-6">
                <label for="color_code" class="form-label">Color Code</label>
                <input name="color_code" type="text" class="form-control" id="inputColorCode">
                <?php echo form_error('color_code'); ?>
            </div>
      
        <div class="row g-3 justify-content-start gx-1">
            <div class="col-md-3">
                <button type="submit" class="btn btn-warning">Add</button>
            </div>
            <div class="col-md-3">
                <button type="button" onclick="window.location.href='<?php echo site_url('products/displaycolor'); ?>'" class="btn btn-danger">Cancel</button>
            </div>
        </div>
        </form>
        </div>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->

        <?php echo form_close(); ?>
    </body>
</html>

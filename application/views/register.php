<!doctype html>
<html lang="en" data-bs-theme="auto">
<body>
    <div class='bg-info'>
    <div class='container p-5'>
        <h1 class="fw-bold --bs-primary-text-emphasis"> Registration Form: User Details </h1>
        <?php if ($this->session->flashdata('success')): ?>
            <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
        <?php elseif ($this->session->flashdata('error')): ?>
            <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        
        <!-- Call to open form via controller_name/function -->
        <?php echo form_open('auth/submit'); ?>

        <form>
        <div class="row g-3">
            <div class="col-lg-6">
                <label for="inputName" class="form-label">First Name</label>
                <input name="firstname" type="text" class="form-control" id="inputName">
            </div>
            <div class="col-lg-6">
                <label for="inputLastName" class="form-label">Last Name</label>
                <input name="lastname" type="text" class="form-control" id="inputLastName">
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <!-- Need attribute name for form validation before submit -->
                <input name="username" type="text" class="form-control" id="inputUsername" placeholder="markiplier">
                <?php echo form_error('username'); ?>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword4">
                <?php echo form_error('password'); ?>
            </div>
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4">
            <?php echo form_error('email'); ?>
        </div>
        <div class="col-12">
            <label for="inputPhone" class="form-label">Phone Number</label>
            <input name="phonenumber" type="text" class="form-control" id="inputPhoneNumber" placeholder="020 78912345">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address</label>
            <input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input name="city" type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select name="state" id="inputState" class="form-select">
                <!-- Provide value for user to choose province/state ID -->
                <option value="" selected>Choose...</option>
                <option>...</option>
                <option value="AR" selected>AR</option>
                <option value="VZ" selected>VZ</option>
                <option value="CT" selected>CT</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input name="zip" type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-2">
                <label for="inputCountry" class="form-label">Country</label>
                <input name="country" type="text" class="form-control" id="inputCountry">
            </div>
        <div class="row g-3 justify-content-start gx-1">
            <div class="col-md-3">
                <button type="submit" class="btn btn-warning">Submit Registration</button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-secondary" onclick="window.location.href='<?php echo site_url('auth'); ?>'">Go Back</button>
            </div>
        </div>
        </form>
        </div>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->

        <?php echo form_close(); ?>
    </body>
</html>

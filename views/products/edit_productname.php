<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?= base_url('assets/js/color-modes.js') ?>"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Edit</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- jquery plugin  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <!-- Pass link as api url to external js file -->
    <script>
      const UPDATE_URL = "<?php echo site_url('products/upd/productname'); ?>";
    </script>

    <!-- Link to external js file !! -->
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/actions.js"></script>

    <style>
      .bi {
        display: inline-block;
        width: 1rem;
        height: 1rem;
      }

      /*
      * Sidebar
      */

      @media (min-width: 768px) {
        .sidebar .offcanvas-lg {
          position: -webkit-sticky;
          position: sticky;
          top: 48px;
        }
        .navbar-search {
          display: block;
        }
      }

      .sidebar .nav-link {
        font-size: .875rem;
        font-weight: 500;
      }

      .sidebar .nav-link.active {
        color: #2470dc;
      }

      .sidebar-heading {
        font-size: .75rem;
      }

      /*
      * Navbar
      */

      .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset 1px 0 0 rgba(0, 0, 0, .25);
      }

      .navbar .form-control {
        padding: .75rem 1rem;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/dashboard.css') ?>" rel="stylesheet">
</head>

<body>

<?php include APPPATH . 'views/layouts/sidebar.php'; ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class='container p-5'>
        <h1 class="fw-bold --bs-primary-text-emphasis"> Edit Product Name </h1>   
        <form id="edit_form">
        <div class="row g-3">
            <div class="col-lg-6">
                <label for="product_id" class="form-label">Product ID</label>
                <input name="id" type="text" class="form-control" id="inputproductID" value="<?php echo $record['id']; ?>" readonly>
            </div>
            <div class="col-lg-6">
                <label for="product_name" class="form-label">Product Name</label>
                <input name="product_name" type="text" class="form-control" id="inputproductName" value="<?php echo $record['product_name']; ?>">
                <span id="name_error"></span>
                <?php echo form_error('product_name'); ?>
            </div>
      
        <div class="row g-3 justify-content-start gx-1">
            <div class="col-md-3">
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
            <div class="col-md-3">
                <button type="button" onclick="window.location.href='<?php echo site_url('products/displayproductnames'); ?>'" class="btn btn-danger">Cancel</button>
            </div>
        </div>
        </form>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        </main>

        <script src="<?php base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
        <script src="<?php base_url('assets/js/dashboard.js') ?>"></script>

        <script type="text/javascript">
        $(document).ready(function () {

        $("#edit_form").on('submit', function (event) {
            event.preventDefault(); // Prevent regular form submission
            console.log($(this).serialize());

            $.ajax({
                url: UPDATE_URL,
                type: 'POST',
                data: $(this).serialize(), // grab forms data
                dataType: 'json', // tells jQuery to parse the response as JSON
                success: function (response) {
                  console.log(response);
                  
                    if (response.status === "success") {
                      window.location.assign("<?= site_url('products/displayproductnames'); ?>");
                    } else if (response.error) {
                      
                        $('#name_error').html(response.name_error || '');
                        if (response.message) {
                            alert(response.message);
                        }
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX error:", error);
                    console.error("Response:", xhr.responseText);
                    alert("500 Server Error. Check browser console for details.");
                }
            });
        });
    });
    </script>
    </body>
</html>
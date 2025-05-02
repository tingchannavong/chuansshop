<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?= base_url('assets/js/color-modes.js') ?>"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title><?php echo $title; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" rel="stylesheet">

<!-- jquery validation plugin *has to be called before .js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Pass link as api url to external js file -->
<script>
  const DEL_URL = "<?= base_url('products/delete'); ?>";
  const EDIT_URL = "<?php echo site_url('products/mod/name/'); ?>";
</script>

<!-- Link to external js file !! -->
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/actions.js"></script>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS + Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $table; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="<?php echo site_url('products/name') ?>">
            <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $add; ?></button>
            </a>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
        </div>
      <div class="table-responsive small">
        
        <table class="table table-striped">
          <thead>
            <tr class="table-light">
              <th scope="col">No</th>
              <th scope="col">Product ID</th>
              <th scope="col">Product Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="table table-striped">
            <?php
          $i=1;
          foreach($data as $row) // Because it was named $result['DATA'] in the controller
          {
          echo "<tr>";
          echo "<th scope='row'>".$i."</th>";
          echo "<td>".$row->id."</td>";
          echo "<td>".$row->product_name."</td>";
          echo '<td>
<select name="action" class="form-select" aria-label="Action">
  <option selected disabled value="act">Action</option>
  <option value="edit">Edit</option>
  <option value="delete">Delete</option>
</select></td>';
          echo "</tr>";
          $i++;
          }
          ?>
          </tbody>
        </table> 
      </div>

      <!-- Delete Modal -->
    <div class="modal fade" id="deletePrompt" tabindex="-1" aria-labelledby="deleteoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Are you sure?</h5>
            <button type="button" id="close-modal" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">

            <h2>Do you confirm to delete product ID <span id="modalID"></span> ?</h2> 
            <button type="button" id="yes_del" class="btn btn-danger"> Yes, delete it! </button>
            <button type="button" id="no_del" class="btn btn-secondary" data-bs-dismiss="modal"> No </button>

          </div>
        </div>
      </div>
    </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    </main>
  </div>
</div>
<script src="<?php base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
    <script src="<?php base_url('assets/js/dashboard.js') ?>"></script>
  </body>
</html>

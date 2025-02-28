<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
<title>Display users</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>

<div class="container">
<h2>All Users Data</h2>
 
<body>

<table class="table table-striped">
  <thead>
    <tr class="table-light">
      <th scope="col">No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Username</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Zip</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody class="table table-striped">
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr> -->
    <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<th scope='row'>".$i."</th>";
  echo "<td>".$row->firstname."</td>";
  echo "<td>".$row->lastname."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->username."</td>";
  echo "<td>".$row->phone_number."</td>";
  echo "<td>".$row->address."</td>";
  echo "<td>".$row->city."</td>";
  echo "<td>".$row->zip."</td>";
  echo "<td>".$row->state."</td>";
  echo "<td>".$row->country."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
  </tbody>
</table>

</div>

<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>
</html>
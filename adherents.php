<?php
require('includes/config.inc.php');
include('includes/header.inc.php');
include('includes/fonction.inc.php');
?>

<body>
  <table>
    <thead>
      <tr>
        <th>Civilité</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Age</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody style="text-align:center">
    <?php
echo listingAdherents($conn);
?>
</tbody>
</table>


<?php  include('includes/footer.inc.php'); ?>

<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">First Name</th>
        <th class="text-center">Last Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Joining Date</th>
      </tr>
    </thead>
    <?php
      include_once "../../config.php";
      $sql="SELECT * from users";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["firstname"]?></td>
      <td><?=$row["lastname"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["mobileno"]?></td>
      <td><?=$row["date"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>
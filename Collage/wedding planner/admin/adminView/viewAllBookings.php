<div id="ordersBtn" >
  <h2>Booking Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>O.N.</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Rooms</th>
        <th>Attendees</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Comments</th>
        <th>No of days</th>
        <th>Date & Time</th>
        <th class="text-center">Action</th>
        </tr>
    </thead>
     <?php
      include_once "../../config.php";
      $sql="SELECT * from wedding_form";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_array()) {
    ?>
       <tr>
          <td><?=$row["id"]?></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["phone"]?></td>
          <td><?=$row["email"]?></td>
          <td><?=$row["rooms"]?></td>
          <td><?=$row["attendees"]?></td>
          <td><?=$row["start_date"]?></td>
          <td><?=$row["end_date"]?></td>
          <td><?=$row["comments"]?></td>
          <td><?=$row["nodays"]?></td>
          <td><?=$row["date_time"]?></td>
          <td><button class="btn btn-danger" style="height:40px" onclick="bookingDelete('<?=$row['id']?>')">Delete</button></td>
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
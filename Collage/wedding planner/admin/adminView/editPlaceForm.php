
<div class="container p-5">

<h4>Edit Place Detail</h4>
<?php
    include_once "../../config.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM event_place WHERE id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["venue_id"];
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="product_id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="desc">Product Description:</label>
      <input type="text" class="form-control" id="p_desc" value="<?=$row1['description']?>">
    </div>
    <div class="form-group">
      <label>Event Venue:</label>
      <select id="category">
        <?php
          $sql="SELECT * from event_venue WHERE venue_id='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['venue_id'] ."'>" .$row['venue_name'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * from event_venue WHERE venue_id!='$catID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['venue_id'] ."'>" .$row['venue_name'] ."</option>";
            }
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["event_img"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['event_img']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Place</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>
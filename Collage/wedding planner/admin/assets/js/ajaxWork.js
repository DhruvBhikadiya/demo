function showEventPlaces(){  
    $.ajax({
        url:"./adminView/viewEventPlaces.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showVenue(){  
    $.ajax({
        url:"./adminView/viewVenues.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showCustomers(){
    $.ajax({
        url:"./adminView/viewCustomers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showBooking(){
    $.ajax({
        url:"./adminView/viewAllBookings.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//add product data
function addItems(){
    var p_desc=$('#p_desc').val();
    var category=$('#category').val();
    var upload=$('#upload').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_desc', p_desc);
    fd.append('category', category);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addplaceController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Places Added successfully.');
            $('form').trigger('reset');
            showEventPlaces();
        }
    });
}

//edit product data
function itemEditForm(id){
    $.ajax({
        url:"./adminView/editPlaceForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
function updateItems(){
    var product_id = $('#product_id').val();
    var p_desc = $('#p_desc').val();
    var category = $('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('product_id', product_id);
    fd.append('p_desc', p_desc);
    fd.append('category', category);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
   
    $.ajax({
      url:'./controller/updatePlaceController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showEventPlaces();
      }
    });
}

//delete product data
function itemDelete(id){
    $.ajax({
        url:"./controller/deletePlaceController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Place Successfully deleted');
            $('form').trigger('reset');
            showEventPlaces();
        }
    });
}




//delete category data
function venueDelete(id){
    $.ajax({
        url:"./controller/venueDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Venue Successfully deleted');
            $('form').trigger('reset');
            showVenue();
        }
    });
}

// delete booking data
function bookingDelete(id) {
    $.ajax({
        url:"./controller/bookingDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Booking Successfully deleted');
            $('form').trigger('reset');
            showVenue();
        }
    });
}
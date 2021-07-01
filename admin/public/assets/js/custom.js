
//visitor page table
$(document).ready(function() {
  $('#VisitorDt').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

//for services table
function getServicesData() {

  axios.get('/getServicesData')
      .then(function(response) {
          var jsonData = response.data;


          if (response.status == 200) {
              $('#mainService').removeClass('d-none');
              $('#leader').addClass('d-none');

              $('#serviceTable').empty();


              $.each(jsonData, function(i, item) {
                  $('<tr>').html(
                      "<td class='th-sm'><img class='table-img' src=" + jsonData[i].service_img + "></td>" +
                      "<td class='th-sm'>" + jsonData[i].service_name + "</td>" +
                      "<td class='th-sm'>" + jsonData[i].service_desc + "</td>" +
                      "<td class='th-sm'><button type='button' data-id=" + jsonData[i].id + "  class='serviceEditBtn btn btn-info'><i class='fas fa-edit'></i></button></td>" +
                      "<td class='th-sm'><button type='button' data-id=" + jsonData[i].id + " class='btn serviceDeleteBtn btn-danger'><i class='fas fa-trash-alt'></i></button></td>"
                  ).appendTo('#serviceTable')
              })

              // services table delete icon click 
              $('.serviceDeleteBtn').click(function() {
                  var id = $(this).data('id');
                  $('#servicedeleteID').html(id);
                  $('#deleteModal').modal('show');

              })


              // services table edit icon click 
              $('.serviceEditBtn').click(function() {
                  var id = $(this).data('id');
                  $('#serviceEditID').html(id);
                  $('#editModal').modal('show');
                  serviceUpdateDetails(id);

              })

              //services delete modal confirm button
              $('#servicedeleteConfirmBtn').click(function() {
                  var id = $('#servicedeleteID').html();
                  serviceDelete(id);

              })

          } else {
              $('#dataNotFund').removeClass('d-none');
              $('#leader').addClass('d-none');
          }


      })

      .catch(function(error) {
          $('#dataNotFund').removeClass('d-none');
          $('#leader').addClass('d-none');
      })

}


// service delete 
function serviceDelete(deleteID) {
  axios.post('/serviceDelete', {
          id: deleteID
      })
      .then(function(response) {

          if (response.data == 1) {
              $('#deleteModal').modal('hide');
              getServicesData()
          } else {
              $('#deleteModal').modal('hide');
          }
      })

      .catch(function(error) {
          alert('delete failed')
      })

}


// service update details 
function serviceUpdateDetails(detailsID) {
  axios.post('/serviceDetails', {
          id: detailsID
      })
      .then(function(response) {

        if(response.status == 200){
          var jsonData = response.data;
          $('#serviceName').val(jsonData[0].service_name);
          $('#serviceDesc').val(jsonData[0].service_desc);
          $('#serviceImg').val(jsonData[0].service_img);
        }
        else{

        }

      })

      .catch(function(error) {
        
      })

}


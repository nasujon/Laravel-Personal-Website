$(document).ready(function () {
  $('#VisitorDt').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


function getServicesData() {


  axios.get('/getServicesData')
  .then(function(response){
    var jsonData = response.data;

    
    if(response.status == 200){
      $('#mainService').removeClass('d-none');
      $('#leader').addClass('d-none');

      $.each(jsonData, function(i, item){
        $('<tr>').html(
          "<td class='th-sm'><img class='table-img' src="+ jsonData[i].service_img +"></td>"+
          "<td class='th-sm'>"+ jsonData[i].service_name +"</td>" +
          "<td class='th-sm'>"+ jsonData[i].service_desc +"</td>" +
          "<td class='th-sm'><i class='fas fa-edit'></i></a></td>" +
          "<td class='th-sm'><a href='' ><i class='fas fa-trash-alt'></i></a></td>"
        ).appendTo('#serviceTable')
      })
    }
    else{
      $('#dataNotFund').removeClass('d-none');
      $('#leader').addClass('d-none');
    }
    
    
    
  })

  .catch(function(error){
    $('#dataNotFund').removeClass('d-none');
    $('#leader').addClass('d-none');
  })


}
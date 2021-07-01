@extends('layout.app')


@section('content')


  <div id="mainService" class="d-none container">
    <div class="row">
      <div class="col-md-12 p-5">
        <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">Image</th>
              <th class="th-sm">Name</th>
              <th class="th-sm">Description</th>
              <th class="th-sm">Edit</th>
              <th class="th-sm">Delete</th>
            </tr>
          </thead>
          <tbody id="serviceTable">
          
        
          
          </tbody>
        </table>
      
      </div>
    </div>
  </div>

  <div id="leader">
    <img src="{{asset('assets/images/200.gif')}}" alt="">
  </div>

  <div id="dataNotFund" class="d-none text-center">
    <h3>Data not fund</h3>
  </div>


<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
        <p>Do you went to delete from here id <span id="serviceDeleteId"></span></p>
        <h6 id="servicedeleteID" class="mt4"></h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button id="servicedeleteConfirmBtn" type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>


<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-body p-5">
        <h6 id="serviceEditID" class="mt4"></h6>
        
          <input type="text" id="serviceName" class="form-control" placeholder="Service Name" />
          <br>
          <input type="text" id="serviceDesc"  class="form-control" placeholder="Service Desc" />
          <br>
          <input type="text" id="serviceImg" class="form-control" placeholder="Service img link" />
      
        
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
        <button id="serviceEditBtn" type="button" class="btn btn-warning">Save</button>
      </div>
    </div>
  </div>
</div>



@endsection


@section('script')
    <script type="text/javascript">
      getServicesData();
    </script>
@endsection
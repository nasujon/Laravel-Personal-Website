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


  

  
@endsection

@section('script')
    <script type="text/javascript">
      getServicesData();
    </script>
@endsection
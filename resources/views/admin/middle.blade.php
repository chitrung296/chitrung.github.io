<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
    
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Admin Management</h4>
              @if (Session::has('success'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
              </div>
          @endif
              <div class="table-responsive pt-3">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>
                        AdminID
                      </th>
                      <th>
                        AdminPassword
                      </th>
                      <th>
                        AdminPhoto
                      </th>
                      <th>
                        AdminFullname
                      </th>
                      <th>
                        AdminAddress
                      </th>
                      {{-- <th>
                        Action
                      </th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $pro)
            <tr >
                <td>{{$pro->adminID}}</td>
                <td>{{$pro->adminPass}}</td>
                <td>
                    <img src="../fmImage/{{$pro->adminPhoto}}" alt="" 
                         height="120px" width="120px">                        
                </td>
                <td>{{$pro->adminFullname}}</td>
                <td>{{$pro->adminAdress}}</td>
                <td> 
                  {{-- <a href="">Edit</a> | &nbsp;
                  <a href="">Delete</a> --}}
                  <td>                       
                    <a href="{{url('product-edit')}}\{{$pro->productID}}" title="Edit this product"><i class="bi bi-pencil-fill"></i></a> &nbsp;
                    <a href="{{url('admin-delete')}}\{{$pro->adminID}}" title="Delete this product" onclick="return confirm('Are you sure delete this product?');"><i class="bi bi-x-square"></i></a> &nbsp;
                </td>
                </td>
                 
            </tr>
            @endforeach 

                     <tr class="table-info">
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                    </tr>
                    <tr class="table-warning">
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                    </tr>
                    <tr class="table-danger">
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                    </tr>
                    <tr class="table-success">
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                    </tr>
                    <tr class="table-primary">
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                      <td>
                         
                      </td>
                    </tr>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
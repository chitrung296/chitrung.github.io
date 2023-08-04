<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Products</title>
</head>
<body>  
    <div class="container mt-3" style="margin-top: 20px">
        <table class="table table-hover">
            <h2>Product List</h2>
            
            <div style="margin-right: 10%; margin-bottom:20px; float: right;">
                <a href="{{url('product-add')}}" class="btn btn-primary"style="background-color:Tomato;">Add product</a>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <thead class="table-danger">
                <tr>
                    <th>ID</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Details</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $pro)
                <tr>
                    <td>{{$pro->productID}}</td>
                    <td>{{$pro->productName}}</td>
                    <td>{{number_format($pro->productPrice)}}</td>
                    <td>{{$pro->productDetails}}</td>
                    <td>
                        <img src="pro_img\{{$pro->productImage}}" alt="" 
                             height="120px" width="120px">                        
                    </td>
                    <td>{{$pro->catID}}</td>
                    <td>                       
                        <a href="{{url('product-edit')}}\{{$pro->productID}}" title="Edit this product"><i class="bi bi-pencil-fill"style="font-size:; color: rgb(0, 255, 0);"></i></a> &nbsp;
                        <a href="{{url('product-delete')}}\{{$pro->productID}}" title="Delete this product" onclick="return confirm('Are you sure delete this product?');"><i class="bi bi-x-square"style="font-size:; color: rgb(255, 0, 0);"></i></a> &nbsp;
                    </td>
                </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
</body>
</html>
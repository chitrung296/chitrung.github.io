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

    <title>Product add</title>
</head>

<body>
    <div class="container mt-3" style="margin-top:20px">
        <h2>Add new product</h2>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="{{url('product-save')}}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="id">Product ID:</label>
                <input type="text" class="form-control" id="id" 
                       placeholder="Enter product id" name="id">
                       @error('id')
                       <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                           
                       @enderror
            </div>
            <div class="mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" 
                       placeholder="Enter product name" name="name">
                       @error('name')
                       <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" 
                       placeholder="Enter product price" name="price">
                       @error('price')
                       <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" 
                       placeholder="Enter product image" name="image">
                       @error('image')
                       <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="details">Details:</label>
                <textarea class="form-control" rows="5" id="details" name="details"></textarea>
                @error('details')
                <div class="alert alert-danger" role="alert">
                 {{$message}}
             </div>
             @enderror
            </div>
            <div class="mb-3">
                <label for="category">Category:</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($category as $cat)
                    <option value="{{$cat->catID}}">{{$cat->catName}}</option>
                    @endforeach                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('product-list')}}" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>

</html>

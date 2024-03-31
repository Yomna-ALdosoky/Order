<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color 
        {
            color: black;
            padding-bottom: 20px;
        }
        label 
        {
          display: inline-block;
          width: 200px;

        }
        .div_design 
        {
          padding-bottom: 15px;
        }

    </style>

  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          @if (session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            {{session()->get('message')}}
          </div>
          @endif

            <div class="div_center">
              <h1 class="font_size">order</h1>
                <form action="{{url('/api/add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                  <label>Product Title :</label>
                  <input class="text_color" type="text" name="product_name" placeholder="Write A Title" required="">
                </div>
                <div class="div_design">
                    <label>category Title :</label>
                    <input class="text_color" type="text" name="category_name" placeholder="Write A Title" required="">
                  </div>

                <div class="div_design">
                    <input type="submit" value="Add Order" class="btn btn-primary">
                  </div>
              </form>
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
  </body>
</html>
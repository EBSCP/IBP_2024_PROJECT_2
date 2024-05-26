<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')

    <style>
    .container {
            text-align: center;
            padding-top: 50px;
    }
    label {
        display: inline-block;
        width: 200px;
    }
    input, select {
        color: black;
        width: 200px;
    }

    </style>
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <div  class="container"style="padding-top: 15px;">

      <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div style="padding-top: 15px;">
                    <label>Name</label>
                    <input type="text" name="name" style="color:black;" value=" {{$data->name}}" required>
                </div>

                <div style="padding-top: 15px;">
                    <label>phone</label>
                    <input type="text" name="phone" style="color:black;" value=" {{$data->phone}}" required>
                </div>
                <div style="padding-top: 15px;">
                    <label>room</label>
                    <input type="text" name="room" style="color:black;" value="{{$data->room}}"required>
                </div>

                <div style="padding-top: 15px;">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>

            @include('admin.navbar')
        <!-- partial -->
   @include('admin.footer')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

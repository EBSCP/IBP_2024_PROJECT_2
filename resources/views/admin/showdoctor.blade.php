<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
     <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding:100px;">
            <table>
            <tr style="background-color:black;">
                <th style="padding: 10px;" >Doctor name</th>
                <th style="padding: 10px;">phone</th>
                <th style="padding: 10px;">speacilaty</th>
                <th style="padding: 10px;">Room No</th>
                <th style="padding: 10px;">Image</th>
                <th>Delete</th>
                <th>upload</th>
            </tr>
            @foreach($data as $doctor)
            <tr align="center" style="background-color:skyblue;">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->spealicity}}</td>
                <td>{{$doctor->room}}</td>
                <td><img  height ="100px" weight="100px" src="doctorimage/{{$doctor->image}}" alt=""></td>
                <td><a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Upload</a></td>

            </tr>
            @endforeach
            </table>
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

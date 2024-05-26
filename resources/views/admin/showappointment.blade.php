<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
        .center{
            text-align:center;
        }
    </style>
  </head>
  <body>

      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="center" style="padding:100px;">
            <table>
            <tr style="background-color:black;">
                <th style="padding: 10px;" >Customer name</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">phone</th>
                <th style="padding: 10px;">Doctor Name</th>
                <th style="padding: 10px;">Date</th>
                <th style="padding: 10px;">Messages</th>
                <th style="padding: 10px;">status</th>
                <th style="padding: 10px;">approved</th>
                <th style="padding: 10px;">canceled</th>
            </tr>

            @foreach($data as $appoint)
            <tr class="center" style="background-color:skyblue;">
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->phone}}</td>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">approved</a></td>
                <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">canceled</a></td>
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

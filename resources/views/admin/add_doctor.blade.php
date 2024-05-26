<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
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
    @include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
        <div class="container">
            <form action="{{ url('/upload_doctor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding-top: 15px;">
                    <label>Name</label>
                    <input type="text" name="name" style="color:black;"  placeholder="Enter a name" required>
                </div>

                <div style="padding-top: 15px;">
                    <label>Phone</label>
                    <input style="color:black;" type="number" name="phone" placeholder="Phone number" required>
                </div>

                <div style="padding-top: 15px;">
                    <label>Speciality</label>
                    <select style="color:black;" name="spealicity" required>
                        <option  value="">Select</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="nose">Nose</option>
                    </select>
                </div>

                <div style="padding-top: 15px;">
                    <label>Room No</label>
                    <input style="color:black;" type="text" name="room" placeholder="Enter room number" required>
                </div>

                <div style="padding-top: 15px;">
                    <label>Image</label>
                    <input  type="file" name="file" required="">
                </div>

                <div style="padding-top: 15px;">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>

    @include('admin.navbar')
    @include('admin.footer')
    @include('admin.script')
</body>
</html>

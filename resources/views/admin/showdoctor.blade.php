<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top: 100px">
        <div>
            <table style="border:1px solid black">
                <tr style="background-color: black;" align="center">
                    <th style="padding: 10px; font-size:20px; color:white">Doctor Name</th>
                    <th style="padding: 10px; font-size:20px; color:white">Phone</th>
                    <th style="padding: 10px; font-size:20px; color:white">Speciality</th>
                    <th style="padding: 10px; font-size:20px; color:white">Room No</th>
                    <th style="padding: 10px; font-size:20px; color:white">Image</th>
                    <th style="padding: 10px; font-size:20px; color:white">Delete</th>
                    <th style="padding: 10px; font-size:20px; color:white">Update</th>
                    
                </tr>
                @foreach ($data as $doctor)
                    
                <tr style="background-color: skyblue;" align="center">
                    <td style="padding: 10px;  color:white">{{ $doctor->name }}</td>
                    <td style="padding: 10px;  color:white">{{ $doctor->phone }}</td>
                    <td style="padding: 10px;  color:white">{{ $doctor->Speciality }}</td>
                    <td style="padding: 10px;  color:white">{{ $doctor->room }}</td>
                    <td style="padding: 10px;  color:white"><img height="100" width="100" src="doctorimage/{{ $doctor->image }}"></td>
                    <td><a onclick="return confirm('are you sure?')" class="btn btn-danger" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{ url('updatedoctor',$doctor->id) }}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
      </div>
   @include('admin.script')
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    label{
        display:inline-block;
        width: 200px
    }

    </style>
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div class="container" align="center" style="padding-top:100px;">

                @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message') }}
            </div>
                
            @endif

                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div style="padding: 15px;">
                        <label>Doctor Name</label>
                        <input type="text" style="color: black" name="name" placeholder="Write the name" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="number" style="color: black" name="number" placeholder="Write the number" required="">
                    </div>


                    <div style="padding: 15px;">
                        <label>Speciality</label>
                        <select name="speciality" style="color: black;width:200px" required="">
                            <option>--Select--</option>
                            <option value="Skin">Skin</option>
                            <option value="Heart">Heart</option>
                            <option value="Eye">Eye</option>
                            <option value="Nose">Nose</option>
                        </select>
                    </div>


                    <div style="padding: 15px;">
                        <label>room No</label>
                        <input type="text" style="color: black" name="room" placeholder="Write the room Number" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>Doctor Image</label>
                       <input type="file"name="file" required="">
                    </div>

                    <div style="padding: 15px;">
    
                       <input type="submit"class="btn btn-success">
                    </div>






                </form>
            </div>
          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>
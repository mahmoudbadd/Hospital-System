<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
    label{
        display: inline-block;
        width:200px ;
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

      <div class="container-fluid page-body-wrapper">
       
        <div class="container" align="center" style="padding: 100px">

            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">{{ $data->name }}</button>
                {{session()->get('message') }}
            </div>
                
            @endif

            <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                    <label> Doctor Name</label>
                    <input type="text" name="name" style="color: black" value="{{ $data->name }}"> 
                </div>
                <div style="padding: 15px">
                    <label> Phone</label>
                    <input type="number" name="phone"  style="color: black"  value="{{ $data->phone }}"> 
                </div>
                
                <div style="padding: 15px;">
                    <label>Speciality</label>
                    <select name="speciality"  style="color: black">
                        <option>{{ $data->Speciality }}</option>
                        <option value="Skin">Skin</option>
                        <option  value="Heart">Heart</option>
                        <option  value="Eye">Eye</option>
                        <option  value="Nose">Nose</option>
                    </select>
                </div>

                <div style="padding: 15px">
                    <label> Room</label>
                    <input type="text" name="room" style="color: black"  value="{{ $data->room }}"> 
                </div>
                <div style="padding: 15px">
                    <label> Old image</label>
                    <img height="150" width="150px" src="doctorimage/{{ $data->image }}">
                </div>

                <div style="padding: 15px">
                    <label>Change image</label>
                    <input type="file" name="file">
                </div>

                <div style="padding: 15px">
                  
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
      </div>
        
   @include('admin.script')
  </body>
</html>
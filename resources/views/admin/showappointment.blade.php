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
      
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top: 100px">
            <table style="border:1px solid black">
                <tr style="background-color: black;" align="center">
                    <th style="padding: 10px; font-size:20px; color:white">Customer Name</th>
                    <th style="padding: 10px; font-size:20px; color:white">email</th>
                    <th style="padding: 10px; font-size:20px; color:white">phone</th>
                    <th style="padding: 10px; font-size:20px; color:white">Doctor Name</th>
                    <th style="padding: 10px; font-size:20px; color:white">Date</th>
                    <th style="padding: 10px; font-size:20px; color:white">Message</th>
                    <th style="padding: 10px; font-size:20px; color:white">Status</th>
                    <th style="padding: 10px; font-size:20px; color:white">aproved</th>
                    <th style="padding: 10px; font-size:20px; color:white">Cancel</th>
                    <th style="padding: 10px; font-size:20px; color:white">Send Mail</th>
                </tr>
                    @foreach ( $data as $appoint)
                        
                    
                <tr align="center" style="background-color: skyblue">
                    <td>{{ $appoint->name }}</td>
                    <td>{{ $appoint->email }}</td>
                    <td>{{ $appoint->phone }}</td>
                    <td>{{ $appoint->doctor }}</td>
                    <td>{{ $appoint->date }}</td>
                    <td>{{ $appoint->message }}</td>
                    <td>{{ $appoint->status }}</td>
                    <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                    <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                    <td><a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send mail</a></td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
        
   @include('admin.script')
  </body>
</html>
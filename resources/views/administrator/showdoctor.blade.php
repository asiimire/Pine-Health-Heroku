<!DOCTYPE html>
<html lang="en">
  <head>
    @include('administrator.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      @include('administrator.sidebar')
      @include('administrator.navbar')
      
      <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top: 100px;">
            <table>
                <tr style="background-color: black;" align="center">
                    <th style="padding: 10px;">Doctor name</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Specialty</th>
                    <th style="padding: 10px;">Room number</th>
                    <th style="padding: 10px;">Image</th>
                    <th style="padding: 10px;">Delete</th>
                    <th style="padding: 10px;">Update</th>
                    
                </tr>

                @foreach ($data as $doctor)
                    
                <tr align="center" style="background-color: skyblue;">
                    <td>{{ $doctor-> name}}</td>
                    <td>{{ $doctor-> phone}}</td>
                    <td>{{ $doctor-> specialty}}</td>
                    <td>{{ $doctor-> room}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{ $doctor-> image}}"></td>
                    <td ><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')" href="{{ url('deletedoctor',$doctor-> id) }}">Delete</a></td>
                    <td ><a class="btn btn-primary" onclick="" href="{{ url('updatedoctor',$doctor-> id) }}">Update</a></td>
                </tr>

                @endforeach

    </div>
    </div>
        <!-- partial -->
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('administrator.script')
  </body>
</html>
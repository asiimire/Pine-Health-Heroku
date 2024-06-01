<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('administrator.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      @include('administrator.sidebar')
      @include('administrator.navbar')
      
      <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top: 100px;">

      @include('administrator.acknowledge')

        <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
                <label  >Doctor name</label>
                <input type="text" style="color: black;" name="name" value="{{ $data->name }}" placeholder="Type doctor's name" required>
            </div>
            <div style="padding: 15px;">
                <label  >Phone</label>
                <input type="text" style="color: black;" name="number" value="{{ $data->phone }}" placeholder="Type phone number" required>
            </div>
            <div style="padding: 15px;">
                <label  >Specialty</label>
                <input type="text" style="color: black;" name="specialty" value="{{ $data->specialty }}" placeholder="Type specialty" required>
            </div>
            <div style="padding: 15px;">
                <label  >Room Number</label>
                <input type="text" style="color: black;" name="room" value="{{ $data->room }}" placeholder="Type room number" required>
            </div>
            <div style="padding: 15px;">
                <label  >Old image</label>
                <img height="100" width="100" src="doctorimage/{{ $data->image }}" >
            </div>
            <div style="padding: 15px;">
                <label for="">Change Image</label>
                <input type="file" name="file">
            </div>

            <div style="padding: 15px;">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
      </div>
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
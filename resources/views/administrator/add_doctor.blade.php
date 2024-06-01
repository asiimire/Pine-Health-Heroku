<!DOCTYPE html>
<html lang="en">
  <head>
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

        <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px;">
                <label  >Doctor name</label>
                <input type="text" style="color: black;" name="name" placeholder="Type doctor's name" required>
            </div>
            <div style="padding: 15px;">
                <label  >Phone</label>
                <input type="text" style="color: black;" name="number" placeholder="Type phone number" required>
            </div>
            <div style="padding: 15px;">
                <label  >Specialty</label>
                <select name="specialty" id="specialty" style="color: black; width: 250px;">
                    <option value="">--select--</option>
                    <option value="ophthalmologist">Ophthalmologist</option>
                    <option value="gynaecologist">Gynaecologist</option>
                    <option value="Surgeon">Surgeon</option>
                    <option value="nurse">Nurse</option>
                    <option value="medical">Medical</option>
                    <option value="pharmacist">Pharmacist</option>
                </select>
            </div>
            <div style="padding: 15px;">
                <label  >Room Number</label>
                <input type="text" style="color: black;" name="room" placeholder="Type room number" required>
            </div>
            <div style="padding: 15px;">
                <label  >Doctor image</label>
                <input type="file" name="file" required>
            </div>
            <div style="padding: 15px;">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
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
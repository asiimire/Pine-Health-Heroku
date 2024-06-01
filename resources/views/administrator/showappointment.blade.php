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
                <tr style="background-color: black;">
                    <th style="padding: 10px;">Customer name</th>
                    <th style="padding: 10px;">Email</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Doctor name</th>
                    <th style="padding: 10px;">Date</th>
                    <th style="padding: 10px;">Message</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Approved</th>
                    <th style="padding: 10px;">Cancelled</th>
                    <th style="padding: 10px;">Send mail</th>

                </tr>
                @foreach ($data as $appoint)
                    
                <tr align="center" style="background-color: skyblue;">
                    <td>{{ $appoint-> name}}</td>
                    <td>{{ $appoint-> email}}</td>
                    <td>{{ $appoint-> phone}}</td>
                    <td>{{ $appoint-> doctor}}</td>
                    <td>{{ $appoint-> date}}</td>
                    <td>{{ $appoint-> message}}</td>
                    <td>{{ $appoint-> status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('cancelled',$appoint->id) }}">Cancelled</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('emailview',$appoint->id) }}">Send mail</a>
                    </td>
                </tr>
                @endforeach
            </table>
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
@include('nav')

<div align="center" style="padding: 70px;">
    <table>
        <tr style="background-color: black;" align="center">
            <th style="padding: 10px; font-size: 20px; color:white;">Doctor name</th>
            <th style="padding: 10px; font-size: 20px; color:white;">Date</th>
            <th style="padding: 10px; font-size: 20px; color:white;">Message</th>
            <th style="padding: 10px; font-size: 20px; color:white;">Status</th>
            <th style="padding: 10px; font-size: 20px; color:white;">Cancel Appointment</th>
        </tr>

        @foreach ($appoint as $appoints)
        
        <tr style="background-color: black;">
            <td style="padding: 10px; color:white;">{{$appoints->doctor}}</td>
            <td style="padding: 10px; color:white;">{{$appoints->date}}</td>
            <td style="padding: 10px; color:white;">{{$appoints->message}}</td>
            <td style="padding: 10px; color:white;">{{$appoints->status}}</td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this appointment?')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
        </tr>
        @endforeach
    </table>
</div>

@include('jscript')
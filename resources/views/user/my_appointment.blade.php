@extends('user.main')
@section('content')
<div align="center" style="padding:50px;" >
    <div class="col-lg-10" style="background-color: aquamarine;">
        <div class="card-box">
            <div class="card-block">
                <h4 class="card-title" style="padding:10px;">My Appointment</h4>
                <div class="table-responsive">
                    <table class="table mb-0" id="myappointment">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Date</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appoint as $appoints)
                            <tr>
                                <td>{{$appoints->doctor}}</td>
                                <td>{{$appoints->date}}</td>
                                <td>{{$appoints->message}}</td>
                                <td>{{$appoints->status}}</td>
                                <td><a class="btn btn-rounded btn-danger" style="padding:2px;" onclick="return confirm('are you sure to remove this?')" href="{{url('cancel_appoint', $appoints->id)}}">Cancel</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
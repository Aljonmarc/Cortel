@extends('showappointment.main')
@section('content')
<div class="col-lg-12">
    <div class="card-box">
        <div class="card-block">
            <h5 class="text-bold card-title">Appointment</h5>
            <table class="table table-bordered mb-0" id="showappointment">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th> Customer </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> Doctor </th>
                        <th> Date </th>
                        <th> Message </th>
                        <th> Status </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $appoint)
                    <tr>
                        <td>{{$appoint->id}}</td>
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success btn-sm mb-1" href="{{url('approved',$appoint->id)}}"><i class="mdi mdi-account-check">Approved</i></a>
                            <a class="btn btn-danger btn-sm mb-1" href="{{url('canceled',$appoint->id)}}"><i class="mdi mdi-account-remove">Canceled</i></a>
                            <a class="btn btn-primary btn-sm mb-1" href="{{url('emailview',$appoint->id)}}"><i class="mdi mdi-contact-mail">Mail</i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('doctors.main')
@section('content')
<div class="col-lg-12">
    <div class="card-box">
        <div class="card-block">
            <h5 class="text-bold card-title">All doctors</h5>
            <table class="table table-bordered mb-0" id="showdoctor">
                <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th> Phone </th>
                        <th> Speciality </th>
                        <th> Room No. </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $doctor)
                    <tr>
                        <td> <a class="avatar" href="profile.html"><img alt="" src="doctorimage/{{$doctor->image}}"></a> {{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm mb-1" href="{{url('updateDoctor',$doctor->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a onclick="return confirm('are you sure to delete this?')" class="btn btn-danger btn-sm mb-1" href="{{url('deleteDoctor',$doctor->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
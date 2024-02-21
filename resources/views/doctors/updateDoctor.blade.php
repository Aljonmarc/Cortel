@extends('doctors.main')
@section('content')
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <h4 class="page-title">Update Doctor</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form action="{{url('editDoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Dr. Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" required="" value="{{$data->name}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Contact No.</label>
                        <input class="form-control" type="number" name="phone" required="" value="{{$data->phone}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="address" required="" value="{{$data->address}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Speciality</label>
                        <select class="form-control" name="speciality" required="">
                            <option>{{$data->speciality}}</option>
                            <option>-Select-</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>
                            <option value="lungs">lungs</option>
                            <option value="teeth">teeth</option>
                            <option value="general">general</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Room No.</label>
                        <input class="form-control" type="number" name="room" required="" value="{{$data->room}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Old  &nbsp; &nbsp; &nbsp; &nbsp; Change</label>
                        <div class="profile-upload">
                            <div class="upload-img">
                            <img src="{{ asset('doctorimage/' . $data->image) }}">
                            </div>
                            <div class="upload-input">
                                <input type="file" class="form-control" name="file" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-t-20 text-center">
                <button class="btn btn-primary submit-btn" type="submit">Update Doctor</button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('admin/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>

@if (Session::has('message'))
<script>
    Swal("Doctor", "{{ Session::get('message')}}", 'success', {});
</script>
@endif

@endsection
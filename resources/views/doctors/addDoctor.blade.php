@extends('doctors.main')
@section('content')
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <h4 class="page-title">Add Doctor</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form action="{{url('saveDoctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Dr. Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Contact No.</label>
                        <input class="form-control" type="number" name="phone" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Address <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="address" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Speciality</label>
                        <select  class="form-control" name="speciality" required="">
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
                        <input class="form-control" type="number" name="room" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Avatar</label>
                        <div class="profile-upload">
                            <div class="upload-img">
                                <img alt="" src="{{ asset('assets/assets/img/user.jpg') }}">
                            </div>
                            <div class="upload-input">
                                <input type="file" class="form-control" name="file" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-t-20 text-center">
                <button class="btn btn-primary submit-btn" type="submit">Create Doctor</button>
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
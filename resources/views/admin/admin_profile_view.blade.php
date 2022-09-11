@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">

                <!-- Simple card -->
                <div class="card">
                    <center>
                        <br>
                        <img class="rounded-circle avatar-xl" alt="200x200"
                            src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg') }}"
                            data-holder-rendered="true">
                        <br>
                    </center>
                    <div class="card-body account-info">
                        <h4 class="card-title">{{ $adminData->name }} ({{ $adminData->username }})</h4>
                        <p>Email: {{$adminData->email}}</p>
                        <a href="{{ route('edit.profile') }}" class="btn btn-info waves-effect waves-light">Edytuj
                            profil</a>
                    </div>
                </div>


            </div><!-- end col -->
        </div>
    </div>
</div>

@endsection

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
                            src="{{ asset('backend/assets/images/users/avatar-4.jpg') }}" data-holder-rendered="true">
                        <br>
                    </center>
                    <div class="card-body account-info">
                        <h4 class="card-title">{{ $adminData->name }} ({{ $adminData->username }})</h4>
                        <p>Email: {{$adminData->email}}</p>
                        <a href="{{ route('edit.profile') }}"
                            class="btn btn-info btn-rounden waves-effect waves-light">Edytuj profil</a>
                    </div>
                </div>


            </div><!-- end col -->
        </div>
    </div>
</div>

@endsection

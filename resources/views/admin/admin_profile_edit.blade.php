@extends('admin.admin_master')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form class="card-body" method="POST" action="{{ route('store.profile') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h4 class="card-title">Edytuj profil</h4>
                        <p class="card-title-desc">W tym miejsu możesz edytować dane twojego konta.</p>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Imię</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Podaj imię" id="name" name="name"
                                    value="{{ $editData->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nazwa użytkownika</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Podaj nazwę użytkownika"
                                    id="username" name="username" value="{{ $editData->username }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Adres email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Podaj adres email" id="email"
                                    name="email" value="{{ $editData->email }}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Zdjęcie profilowe</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="profile_image" name="profile_image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img id="show_image" class="rounded-circle avatar-xl" alt="200x200"
                                    src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image) : url('upload/no_image.jpg') }}"
                                    data-holder-rendered="true">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Aktualizuj">

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#profile_image').change(function (e) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#show_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection

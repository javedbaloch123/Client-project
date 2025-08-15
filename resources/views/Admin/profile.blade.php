@extends('admin.layout')

@section('content')
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-theme-white-2 rounded-pill"
            role="alert">
            <div
                class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                <i class="fas fa-check align-self-center mb-0 text-white "></i>
            </div>
            <strong>Well done!</strong> {{ session('message') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container-xxl">

        <div class="row justify-content-center">
            <!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <!--end col-->
            <div class="col-md-8">
                <ul class="nav nav-tabs mb-3" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link fw-medium" data-bs-toggle="tab" href="#settings" role="tab"
                            aria-selected="false">Settings</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                    <div class="tab-pane p-3 active" id="settings" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Personal Information</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <form action="{{ route('update.profile') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3 row">
                                        <label
                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Name</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="text" name="name"
                                                value="{{ auth()->user()->name }}">
                                                 <p class="text-danger m-0"></p>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label
                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" name="email" type="email"
                                                value="{{ auth()->user()->email }}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                             <p class="text-danger m-0"></p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change Password</h4>
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <form action="{{ route('update.password') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3 row">
                                        <label
                                            class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current
                                            Password</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" type="password" name="cpass"
                                                placeholder="Password">
                                            <a href="{{ route('email') }}" class="text-primary font-12">Forgot password ?</a>
                                            @error('cpass')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                             <p class="text-danger m-0"></p>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New
                                            Password</label>
                                        <div class="col-lg-9 col-xl-8">
                                            <input class="form-control" name="npass" type="password"
                                                placeholder="New Password">
                                                <p class="text-danger m-0"></p>
                                            @error('npass')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <!--end card-->
                    </div>
                </div>
            </div> <!--end col-->
        </div><!--end row-->


    </div><!-- container -->
    <!--Start Rightbar-->
    <!--Start Rightbar/offcanvas-->
    {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div> --}}
    <!--end Rightbar/offcanvas-->
@endsection

 
@push('customJs')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function(){

    // Profile Update Form Validation
    $("form[action='{{ route('update.profile') }}']").on("submit", function(e){
        let name = $("input[name='name']").val().trim();
        let email = $("input[name='email']").val().trim();
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let isValid = true;

        $(".text-danger").text(""); // Purane error hata do

        if(name.length < 3){
            $("input[name='name']").next(".text-danger").text("Name must be a 3 character");
            isValid = false;
        }
        if(!emailPattern.test(email)){
            $("input[name='email']").next(".text-danger").text("This is not a valid email");
            isValid = false;
        }

        if(!isValid){
            e.preventDefault(); // Form submit stop karega
        }
    });

    // Password Change Form Validation
    $("form[action='{{ route('update.password') }}']").on("submit", function(e){
        let cpass = $("input[name='cpass']").val().trim();
        let npass = $("input[name='npass']").val().trim();
        let isValid = true;

        $(".text-danger").text(""); // Purane error hata do

        if(cpass.length < 8){
            $("input[name='cpass']").nextAll(".text-danger:first").text("Password must be Atleast 8 characters");
            isValid = false;
        }
        if(npass.length < 8){
            $("input[name='npass']").nextAll(".text-danger:first").text("Password must be Atleast 8 characters");
            isValid = false;
        }

        if(!isValid){
            e.preventDefault();
        }
    });

});
</script>

@endpush

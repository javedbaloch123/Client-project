<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">


<!-- Mirrored from mannatthemes.com/rizz/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jul 2025 08:37:35 GMT -->

<head>


    <meta charset="utf-8" />
    <title>Rizz | Rizz - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('RizzAssets/images/favicon.ico') }}">


    <!-- App css -->
    <link href="{{ asset('RizzAssets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('RizzAssets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('RizzAssets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>


<!-- Top Bar Start -->

<body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">

            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                    <div class="text-center p-3">

                                        <h2 class="mt-3 mb-1 fw-semibold text-white  ">Sign in </h2>
                                        {{-- <p class="text-muted fw-medium mb-0">Sign in</p>   --}}
                                    </div>
                                </div>
                                <div class="card-body pt-0">

                                    <form class="my-4" action="{{ route('login.process') }}" method="POST">
                                        @if (session('message'))
                                            <p class="text-danger">{{ session('message') }}</p>
                                        @endif
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter email" value="{{ old('email') }}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div><!--end form-group-->

                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="userpassword" placeholder="Enter password" value="{{ old('password') }}">
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div><!--end form-group-->

                                        <div class="form-group row mt-0">
                                            <!--end col-->
                                            <div class="col-sm-6 ">
                                                <a href="{{ route('email') }}" class="text-muted font-13"><i
                                                        class="dripicons-lock"></i> Forgot password?</a>
                                            </div><!--end col-->
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Log In <i
                                                            class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->


                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      @if (session('pass'))
        <script>
            
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "6000",
                "positionClass": "toast-top-right"
            };
            toastr.success('Password has been changed successfully');
        </script>
    @endif<!-- container -->
</body>
<!--end body-->

</html>

@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Add Testimonial</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <form action="{{ route('create.testimonial') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Client Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Client Profession</label>
                            <input type="text" class="form-control" id="profession" name="profession"
                                aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('profession') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Comment</label>
                            <textarea class="form-control" name="comment" id="comment" cols="30" rows="10">{{ old('comment') }}</textarea>
                            @error('comment')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection

 
@push('customStyle')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-content: center;
        }
    </style>
@endpush


@push('customJs')
    @if (session('toast'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "4000",
                "positionClass": "toast-top-right"
            };
            toastr.success('Project added successfully');
        </script>
    @endif
@endpush

@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="col-md-9 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Custom Styles</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <form action="{{ route('about.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $data->title }}">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="message">Description</label>
                                    <textarea class="form-control" rows="5" id="desc" name="desc">{!! $data->desc !!}</textarea>
                                    @error('desc')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="useremail">Education</label>
                            <input type="text" class="form-control" id="education" name="education"
                                value="{{ $data->education }}">
                            @error('education')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="useremail">Projects Completed</label>
                            <input type="number" class="form-control" id="project_completed" name="project_completed"
                                value="{{ $data->project_completed }}">
                            @error('project_completed')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="useremail">Years Experience</label>
                            <input type="number" class="form-control" id="years_experience" name="years_experience"
                                value="{{ $data->years_experience }}">
                                 @error('years_experience')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="useremail">Years Experience</label>
                            <input type="number" class="form-control" id="client_satisfaction" name="client_satisfaction"
                                value="{{ $data->client_satisfaction }}">
                                 @error('client_satisfaction')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="useremail">languages</label>
                            <input type="text" class="form-control" id="languages" name="languages"
                                value="{{ $data->languages }}">
                                 @error('languages')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="image" name="image">
                              @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                           <div class="input-group mb-3">
                            <img src="{{ asset('uploads/about/'.$data->image) }}" alt="" width="60px" height="60px">
                           </div>
                        <div class="row">
                            <div class="col-sm-12 text-end">
                                <button type="submit" class="btn btn-primary px-4">Save</button>
                            </div>
                        </div>
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
            toastr.success('data updated successfully');
        </script>
    @endif
@endpush

@push('customJs')
    <script>
        ClassicEditor
            .create(document.querySelector('#desc'), {
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'bulletedList', 'numberedList', '|',
                    'alignment:left', 'alignment:center', 'alignment:right', '|',
                    'link', 'blockQuote', 'undo', 'redo'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Add Project</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <form action="{{ route('update.project',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                                placeholder="Enter email" value="{{ $data->name }}">
                        </div>
                         
                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" aria-describedby="emailHelp"
                                placeholder="Enter category" value="{{ $data->category }}">
                        </div>
                         <div class="mb-3">
                            <label for="date" class="form-label">Project Created Date</label>
                            <input type="date" class="form-control" id="date" value="{{ $data->project_date }}" name="date" aria-describedby="emailHelp"
                                 >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                         <div class="mb-3">
                            <img src="{{ asset('uploads/project/'.$data->image) }}" alt="" width="70px" height="70px">
                         </div>
                         <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10">{{ $data->desc }}</textarea>
                            
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
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
                <form action="{{ route('whyme.update',$data->id) }}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="message">Why Me</label>
                                <textarea class="form-control" rows="5" id="desc" name="desc">{{ $data->desc }}</textarea>
                            </div>
                        </div>
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

     <style>
        .container{
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
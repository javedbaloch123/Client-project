@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="col-md-10 col-lg-10">
           <a href="{{ route('add.testimonial') }}"><button class="btn btn-primary">Add Testimonial</button></a>  
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Projects</h4>
                        </div><!--end col-->
                    </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-centered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Client Profession</th>
                                    <th>Comment</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                 
                                @foreach ($data as $item)
                                <tr>
                                    <td>#{{ $count++ }}</td>
                                    <td>{{ $item->client_name }}</td>
                                    <td>{{ $item->profession }}</td>
                                  <td>{{ Str::limit(strip_tags($item->desc), 50) }}</td>
                                    <td class="text-end">
                                        <div class="dropdown d-inline-block">
                                            <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown"
                                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                
                                                <a class="dropdown-item" href="{{ route('delete.testimonial',$item->id) }}" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                  @endforeach
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection


@push('customStyle')
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
            toastr.success('testimonial added successfully');
        </script>
    @endif
@endpush

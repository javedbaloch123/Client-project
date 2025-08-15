@extends('admin.layout')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Administrator Dashboard</h1>
    <p class="lead">"Manage, Monitor, and Control – All in One Place".</p>
  </div>
</div>
@endsection


@push('customStyle')
    <style>
        .container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background: white;
            height: 40vh;
        }

        .container .lead{
             width: 50%;
             text-align: center;
        }
    </style>
@endpush
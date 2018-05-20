@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Picture</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pictureCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'pictureCRUD.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
    @include('PictureCRUD.form')
    {!! Form::close() !!}
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('action' => array('backend\CategoryController@update',$stores->id,$edit_navs), 'method' => 'get')) !!}
                123
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

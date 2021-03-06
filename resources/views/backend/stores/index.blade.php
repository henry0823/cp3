@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/backend/stores/create">Create</a>
            @if($stores != '')
                @foreach($stores as $list)
                <div class="panel panel-default">
                <a href="{{ url('backend/stores', ['link' => $list->id])}}" class="btn btn-info pull-right">Enter</a>
                    <div class="panel-heading">
                        Domain->{{ $list->domain}}
                    </div>

                    <div class="panel-body">
                        Infomation
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection

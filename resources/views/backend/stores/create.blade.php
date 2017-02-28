@extends('layouts/backend/template')

@section('main')

<div class="widget">
    <div class="widget-header transparent">
        <h2><strong>網店</strong> 列表</h2>
    </div>
    <div class="widget-content padding">
    {!! Form::open(array('action' => array('backend\StoresController@store'))) !!}
        @include('backend/stores/_form')
    {!! Form::close() !!}
    </div>
</div>

@stop

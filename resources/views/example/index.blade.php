@extends('example.layouts.layout')

@section('main-header')
    @parent
@endsection

@section('main-menu')
    @parent
@endsection

@section('main-content')
    @parent
@endsection

@if($ModalFeedback)
@section('modal-feedback')
    @parent
@endsection
@endif

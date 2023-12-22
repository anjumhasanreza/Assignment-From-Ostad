@extends('frontend.layouts.app')

@section('content')

<div id="colorlib-main">
    @include('frontend.components.index')
    @include('frontend.components.about')
    @include('frontend.components.project')
    @include('frontend.components.skill')
    @include('frontend.components.education')
    @include('frontend.components.experience')
    @include('frontend.components.work')
    @include('frontend.components.certificate')
    @include('frontend.components.contact')

</div>

@endsection 
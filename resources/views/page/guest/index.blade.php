@extends('layouts.guest')


@section('content')
    @include('page.guest._index.hero')
    @include('page.guest._index.about')
    @include('page.guest._index.service')
    @include('page.guest._index.gallery')
    @include('page.guest._index.buy')
    @include('page.guest._index.client')
    @include('page.guest._index.map')
    @include('page.guest._index.info')
@endsection

@extends('admin.layout')
@section('title', 'Thêm Tour')

@section('content')
<h2>Thêm Tour mới</h2>
<form action="{{ route('admin.tours.store') }}" method="POST">
    @include('admin.tours.form')
</form>
@endsection

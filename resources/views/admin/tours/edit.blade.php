@extends('admin.layout')
@section('title', 'Chỉnh sửa Tour')

@section('content')
<h2>Chỉnh sửa Tour</h2>
<form action="{{ route('admin.tours.update', $tour->tour_ID) }}" method="POST">
    @method('PUT')
    @include('admin.tours.form')
</form>
@endsection

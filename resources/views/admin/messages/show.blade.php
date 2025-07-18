@extends('admin.layout')

@section('content')
    <h2>Chi tiết tin nhắn</h2>

    <div class="card p-4">
        <p><strong>Tên:</strong> {{ $message->name }}</p>
        <p><strong>Email:</strong> {{ $message->email }}</p>
        <p><strong>Số điện thoại:</strong> {{ $message->phone }}</p>
        <p><strong>Thời gian gửi:</strong> {{ $message->created_at->format('d/m/Y H:i') }}</p>
        <hr>
        <p><strong>Nội dung:</strong></p>
        <p>{{ $message->message }}</p>
    </div>

    <a href="{{ route('admin.messages.index') }}" class="btn btn-secondary mt-3">⬅ Quay lại danh sách</a>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Giỏ hàng của bạn</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <form method="POST" action="{{ route('cart.update') }}">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Tên Tour</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Ngày đi</th>
                        <th>Tổng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ number_format($item['price']) }} đ</td>
                            <td>
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control" form="update-form-{{ $id }}">
                            </td>
                            <td>
                                <input type="date" name="date" value="{{ $item['date'] }}" class="form-control" form="update-form-{{ $id }}">
                            </td>
                            <td>{{ number_format($item['price'] * $item['quantity']) }} đ</td>
                            <td class="d-flex gap-1">
                                <form id="update-form-{{ $id }}" method="POST" action="{{ route('cart.update') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <button class="btn btn-sm btn-primary">Cập nhật</button>
                                </form>
                                <a href="{{ route('cart.remove', $id) }}" class="btn btn-sm btn-danger">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    @else
        <p>Chưa có tour nào trong giỏ hàng.</p>
    @endif
</div>
@endsection

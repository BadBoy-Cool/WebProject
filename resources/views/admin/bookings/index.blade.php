@extends('admin.layout')

@section('title', 'Quản lý Booking')

@section('content')
<div class="container mt-4">
    <h2>Quản lý Booking</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Mã Booking</th>
                <th>Tên Tour</th>
                <th>Khách hàng</th>
                <th>Phương thức thanh toán</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->tour->tour_name}}</td>
                <td>{{ $booking->customer_name}}</td>
                <td>{{ strtoupper($booking->payment_method) }}</td>
                <td>
                    @if($booking->status == 'pending')
                        <span class="badge bg-warning">Chờ xử lý</span>
                    @elseif($booking->status == 'paid')
                        <span class="badge bg-success">Đã thanh toán</span>
                    @else
                        <span class="badge bg-secondary">{{ ucfirst($booking->status) }}</span>
                    @endif
                </td>
                <td>
                    @if($booking->payment_method == 'cod' && $booking->status == 'pending')
                        <form action="{{ route('admin.bookings.confirm', $booking->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-sm btn-primary" onclick="return confirm('Xác nhận thanh toán COD?')">Xác nhận</button>
                        </form>
                    @endif
                    <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa booking này?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $bookings->links() }}
</div>
@endsection

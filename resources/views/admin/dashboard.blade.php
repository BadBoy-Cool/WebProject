    @extends('admin.layout')

    @section('content')
        <h2>Chào mừng đến trang quản trị Travio!</h2>

        <div class="row m-t-md">
            <div class="col-lg-3">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Tổng số Tour</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $tourCount }}</h1>
                        <small>Tour đang hoạt động</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Tổng số Booking</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{ $bookingCount }}</h1>
                        <small>Đơn đặt tour</small>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="m-t-lg">Danh sách Booking mới nhất</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Khách</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Người lớn</th>
                    <th>Trẻ em</th>
                    <th>Tổng giá</th>
                    <th>Ngày đặt</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latestBookings as $booking)
                    <tr>
                        <td>{{ $booking->customer_name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->soNguoiLon }}</td>
                        <td>{{ $booking->soEmBe }}</td>
                        <td>{{ number_format($booking->tongGia) }} $</td>
                        <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="{{ route('index') }}" class="btn btn-secondary mb-3">
            &larr; Trang chủ
        </a>
        <h2 class="mb-4">Tour đã đặt</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($bookings->isEmpty())
            <p>Bạn chưa đặt tour nào.</p>
        @else
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>Tên Tour</th>
                        <th>Ngày đặt</th>
                        <th>Người lớn</th>
                        <th>Trẻ em</th>
                        <th>Tổng giá</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr class="text-center">
                            {{-- Ảnh --}}
                            {{-- <td>
                    @if ($booking->tour && $booking->tour->image)
                        <img src="{{ asset('storage/' . $booking->tour->image) }}" width="100" height="70" style="object-fit: cover;" alt="Tour image">
                    @else
                        <span class="text-muted">Không có ảnh</span>
                    @endif
                </td> --}}

                            {{-- Tên tour --}}
                            <td class="text-start">
                                {{ $booking->tour->tour_name ?? 'Không có tên' }}
                            </td>

                            {{-- Ngày đặt --}}
                            <td>{{ $booking->thoiGianDat ? \Carbon\Carbon::parse($booking->thoiGianDat)->format('d/m/Y') : '-' }}
                            </td>

                            {{-- Người lớn --}}
                            <td>{{ $booking->soNguoiLon }}</td>

                            {{-- Trẻ em --}}
                            <td>{{ $booking->soEmBe }}</td>

                            {{-- Giá --}}
                            <td class="text-end">{{ number_format($booking->tongGia, 0, ',', '.') }}$</td>

                            {{-- Trạng thái --}}
                            <td>
                                <span class="badge bg-warning text-dark">{{ ucfirst($booking->status) }}</span>
                            </td>

                            {{-- Hành động --}}
                            <td>
                                {{-- <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-outline-primary mb-1">Sửa</a> --}}
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Bạn có chắc muốn huỷ tour này?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Huỷ</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

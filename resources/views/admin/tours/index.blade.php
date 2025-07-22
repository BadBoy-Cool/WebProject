@extends('admin.layout')
@section('title', 'Quản lý Tour')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Quản lý Tour</h2>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Mã Tour</th>
            <th>Tên Tour</th>
            <th>Giá người lớn</th>
            <th>Giá trẻ em</th>
            <th>Thời gian</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tours as $tour)
            @php
                // Lấy khóa chính: nếu tồn tại tour_ID thì dùng, nếu không thì dùng id
                $primaryKey = $tour->tour_ID ?? $tour->id;
            @endphp

            <tr>
                <td>{{ $tour->tour_ID ?? $tour->id }}</td>
                <td>{{ $tour->tour_name }}</td>
                <td>{{ number_format($tour->giaLon) }} $</td>
                <td>{{ number_format($tour->giaEmBe) }} $</td>
                <td>{{ $tour->songay }}</td>
                <td>{{ $tour->soluong }}</td>
                <td>
                    {{-- Xem chi tiết tour --}}
                    <a href="{{ route('admin.tours.show', ['id' => $primaryKey]) }}" class="btn btn-info btn-sm">
                        Xem
                    </a>

                    {{-- Xóa tour --}}
                    <form action="{{ route('admin.tours.destroy', ['id' => $primaryKey]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Xóa tour này?')">
                            Xóa
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('admin.tours.create') }}" class="btn btn-primary">
            Thêm Tour
        </a>
    </div>

</table>

{{-- Phân trang --}}
<div class="mt-3">
    {{ $tours->links() }}
</div>
@endsection

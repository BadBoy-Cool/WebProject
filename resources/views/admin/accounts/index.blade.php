@extends('admin.layout')

@section('title', 'Quản lý tài khoản')

@section('content')
    <div class="wrapper wrapper-content">
        <h2 class="mb-4">Quản lý tài khoản</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Giới tính</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $acc)
                    <tr>
                        <td>{{ $acc->id }}</td>
                        <td>{{ $acc->KH_name }}</td>
                        <td>{{ $acc->username }}</td>
                        <td>{{ $acc->email }}</td>
                        <td>{{ $acc->sdt }}</td>
                        <td>{{ $acc->diachi }}</td>
                        <td>
                            {{ $acc->KH_gioitinh == 1 ? 'Nam' : 'Nữ' }}
                        </td>
                        <td>{{ $acc->created_at }}</td>
                        <td>{{ $acc->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $accounts->links() }}
    </div>
@endsection

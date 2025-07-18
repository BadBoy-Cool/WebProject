@extends('admin.layout')

@section('content')
    <h2>📩 Danh sách tin nhắn khách hàng</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Ngày gửi</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $msg)
                <tr>
                    <td>{{ $msg->name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->phone }}</td>
                    <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.messages.show', $msg->id) }}" class="btn btn-info btn-sm">Xem</a>
                        <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Xóa tin nhắn này?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $messages->links() }}
@endsection

@csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mb-3">
        <label for="tour_ID" class="form-label">Mã Tour</label>
        <input type="text" name="tour_ID" class="form-control" value="{{ old('tour_ID', $tour->tour_ID ?? '') }}">
    </div>
    <div class="form-group">
        <label for="tour_name">Tên Tour</label>
        <input type="text" name="tour_name" class="form-control" value="{{ old('tour_name', $tour->tour_name ?? '') }}" required>
    </div>
    <div class="form-group">
        <label for="title">Tiêu đề</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $tour->title ?? '') }}">
    </div>
    <div class="form-group">
        <label for="songay">Thời gian</label>
        <input type="text" name="songay" class="form-control" value="{{ old('songay', $tour->songay ?? '') }}">
    </div>
    <div class="form-group">
        <label for="soluong">Số lượng</label>
        <input type="number" name="soluong" class="form-control" value="{{ old('soluong', $tour->soluong ?? '') }}">
    </div>
    <div class="form-group">
        <label for="giaLon">Giá người lớn</label>
        <input type="number" name="giaLon" class="form-control" value="{{ old('giaLon', $tour->giaLon ?? '') }}">
    </div>
    <div class="form-group">
        <label for="giaEmBe">Giá trẻ em</label>
        <input type="number" name="giaEmBe" class="form-control" value="{{ old('giaEmBe', $tour->giaEmBe ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Lưu</button>

<x-admin-layout>
    <div class="container">
        <h1>ルームの一覧ビュー</h1>
        <a href="{{ url('/admin/rooms/create') }}" class="btn btn-primary mb-3">Create Room</a>
        <ul class="list-group">
            @foreach($rooms as $room)
            <li class="list-group-item">
                <a href="{{ url('admin/rooms/' . $room->id) }}">{{ $room->name }}</a>
                <!-- 招待ボタンを追加 -->
                <a href="{{ url('admin/rooms/' . $room->id . '/invite') }}" class="btn btn-primary ml-3">招待</a>
            </li>
            @endforeach
        </ul>
    </div>
</x-admin-layout>

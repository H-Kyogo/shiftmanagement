<x-admin-layout>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul class="list-group">
                        <h1 class="text-blue-600">---ルーム一覧---</h1>
                        
                        <br>
                        
                        @foreach($rooms as $room)
                        <li class="list-group-item">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                 <div class="p-6 text-gray-900">
                                    <a class="text-blue-600", href="{{ url('admin/rooms/' . $room->id) }}">{{ $room->name }}</a>
                                    
                                    <!-- 招待ボタンを追加 -->
                                    <a class="text-blue-600", href="{{ url('admin/rooms/' . $room->id . '/invite') }}" class="btn btn-primary ml-3">---招待---</a>
                                 </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <br>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="text-blue-600", href="{{ url('/admin/rooms/create') }}" class="btn btn-primary mb-3">---新規ルーム作成---</a>
                </div>
             </div>
        </div>
        
        <br>
        
    </div>
</x-admin-layout>

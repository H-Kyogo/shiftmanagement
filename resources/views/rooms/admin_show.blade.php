<x-admin-layout>
    <div class="Members">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <h1>{{ $room->name }}</h1>
                    
                </div>
            </div>
        </div>
        
        <br>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <p>{{ $room->description }}</p>
                        <h2>---Members---</h2>
                        <ul class="list-group">
                            @foreach($room->users as $user)
                            <li class="list-group-item">{{ $user->name }}</li>
                            @endforeach
                        </ul>
                        <h2>---------------------</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    
    <div class="informations">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a>---お知らせ一覧---</a>
                    @foreach($room->posts as $post)
                    <br>
                    <a href="/admin/posts/{{ $post->id }}">{{ $post->title }}</a>
                    @endforeach
                    <h2>---------------------</h2>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    
    <div class="newinformations">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ url('admin/rooms/' . $room->id . '/information/create')}}">---新たなお知らせを作成する---</a>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    
    <div class="back">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ url('admin/rooms/index')}}">---戻る---</a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
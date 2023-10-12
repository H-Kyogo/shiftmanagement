<x-admin-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                
                <div class="Members">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                
                                <a>---</a>
                                <a class="text-black">{{ $room->name }}</a>
                                <a>---</a>
                                
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <div class="container">
                                    <p>{{ $room->description }}</p>
                                    <h2 class="text-black">---Members---</h2>
                                    <ul class="list-group">
                                        @foreach($room->users as $user)
                                        <li class="list-group-item">{{ $user->name }}</li>
                                        @endforeach
                                    </ul>
                                    <h2 class="text-black">---------------------</h2>
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
                                <a class="text-black">---お知らせ一覧---</a>
                                @foreach($room->posts as $post)
                                <br>
                                <a class="text-blue-600", href="/admin/posts/{{ $post->id }}">{{ $post->title }}</a>
                                @endforeach
                                <h2 class="text-black">---------------------</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                
                <div class="newinformations">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <a class="text-black">---</a>
                                <a class="text-blue-600", href="{{ url('admin/rooms/' . $room->id . '/information/create')}}">新たなお知らせを作成する</a>
                                <a class="text-back">---</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                
                <div class="back">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <a class="text-black">---</a>
                                <a class="text-blue-600" href="{{ url('admin/rooms/index')}}">戻る</a>
                                <a class="text-black">---</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
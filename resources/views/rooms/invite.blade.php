<x-admin-layout>
    <div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                
                                <a>---</a>
                                <a>{{ $room->name }} ルームにユーザーを招待します</a>
                                <a>---</a>
                                
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="container">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                                @endif
                                
                            <form action={{ "/admin/rooms/".$room->id."/invite" }} method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="user_id">ユーザーを選択してください:</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        @foreach($users as $user)
                                            @if (!in_array($user->id, $alreadyInvited))
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                
                                <br>
                                
                                <a>---</a>
                                <button class="text-blue-600", type="submit" class="btn btn-primary">招待する</button>
                                <a>---</a>
                                
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            
                            <a>---</a>
                            <a class="text-blue-600", href="{{ url('admin/rooms/index')}}">戻る</a>
                            <a>---</a>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
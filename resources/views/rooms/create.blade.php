<x-admin-layout>
    <div class="container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <h1>---ルームの作成---</h1>
                   <br>
                   
                   <form action="{{ route('admin.rooms.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Room Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">---ルームを作成する---</button>
                    </form>
                   
                </div>
            </div>
        </div>
        
        <br>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <a href="{{ url('admin/rooms/index')}}">---戻る---</a>
                    
                </div>
            </div>
        </div>
        
    </div>
</x-admin-layout>
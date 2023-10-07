<x-admin-layout>
    <div class="container">
        <h1>Create Room　ルームの作成</h1>
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
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</x-admin-layout>
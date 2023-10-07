<x-admin-layout>
    <div class="container">
        <h1>{{ $room->name }}へのユーザー招待</h1>
    
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
                <label for="user_id">ユーザーを選択:</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        @if (!in_array($user->id, $alreadyInvited))
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">招待</button>
        </form>
    </div>
</x-admin-layout>
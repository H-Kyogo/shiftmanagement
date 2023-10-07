<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    @foreach($rooms as $room)
                        <div class="mt-4">
                            <p>Room Name: {{ $room->name }}</p>
                            <p>Invite Code: {{ $room->invite_code }}</p>
                        </div>
                    @endforeach
                    
                    {{session('success')}}
                    
                    {{session('error')}}
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('rooms.joinByInvite') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="invite_code">招待コード:</label>
                            <input type="text" name="invite_code" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">ルームに参加</button>
                    </form>
                </div>
            </div>
        </div>
        @foreach($errors as $error)
        {{ $error }}
        @endforeach
    </div>
    
    <div>
         <a href="{{ url('/rooms/' . $room->id) }}">{{ $room->name }}</a>
    </div>
    
</x-app-layout>

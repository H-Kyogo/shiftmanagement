<x-app-layout>
    <div class="container">
        <h1>{{ $room->name }}</h1>
        <p>{{ $room->description }}</p>
    
        <h3>Members</h3>
        <ul class="list-group">
            @foreach($room->users as $user)
            <li class="list-group-item">{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
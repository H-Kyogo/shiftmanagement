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
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                
                <h1>---参加しているルーム---</h1>
                <br>
                
                @foreach($rooms as $room)
                    <br>
                    <a href="{{ url('/rooms/' . $room->id) }}">{{ $room->name }}</a>
                    <br>
                @endforeach
            </div>
        </div>
        
        <br>
        <br>
        
    </div>
    
</x-app-layout>

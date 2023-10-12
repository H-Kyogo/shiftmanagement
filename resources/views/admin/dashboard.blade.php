<x-admin-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Dashboard') }}
                        </h2>
                    </x-slot>
                
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    {{ __("---ログインしました！---") }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="room">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <a>---</a>
                                    <a class="text-blue-600", href="{{ url('admin/rooms/index')}}">ルーム一覧</a>
                                    <a>---</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <br>
                    
                </div>
            </div>
        </div>
</x-admin-layout>
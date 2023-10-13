<x-admin--layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="create information">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                
                                <h1>---シフトを投稿する---</h1>
                                <br>
                                             
                                <form action={{"/admin/shifts/".$room_id}} method="POST">
                                    @csrf
                                    <div class="title">
                                        <h2>---日付---</h2>
                                        <input type="text" name="shift[title]" placeholder="日付"/>
                                    </div>
                                    
                                    <br>
                                    
                                    <div class="body">
                                        <h2>---メンバー/時間---</h2>
                                        <textarea name="shift[body]" placeholder="メンバー/時間"></textarea>
                                    </div>
                                    
                                    <input type="hidden" name="shift[room_id]"  value={{$room_id}}>
                                    
                                    <br>
                                    
                                    <a>---</a>
                                    <input class="text-blue-600", type="submit" value="投稿する"/>
                                    <a>---</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <a>---</a>
                                <a class="text-blue-600", href="{{ url("/admin/rooms/".$room_id)}}">戻る</a>
                                <a>---</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin--layout>
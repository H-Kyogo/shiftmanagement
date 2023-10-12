<x-admin--layout>
    <div class="create information">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <h1>---お知らせを投稿する---</h1>
                    <br>
                     
                    <form action={{"/admin/posts/".$room_id}} method="POST">
                        @csrf
                        <div class="title">
                            <h2>---タイトル---</h2>
                            <input type="text" name="post[title]" placeholder="タイトル"/>
                        </div>
                        
                        <br>
                        
                        <div class="body">
                            <h2>---本文---</h2>
                            <textarea name="post[body]" placeholder="ここに本文を書いてください"></textarea>
                        </div>
                        
                        <input type="hidden" name="post[room_id]"  value={{$room_id}}>
                        
                        <br>
                        
                        <input type="submit" value="---投稿する---"/>
                    </form>
                </div>
            </div>
        </div>
        
        <br>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ url("/admin/rooms/".$room_id)}}">---戻る---</a>
                </div>
            </div>
        </div>
        
    </div>
</x-admin--layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Mutter
        </h2>
    </x-slot>

    <div class=" w-3/5 m-auto mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    ホーム<br>
                    <hr class="mt-5 mb-5">
                    <a href="{{ route('posts.create') }}" class="block px-4 py-2 mx-auto mt-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 w-1/5 text-center">ポストする</a>
                    @foreach($posts as $post)
                    {{ $post->id }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class=" w-3/5 m-auto mt-3">
        {{-- foreachで投稿を表示 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    ようこそMutterの世界へ
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Mutter
        </h2>
    </x-slot>

    <div class=" w-3/5 m-auto mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100 font-bold">
                    Home<br>
                    <hr class="mt-5 mb-5">
                    <form action="{{ route('posts.index') }}" method="POST">
                      <a href="{{ route('posts.create') }}"
                          class="block px-4 py-2 mx-auto mt-3 font-bold  text-white bg-blue-500 rounded hover:bg-blue-700 w-1/5 text-center sm:w-1/9">ポストする</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=" w-3/5 m-auto mt-3 mb-5 h-max">
        {{-- foreachで投稿を表示 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($posts as $post)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="flex justify-between">
                            <p class="mb-3 font-bold">{{ $post->user_id }}</p>
                            <p>{{ $post->created_at }}</p>
                        </h2>
                        <div class="body_area flex justify-between">
                          <p> {{ $post->body }}
                          </p>
                          {{-- if文で自分の投稿に削除ボタンをつけるようにしたい --}}
                          @if (Auth::user()->name === $post->user_id)
                            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                              @csrf
                              <button type="submit" class="bg-pink-600 px-4 py-2 font-bold rounded sm:w-1/8">削除</button>
                          </form>
                          @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>

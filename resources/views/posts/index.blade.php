<x-layout>
    <div class="grid grid-cols-2 gap-12">
        @foreach ($posts as $post)
            <article>
                <div class="rounded shadow-lg h-full">
                    <img class="w-full" src="{{ $post->image }}" alt="{{ $post->title }}">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->title }}
                            </a>
                        </div>
                        <p class="text-gray-700 text-base">
                            {{ $post->subtitle }}
                        </p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-layout>

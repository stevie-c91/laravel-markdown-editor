<x-layout>
    <article>
        <img src="{{ $post->image }}" class="rounded-lg mb-10" alt="{{ $post->title }}">
        <div class="text-center mb-8 px-8">
            <h1 class="font-bold text-3xl">{{ $post->title }}</h1>
            <h2 class="pt-4 text-xl font-bold mb-5">{{ $post->subtitle }}</h2>
            <p>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</p>
        </div>
        <div class="prose lg:prose-l max-w-none mb-8">
            {!! \Illuminate\Support\Str::markdown($post->content) !!}
        </div>

        <div class="flex space-x-4">
            <a
                href="{{ route('posts.edit', $post) }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg"
            >
                Edit post
            </a>

            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg"
                >
                    Delete post
                </button>
            </form>
        </div>
    </article>
</x-layout>

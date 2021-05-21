<x-layout>
    <article class="">
        <img src="{{ $post->image }}" class="rounded-lg mb-10" alt="{{ $post->title }}">
        <div class="text-center mb-8 px-8">
            <h1 class="font-bold text-3xl">{{ $post->title }}</h1>
            <h2 class="pt-4 text-xl font-bold mb-5">{{ $post->subtitle }}</h2>
            <p>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</p>
        </div>
        <div class="prose lg:prose-xl max-w-none">
            {{ $post->content }}
        </div>
    </article>
</x-layout>

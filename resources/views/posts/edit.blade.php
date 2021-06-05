<x-layout>
    <form
        method="POST"
        action="{{ route('posts.update', $post) }}"
        id="editPostForm"
        class="flex flex-col space-y-6"
    >
        @csrf
        @method('PUT')

        @if ($errors->any())
            <ul class="list-disc list-inside space-y-2">
                @foreach ($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="flex flex-col space-y-2">
            <label for="title" class="text-gray-600 font-semibold">Title</label>
            <input
                type="text"
                name="title"
                id="title"
                placeholder="Title"
                value="{{ $post->title }}"
                required
                class="focus:ring-indigo-500 focus:border-indigo-500 p-2 border border-gray-300 rounded-md"
            >
        </div>

        <div class="flex flex-col space-y-2">
            <label for="subtitle" class="text-gray-600 font-semibold">Subtitle</label>
            <input
                type="text"
                name="subtitle"
                id="subtitle"
                placeholder="Subtitle"
                value="{{ $post->subtitle }}"
                required
                class="focus:ring-indigo-500 focus:border-indigo-500 p-2 border border-gray-300 rounded-md"
            >
        </div>

        <div class="flex flex-col space-y-2">
            <label for="editor" class="text-gray-600 font-semibold">Content</label>
            <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
        </div>

        <div class="flex flex-col space-y-2">
            <label for="image" class="text-gray-600 font-semibold">Image (URL)</label>
            <input
                type="url"
                name="image"
                id="image"
                placeholder="Image (URL)"
                value="{{ $post->image }}"
                required
                class="focus:ring-indigo-500 focus:border-indigo-500 p-2 border border-gray-300 rounded-md"
            >
        </div>

        <input type="hidden" id="oldContent" value="{{ $post->content }}">
        <input type="hidden" name="content" id="content">

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-40">
            Update post
        </button>
    </form>
</x-layout>

<x-layout>
    <form method="POST" action="{{ route('posts.store') }}" class="flex flex-col space-y-6">
        @csrf

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
                value="{{ old('title') }}"
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
                value="{{ old('subtitle') }}"
                required
                class="focus:ring-indigo-500 focus:border-indigo-500 p-2 border border-gray-300 rounded-md"
            >
        </div>

        <div class="flex flex-col space-y-2">
            <label for="content" class="text-gray-600 font-semibold">Content</label>
            <textarea
                name="content"
                id="content"
                placeholder="Content"
                rows="6"
                required
                class="focus:ring-indigo-500 focus:border-indigo-500 p-2 border border-gray-300 rounded-md"
            >{{ old('content') }}</textarea>
        </div>

        <div class="flex flex-col space-y-2">
            <label for="image" class="text-gray-600 font-semibold">Image (URL)</label>
            <input
                type="url"
                name="image"
                id="image"
                placeholder="Image (URL)"
                value="{{ old('image') }}"
                required
                class="focus:ring-indigo-500 focus:border-indigo-500 p-2 border border-gray-300 rounded-md"
            >
        </div>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-40">
            Create post
        </button>
    </form>
</x-layout>

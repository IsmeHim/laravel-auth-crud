<x-layouts.app :title="__('Admin Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative mb-6 w-full">
            <flux:heading size="xl" level="1">{{ __('All posts') }}</flux:heading>
            <flux:subheading size="lg" class="mb-6">{{ __('Manage your post Skibidi toilet here') }}</flux:subheading>
            <flux:separator variant="subtle" />
        </div>

        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                    <svg class="fill-current h-6 w-6 bg-gray-500 hover:bg-gray-600 rounded px-1 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
                    </svg>
                </span>
            </div>
        @endif

        <h1 class="text-green-500 text-2xl">Hello admin</h1>
        <div>
            <a href="{{ route('admin.post.create') }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-10 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                Create New Post
            </a>
        </div>
        @if ($posts->count())
        <div class="flex flex-wrap gap-5">
            @foreach ($posts as $post)
            <div class="bg-white text-black dark:bg-gray-400 rounded-2xl mt-3 p-6 max-w-96  w-full">
                <h1 class="text-2xl font-semibold">{{ $post->title }}</h1>
                <p>{{ Str::limit($post->content, 30) }}</p>
                <div class="mt-4 flex flex-row gap-2">
                    <a href="{{ route('admin.post.view', $post) }}" class="inline-block basis-3xs bg-blue-500 hover:bg-blue-600 text-center rounded-xl py-1 shadow-lg hover:shadow-xl transition duration-300">
                        View
                    </a>
                    <a href="{{ route('admin.post.edit', $post) }}" class="inline-block basis-3xs bg-amber-400 hover:bg-amber-500 text-center rounded-xl py-1 shadow-lg hover:shadow-xl transition duration-300">
                        Edit
                    </a>

                    <form action="{{ route('admin.post.delete', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block basis-3xs bg-red-400 hover:bg-red-600 text-center rounded-xl py-1 px-6 shadow-lg hover:shadow-xl transition duration-300">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="flex justify-between items-center mt-4">
            {{ $posts->links() }}
        </div><!-- แสดง pagination -->
        @else
            <h1 class="text-white">Post dose not exist</h1>
        @endif
    </div>
</x-layouts.app>

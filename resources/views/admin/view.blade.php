<x-layouts.app :title="__('Admin Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative mb-6 w-full">
            <flux:heading size="xl" level="1">{{ __('View posts') }}</flux:heading>
            <flux:subheading size="lg" class="mb-6">{{ __('View your post Skibidi toilet here') }}</flux:subheading>
            <flux:separator variant="subtle" />
        </div>

        <h1 class="text-green-500 text-2xl">Hello admin</h1>
        <div>
            <a href="{{ route('admin.post.create') }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-10 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                Create New Post
            </a>
            <a href="{{ route('admin.post.index') }}" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">
                Back
            </a>
        </div>
        <div class="flex flex-wrap gap-5">
            <div class="bg-white text-black dark:bg-gray-400 rounded-2xl mt-3 p-6 max-w-96  w-full">
                <h1 class="text-2xl font-semibold">{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
</x-layouts.app>

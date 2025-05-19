<x-layouts.app :title="__('Admin Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative mb-6 w-full">
            <flux:heading size="xl" level="1">{{ __('Add posts') }}</flux:heading>
            <flux:subheading size="lg" class="mb-6">{{ __('Add your post Skibidi toilet here') }}</flux:subheading>
            <flux:separator variant="subtle" />
        </div>

        <h1 class="text-green-500 text-2xl">Add post</h1>
        <!-- ฟอร์ม Create Post -->
        <form action="{{ route('admin.post.store') }}" method="POST" class="bg-white dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title"
                    class="shadow appearance-none border dark:border-pink-400 rounded w-full py-2 px-3 text-gray-700 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter post title">
            </div>

            <!-- Content -->
            <div class="mb-6">
                <label for="content" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Content:</label>
                <textarea name="content" id="content" rows="5"
                        class="shadow appearance-none border dark:border-pink-400 rounded w-full py-2 px-3 text-gray-700 dark:text-white leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter post content"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Add post
                </button>
            </div>
        </form>
</x-layouts.app>

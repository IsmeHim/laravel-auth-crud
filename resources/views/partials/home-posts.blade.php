    <section id="posts" class="max-w-6xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-semibold text-center text-indigo-700 mb-8">เนื้อหาหลักของเว็บไซต์</h2>
        <div class="text-gray-600 text-center mb-4">
        <p>คุณสามารถใส่รายละเอียดต่างๆ ของเว็บไซต์ในส่วนนี้ เช่น บริการ, ภาพแกลเลอรี่, บล็อก หรือโปรเจกต์ของคุณ</p>
        </div>

        <div class="grid grid-cols-3 gap-7">
            @foreach ($posts as $post)
                <div class="bg-gray-500 p-5 rounded-2xl shadow-2xl hover:shadow-gray-700 transition max-h-48 min-h-24 overflow-y-auto">
                    <h1 class="text-center text-2xl font-bold mb-2 text-green-500">{{ Str::limit($post->title, 10) }}</h1>
                    <p class="text-red-200 text-sm">โพสต์เมื่อ {{$post->created_at}}</p>
                    <p class="break-words text-white">{{ $post->content }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center mx-auto mt-2">
            <a href="" class="text-blue-500 hover:text-blue-600 hover:underline">See more</a>
        </div>
    </section>

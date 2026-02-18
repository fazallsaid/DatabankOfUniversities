@include('partials.head')
    <main class="container mx-auto px-6 py-12 flex-grow">
        <section class="flex flex-col items-center justify-center h-full">
            <img src="{{asset('images/icons/dou_vert.png')}}" class="w-[22rem] pb-[2rem] pt-[2rem]" />
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Databank of Universities</h1>
            <p class="text-xl text-gray-600 mb-8">Get all the information you need about all universities of Indonesia.</p>
            <div class="flex space-x-4 mb-8">
                <a href="{{url('docs')}}" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition duration-300">Get Started</a>
            </div>
        </section>
    </main>
@include('partials.foot')

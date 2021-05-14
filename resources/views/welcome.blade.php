<x-app-layout>

    <section class="bg-cover" style="background-image: url({{ asset('img/home/student.jpg') }})";>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">

                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Coders Free</h1>
                <p class="text-white text-lg mt-2 mb-4">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web</p>

                <!-- component -->
            <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">Buscar</button>
                </div>
            </div>
                
        </div>
    </section>
    <section class="mt-24">

        <h1 class=" text-gray-600 text-center text-3xl mb-6">Contenido</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nihil voluptates sapiente, soluta.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{asset('img/home/2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Manuela de laravel</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nihil voluptates sapiente, soluta.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{asset('img/home/3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nihil voluptates sapiente, soluta.</p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-60 w-full object-cover" src="{{asset('img/home/4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo web</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nihil voluptates sapiente, soluta.</p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl"> No sabes que curso llevar</h1>
        <p class="text-center text-white">Dirigete al catalogo de cursos y filtralos por modulos</p>
        <div class="flex justify-center mt-4">
            <a href=" {{route('course.index')}} " type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Catálogo de cursos</a>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-center text-gray-600 text-3xl"> Últimos Cursos </h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajamos duro para seguir mejorando</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-4 gap-y-6 gap-x-8">
            @foreach ($courses as $course)
                <article>
                    <img src="{{Storage::url($course->image->url)}}" alt=""

                    <div class="px-6 py-4">
                        <h1 class=""> {{$course->title}} </h1>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-app-layout>

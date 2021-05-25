<div>
    <div class="bg-grey-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-grey-700 mr-4">
                <i class="fas fa-archway text-xs mr-2"></i> Todos los cursos
            </button>

            <!-- Dropdown categorias-->
            <div class="relative" x-data="{ open: false }">
                <button class="bg-white shadow h-12 text-grey-700 mr-4 px-4 rounded-lg overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Categoria
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    <a href="#"
                        class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr>
                        </hr>
                    </div>
                    <a href="#"
                        class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white">
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown niveles-->
            <div class="relative" x-data="{ open: false }">
                <button class="bg-white shadow h-12 text-grey-700 px-4 rounded-lg overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    niveles
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    <a href="#"
                        class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr>
                        </hr>
                    </div>
                    <a href="#"
                        class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white">
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-6 gap-x-8">
        @foreach ($courses as $course)
            <article class="bg-white shadow-lg rounded overflow-hidden">
                <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                
                <div class="px-6 py-4">
                    <h1 class="text-xl text-gray-700 mb-2 leading-6"> {{Str::limit($course->title, 40)}} </h1>
                    <h1 class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</h1>
                    <div class="flex">
                        <ul class="flex text-sm">
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 1 ?'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 2 ?'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 3 ?'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating >= 4 ?'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1">
                                <i class="fas fa-star text-{{$course->rating == 5 ?'yellow' : 'gray'}}-400"></i>
                            </li>
                        </ul>
                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->studens_count}})
                        </p>
                    </div>
                    <div class="flex justify-center mt-4">
                        <a href=" {{route('courses.show', $course)}} " type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-full mt-2 rounded">Más Información</a>
                </div>
            </article>
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$courses->links()}}
    </div>
</div>

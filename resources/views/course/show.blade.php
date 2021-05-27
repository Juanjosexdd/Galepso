<x-app-layout>
    <section class="bg-blue-800 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{$course->title}}</h1>
                <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
                <p class="mb-2"> <i class="fas fa-chart-line"></i> Nivel: {{$course->level->name}}</p>
                <p class="mb-2"> <i class="fas fa-users"></i> Modulo: {{$course->category->name}}</p>
                <p class="mb-2"> <i class="far fa-star"></i> Matriculado:{{$course->students_count}}</p>
                <p>Calificación: {{$course->rating}}</p>
            </div>
        </div>
    </section>
    <div class="container grid grid-cols-3">
        <div class="col-span-2">
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-xl mb-2">Lo que aprenderas</h1>
                    <ul class="grid grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                            <li class="text-glay-700 text-base"> <i class="fas fa-check text-gray-600 mr-2"></i> {{$goal->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
            <section>
                <h1 class="font-bold text-3xl mb-2">Temario</h1>
                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow">
                        <header class="border border-grey-200 px-4 py-2 cursor-pointer bg-grey-200">
                            <h1 class="font-bold text-lg text-grey-600">{{$section->name}}</h1>
                        </header>
                        <div class="bg-white py-2 px-4">
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li>{{$lesson->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </section>
        </div>
        <div>

        </div>
    </div>
</x-app-layout>
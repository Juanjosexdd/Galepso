<x-app-layout>

    <section class="bg-cover" style="background-image: url({{ asset('img/home/student.jpg') }})";>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">

                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Coders Free</h1>
                <p class="text-white text-lg mt-2 mb-4">En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollador web</p>

                <!-- component -->
            <!-- This is an example component -->
                @livewire('search')
            </div>
                
        </div>
    </section>
    @livewire('course-index')

    
</x-app-layout>
<div>
    <div class="bg-grey-200 py-4 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 focus:outline-none px-4 rounded-lg text-grey-700 mr-4" wire:click="resetfilters">
                <i class="fas fa-archway text-xs mr-2"></i> Todos los cursos
            </button>

            <!-- Dropdown categorias-->
            <div class="relative" x-data="{ open: false }">
                <button class="bg-white shadow h-12 text-grey-700 mr-4 px-4 rounded-lg overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Modulos
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach ($categories as $categorie )
                        <a  class="transition-colors cursor-pointer duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white" wire:click="$set('category_id',{{$categorie->id}})" x-on:click="open = false"> {{$categorie->name}} </a>
                    @endforeach
                    
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown niveles-->
            <div class="relative" x-data="{ open: false }">
                <button class="bg-white  shadow h-12 text-grey-700 px-4 rounded-lg overflow-hidden focus:outline-none" x-on:click="open = true" >
                    <i class="fas fa-tags text-sm mr-2"></i>
                    niveles
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">
                    @foreach ($levels as $level )
                        <a class="transition-colors cursor-pointer duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-900 hover:text-white" wire:click="$set('level_id', {{$level->id}} )" x-on:click="open = false"> {{$level->name}} </a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-6 gap-x-8">
        @foreach ($courses as $course)
            <x-course-card :course="$course"/>
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-8">
        {{$courses->links()}}
    </div>
</div>

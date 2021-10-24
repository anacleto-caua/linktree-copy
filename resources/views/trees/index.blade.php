<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-2 inline-block">
                            Link Trees
                        </h2>

                        <a href="{{ route('trees.create') }}" class="bg-green-600 text-white p-2 rounded float-right">
                            New Tree
                        </a>
                    </div>

                    @forelse ($trees as $tree)
                        {{ $tree }}
                        {{-- need's to improve --}}
                    @empty
                        <p class="pb-4">
                            Here goes your LinkTrees, but at the moment you doesn't have any :(
                        </p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

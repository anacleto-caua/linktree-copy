<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-2">
                        Create Tree
                    </h2>


                    {!! Form::open() !!}
                    {!! Form::close() !!}


                    <form action="POST">
                        <input type="text">
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

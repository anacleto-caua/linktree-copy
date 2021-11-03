@extends('layouts.app')

@section('content')
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

                    {{--Trees list--}}
                    @forelse ($trees as $tree)
                        <div class="pb-3 mb-5 border-b border-gray-200">
                            <h2 class="text-xl">
                                {{ $tree->title }}                                
                                <a href="/{{ $tree->address }}" target="_blank">
                                    <span class="text-sm text-blue-600">
                                        /{{ $tree->address }}
                                    </span>
                                </a>
                            </h2>
                            <p>
                                {{ $tree->description }}
                            </p>
                            @if ($tree->links)
                                <ul>
                                    @forelse ($tree->links  as $link)
                                        <li class="inline-block bg-blue-500 hover:bg-blue-600 text-white p-1 px-2 rounded">
                                            <a href="{{ $link->link }}" target="_blank">
                                                {{ $link->name }}
                                            </a>
                                        </li>
                                    @empty
                                    
                                    @endforelse
                                </ul>
                            @endif
                        </div>
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
@endsection
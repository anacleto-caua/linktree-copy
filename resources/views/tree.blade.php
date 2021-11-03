@extends('layouts.guest')

@php
    $title = $tree->title
@endphp

@section('content')
    <div class="flex w-screen h-screen p-auto bg-gray-200">
        <main class="flex-item w-full lg:w-1/2 m-auto px-3 py-5 rounded shadow-lg bg-white">
            <h1 class="text-6xl">
                {{ $tree->title }}
            </h1>
            <p class="mb-5">
                {{ $tree->description }}
            </p>
            @forelse ($tree->links as $link)
                <a href="{{ $link->link }}" target="_blank">
                    <div class="bg-blue-500 hover:bg-blue-600 text-white py-3 my-4 rounded w-full">
                        <div class="block mx-auto w-min">
                            {{ $link->name }}
                        </div>
                    </div>
                </a>
            @empty
                <p class="text-red-600">
                    Unfortnelly we didin't find any Link here :(
                </p>
            @endforelse
        </main>
    </div>
@endsection
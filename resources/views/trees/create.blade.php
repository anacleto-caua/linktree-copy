@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-0 lg:px-8 md:w-full lg:w-4/5">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white p-6">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-2">
                    Create Tree
                </h2>

                {!! Form::open(['url' => route('trees.store'), 'method' => 'put']) !!}

                    <x-input atrib="title"/>

                    <x-input atrib="address"/>
                    <x-input atrib="desc" title="Description"/>

                    <!--links-->
                    <input id="hidden-ids" name="hidden-ids" type="hidden">
                    <div id="links-entry" class="w-full"></div>
                    <x-button.add id="add-link" class="w-full">
                        Add Link
                    </x-button.add>

                    <x-errors :errors="$errors"/>

                    <x-button.submit>
                        Submit
                    </x-button.submit>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/address-helper.js') }}"></script>
<script src="{{ asset('js/add-link.js') }}"></script>

@endsection

@extends('layouts.app')
@section('content')

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full ">
            <p style="font-size:16px" class="pt-3">
                <a href="/projects"> My Projects</a> / {{ $project->title }}
            </p>
            <a href="/projects/create" class="px-3 py-2 rounded-lg shadow" style="background:#47cdff;color:#fff;"> New Projects</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3">
                <div class="mb-8">
                    <h2 class="text-lg mb-3">Tasks</h2>
                    <div class="bg-white mb-3 rounded shadow  p-4">Lorem ipsum</div>
                    <div class="bg-white mb-3 rounded shadow  p-4">Lorem ipsum</div>
                    <div class="bg-white mb-3 rounded shadow  p-4">Lorem ipsum</div>
                    <div class="bg-white  rounded shadow  p-4">Lorem ipsum</div>
                </div>
                <div>
                    <h2 class="text-lg mb-3">General Notes</h2>
                    <textarea class="bg-white w-full  rounded shadow  p-4" style="height:200px">Lorem ipsum</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>


@endsection
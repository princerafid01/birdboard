@extends('layouts.app')
@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full ">
            <h2 style="font-size:16px" class="pt-3">My Projects</h2>
            <a href="/projects/create" class="px-3 py-2 rounded-lg shadow" style="background:#47cdff;color:#fff;"> New Projects</a>
        </div>
    </header>

    <div class="lg:flex lg:flex-wrap -mx-4">
    @forelse($projects as $project)
        <div class="lg:w-1/3 px-3 pb-3">
            @include('projects.card')
        </div>
        @empty
            <div>No projects yet!   </div>
    @endforelse
    </main>

@endsection
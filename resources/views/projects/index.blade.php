@extends('layouts.app')
@section('content')
    <div class="flex items-center mb-3">
        <a href="/projects/create"> New Projects</a>
    </div>

    <div class="flex">
    @forelse($projects as $project)
        <div class="bg-white mr-3 rounded shadow w-1/3 p-4" style="height:200px;">
            <h1 class="text-xl py-1"> {{ $project->title }}</h1>
            <div style="color:dimgrey">{{ str_limit($project->description,250 ) }}</div>
        </div>
        @empty
            <div>No projects yet!   </div>
    @endforelse
    </div>

</body>
</html>
@endsection
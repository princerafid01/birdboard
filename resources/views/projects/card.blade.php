<div class="bg-white  rounded shadow  p-4" style="height:200px;">
    <a href="{{ 'projects/'.$project->id }}">
        <h1 class="text-xl py-1 -ml-6 border-l-4 pl-3 mb-4" style="border-color:#47cdff;"> {{ $project->title }}</h1>
    </a>
    <div style="color:dimgrey">{{ str_limit($project->description,150) }}</div>
</div>
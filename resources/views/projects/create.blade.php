@extends('layouts.app')
@section('content')
<form action="/projects" method="POST">
@csrf
    <h1>Create a Project</h1>
    <div class="field">
        <label for="title">Title</label>
        <div class="control">
            <input type="text" name="title" class="input" placeholder="Title">
        </div>
    </div>

    <div class="field">
            <label for="description">Description</label>
            <div class="control">
                <textarea name="description" class="input" placeholder="Description"></textarea>
            </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit">Create Project</button>
            <a href="/projects">Cancel</a>
        </div>
    </div>
</form>
@endsection
<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Create Contacts</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Create New Movie</h2>
                        <div class="ml-auto">
                            <a href="{{route('movies.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('movies.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group">
                        <label for="movie-title">Title</label>
                        <input type="text" name="title" id="movie-title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-description">Description</label>
                        <textarea type="textarea" name="description" id="movie-description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="movie-release_date">Release Date</label>
                        <input type="date" name="release_date" id="movie-release_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-runtime">Runtime</label>
                        <input type="text" name="runtime" id="movie-runtime" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-rating">Rating</label>
                        <input type="text" name="rating" id="movie-rating" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-poster">Poster</label>
                        <input type="file" name="poster" id="movie-poster" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="movie-video">Video</label>
                        <input type="text" name="video" id="movie-video" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-tag">Tag</label>
                        <select name="tag_id" id="movie-tag" class="form-control form-control-lg">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="movie-genre">Genre</label>
                        <select name="genre_id[]" id="movie-genre" multiple="multiple" class="form-control form-control-lg" >
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="movie-actor">Actor</label>
                        <select name="actor_id[]" id="movie-actor" multiple="multiple" class="form-control form-control-lg">
                            @foreach($actors as $actor)
                                <option value="{{$actor->id}}">{{$actor->lastname}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="movie-producer">Producer</label>
                        <select name="producer_id" id="movie-producer" class="form-control form-control-lg">
                            @foreach($producers as $producer)
                                <option value="{{$producer->id}}">{{$producer->lastname}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" class="form-control">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

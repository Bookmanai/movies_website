<!doctype html>
<html lang="en">
<head>
    @include('head')

    <title>Edit Movies</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Edit Movie with ID {{$movie->id}}</h2>
                        <div class="ml-auto">
                            <a href="{{route('movies.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('movies.update', $movie->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="movie-title">Title</label>
                        <input type="text" name="title" value="{{$movie->title}}" id="movie-title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-description">Description</label>
                        <input type="textarea" name="description" value="{{$movie->description}}" id="movie-description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-release_date">Release Date</label>
                        <input type="date" name="release_date" value="{{$movie->release_date}}" id="movie-release_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-runtime">Runtime</label>
                        <input type="text" name="runtime" value="{{$movie->runtime}}" id="movie-runtime" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-rating">Rating</label>
                        <input type="text" name="rating" value="{{$movie->rating}}" id="movie-rating" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-poster">Poster</label>
                        <input type="image" name="poster" value="{{$movie->poster}}" id="movie-poster" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="movie-video">Video</label>
                        <input type="text" name="video" value="{{$movie->video}}" id="movie-video" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="movie-tag">Tag</label>
                        <select name="tag_id" id="movie-tag" class="form-control form-control-lg">
                            @foreach($tags as $tag)
                                @if($tag->id == $movie->tag->id)
                                    <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                                @else
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <label for="movie-genre">Genre</label>
                    @foreach($genres as $genre)
                        <div class="form-check">
                            <input type="checkbox" name="genres[]" value="{{$genre->id}}"
                                {{$movie->hasAnyGenre($genre->name)?'checked':''}}>
                            <label>{{$genre->name}}</label>
                        </div>
                    @endforeach
                    <br>

                    <label for="movie-genre">Actor</label>
                    @foreach($actors as $actor)
                        <div class="form-check">
                            <input type="checkbox" name="actors[]" value="{{$actor->id}}"
                                {{$movie->hasAnyActor($actor->lastname)?'checked':''}}>
                            <label>{{$actor->lastname}}</label>
                        </div>
                    @endforeach
                    <br>

                    <div class="form-group">
                        <label for="movie-producer">Producer</label>
                        <select name="producer_id" id="movie-producer" class="form-control form-control-lg">
                            @foreach($producers as $producer)
                                @if($producer->id == $movie->producer->id)
                                    <option value="{{$producer->id}}" selected>{{$producer->lastname}}</option>
                                @else
                                    <option value="{{$producer->id}}">{{$producer->lastname}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

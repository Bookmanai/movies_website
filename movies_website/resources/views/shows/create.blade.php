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
                        <h2>Create New show</h2>
                        <div class="ml-auto">
                            <a href="{{route('shows.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('shows.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="show-title">Title</label>
                        <input type="text" name="title" id="show-title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-description">Description</label>
                        <textarea type="textarea" name="description" id="show-description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="show-air_date">Air Date</label>
                        <input type="date" name="air_date" id="show-air_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-ending_date">Ending Date</label>
                        <input type="date" name="ending_date" id="show-ending_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-runtime">Runtime</label>
                        <input type="text" name="runtime" id="show-runtime" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-rating">Rating</label>
                        <input type="text" name="rating" id="show-rating" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-poster">Poster</label>
                        <input type="file" name="poster" id="show-poster" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="show-tag">Tag</label>
                        <select name="tag_id" id="show-tag" class="form-control form-control-lg">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="show-genre">Genre</label>
                        <select name="genre_id[]" id="show-genre" multiple="multiple" class="form-control form-control-lg">
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="show-actor">Actor</label>
                        <select name="actor_id[]" id="show-actor" multiple="multiple" class="form-control form-control-lg">
                            @foreach($actors as $actor)
                                <option value="{{$actor->id}}">{{$actor->lastname}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="show-producer">Producer</label>
                        <select name="producer_id" id="show-producer" class="form-control form-control-lg">
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

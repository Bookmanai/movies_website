<!doctype html>
<html lang="en">
<head>
    @include('head')
    <title>Edit shows</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-felx align-items-center">
                        <h2>Edit show with ID {{$show->id}}</h2>
                        <div class="ml-auto">
                            <a href="{{route('shows.index')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('shows.update', $show->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="show-title">Title</label>
                        <input type="text" name="title" value="{{$show->title}}" id="show-title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-description">Description</label>
                        <input type="text" name="description" value="{{$show->description}}" id="show-description" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-air_date">Air Date</label>
                        <input type="date" name="air_date" value="{{$show->air_date}}" id="show-air_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-ending_date">Ending Date</label>
                        <input type="date" name="ending_date" value="{{$show->ending_date}}"id="show-ending_date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-runtime">Runtime</label>
                        <input type="text" name="runtime" value="{{$show->runtime}}" id="show-runtime" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-rating">Rating</label>
                        <input type="text" name="rating" value="{{$show->rating}}" id="show-rating" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="show-poster">Poster</label>
                        <input type="image" name="poster" value="{{$show->poster}}" id="show-poster" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="show-tag">Tag</label>
                        <select name="tag_id" id="show-tag" class="form-control form-control-lg">
                            @foreach($tags as $tag)
                                @if($tag->id == $show->tag->id)
                                    <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                                @else
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="show-producer">Producer</label>
                        <select name="producer_id" id="show-producer" class="form-control form-control-lg">
                            @foreach($producers as $producer)
                                @if($producer->id == $show->producer->id)
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

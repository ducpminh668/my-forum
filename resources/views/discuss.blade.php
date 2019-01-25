@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header text-center">Create a new discussion</div>

                <div class="card-body">
                    <form action="{{route('discussions.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="chanel">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="chanel">Pick a channel</label>
                            <select name="channel_id" class="form-control" id="">
                                @foreach($channels as $channel)
                                    <option value="{{$channel->id}}">{{$channel->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Ask a question</label>
                            <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-succell pull-right" type="submit">Create disscusion</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection

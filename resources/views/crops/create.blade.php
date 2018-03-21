@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('crops.store') }}" method="post" class="form-group">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="crop_name" class="form-control" placeholder="Add Crop"/>
            </div>
            {{--<button type="submit" class="btn btn-primary">Add Image</button>--}}
        </form>

    </div>
@endsection

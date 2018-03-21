@extends('layouts.app')

<style>
    .card {
        cursor: pointer;
    }
</style>

@section('content')
    <div class="container">

        <ul class="list-group">
            <div class="row">
                @foreach($crops as $crop)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $crop->name }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Update this crop</a>
                        </div>
                    </div>
                    <br>
                </div>
                @endforeach
            </div>
        </ul>

    </div>
    <br>
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

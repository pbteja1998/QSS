@extends('layouts.app')
<style>
    .card {
        cursor: pointer;
    }
</style>
@section('content')

    <div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="card" onclick="window.location='{{ route('crops.index') }}'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card" href={{ route('crops.index') }} >
                    <div class="card-body">
                        <h5 class="card-title">SHOW CROPS</h5>
                        <p class="card-text">Click on this card to show all crops</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
                <div class="card" onclick="window.location='{{ route('crops.create') }}'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">ADD CROP</h5>
                        <p class="card-text">Click on this card to add a crop</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
                <div class="card" onclick="window.location='#'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">SHOW SYMPTOMS</h5>
                        <p class="card-text">Click on this card to show all symptoms</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
                <div class="card" onclick="window.location='#'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">ADD A SYMPTOM</h5>
                        <p class="card-text">Click on this card to add a symptom</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="card-deck">
                <div class="card" onclick="window.location='#'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">ANSWER QUESTIONS</h5>
                        <p class="card-text">Click on this card to answer farmers' questions</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
                <div class="card" onclick="window.location='#'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">REVIEW QUESTIONS</h5>
                        <p class="card-text">Click on this card to review the answered questions</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
                <div class="card" onclick="window.location='#'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">VIEW KNOWLEDGE BASE</h5>
                        <p class="card-text">Click on this card to view the knowledge base</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
                <div class="card" onclick="window.location='#'">
                    <img class="card-img-top" src={{ asset('images/crop_pic.jpg') }} alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">UPDATE KNOWLEDGE BASE</h5>
                        <p class="card-text">Click on this card to update the knowledge base</p>
                        {{--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

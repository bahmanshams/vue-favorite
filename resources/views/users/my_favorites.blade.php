@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h3>My Favorites</h3>
                </div>
                @forelse($myFavorites as $myFavorite)
                    <div class="card">
                        <div class="card-header">
                            {{ $myFavorite->title }}
                        </div>
                        <div class="card-body">
                            {{ $myFavorite->body }}
                        </div>
                        @if(Auth::check())
                            <div class="card-footer">
                                <favorite :post={{ $myFavorite->id }} :favorited={{ $myFavorite->favorited() }}></favorite>
                            </div>
                        @endif
                    </div>
                @empty
                    <p>You have no favorite posts.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@if (Auth::user()->is_favorite($micropost->id))
    {{-- お気に入り登録のフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-dark btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- お気に入り解除のフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-info btn-sm"]) !!}
    {!! Form::close() !!}
@endif

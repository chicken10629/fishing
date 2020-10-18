@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">釣り場の選択</div>

                <div class="card-body">
                     最近登録された釣り場
                     @foreach
                     <a href="{{ route('place', $place->id)}}">{{ $place->place_name }}</a>
                     @endforeach
                     都道府県から釣り場を検索
                     {{ Form::select('prefecture_id', $prefecture, null, ['class' => 'form', 'id' => 'prefecture_id']) }}
                         
                     </form>
                     <button onclick="location.href='/place_register'">釣り場登録へ</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
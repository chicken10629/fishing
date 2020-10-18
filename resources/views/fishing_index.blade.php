@extends('layouts.app')

@section('content')

<h3>{{ $user -> user_name }}さん</h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">最近の釣行</div>

                <div class="card-body">
                    <div class="col-sm-4 col-form-label text-md-right">
                 @foreach($fishing as $fishingdata)
                     echo "日付{{ $fishingdata -> date}}";
                     <br>
                     天気{{ $fishingdata -> weather}}
                     <br>
                     釣れた魚{{ $fishingdata -> fish_name}}
                 @endforeach
                     </div>
                </div>
                
                
                <div class="card-body">
                    <div class="col-sm-4 col-form-label text-md-right">
                    <button onclick="location.href='/select_place'">釣り場を選択</button>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="col-sm-4 col-form-label text-md-right">
                    <button onclick="location.href='/place_register'">釣り場を登録</button>
                    </div>
                </div>
                    
                    
                
            </div>
        </div>
    </div>
</div>
@endsection
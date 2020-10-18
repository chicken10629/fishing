@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登録が完了しました。</div>

                <div class="card-body">
                     <button onclick="location.href='/fishing_index'">釣行記録indexへ</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
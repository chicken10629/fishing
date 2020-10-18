@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="register-box card">
                    <div class="register-header card-header mx-auto">{{ __('○○港の釣行記録作成') }}</div>

                    <div class="register-body card-body">
                        <form method="POST" action="{{ action('DayfishingController@register') }}">
                            
                        
                            
                            @csrf
                            <div class="form-group row">
                                <label for="fish_id" class="col-sm-4 col-form-label text-md-right">{{ __('釣れた魚') }}</label>

                                <div class="col-md-6">
                                    {{ Form::select('fish_id', $fish, null, ['class' => 'form', 'id' => 'fish_id']) }}
                                    @if ($errors->has('fish_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('fish_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('日付') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required autofocus>

                                    @if ($errors->has('date'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="weather" class="col-sm-4 col-form-label text-md-right">{{ __('天気') }}</label>

                                <div class="col-md-6">
                                    <input id="weather" type="text" class="form-control{{ $errors->has('weather') ? ' is-invalid' : '' }}" name="weather" value="{{ old('weather') }}" required autofocus>

                                    @if ($errors->has('weather'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('weather') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="start_time" class="col-sm-4 col-form-label text-md-right">{{ __('釣り開始時間') }}</label>

                                <div class="col-md-6">
                                    <input id="start_time" type="time" class="form-control{{ $errors->has('start_time') ? ' is-invalid' : '' }}" name="start_time" value="{{ old('start_time') }}" required autofocus>

                                    @if ($errors->has('start_time'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('start_time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="finish_time" class="col-sm-4 col-form-label text-md-right">{{ __('釣り終了時間') }}</label>

                                <div class="col-md-6">
                                    <input id="finish_time" type="time" class="form-control{{ $errors->has('finish_time') ? ' is-invalid' : '' }}" name="finish_time" value="{{ old('finish_time') }}" required autofocus>

                                    @if ($errors->has('finish_time'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('finish_time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="tide" class="col-sm-4 col-form-label text-md-right">{{ __('潮') }}</label>

                                <div class="col-md-6">
                                    <input id="tide" type="text" class="form-control{{ $errors->has('tide') ? ' is-invalid' : '' }}" name="tide" value="{{ old('tide') }}" required autofocus>

                                    @if ($errors->has('tide'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tide') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="sea_temperature" class="col-sm-4 col-form-label text-md-right">{{ __('水温') }}</label>

                                <div class="col-md-6">
                                    <input id="sea_temperature" type="number" class="form-control{{ $errors->has('sea_temperature') ? ' is-invalid' : '' }}" name="sea_temperature" value="{{ old('sea_temperature') }}" required autofocus>

                                    @if ($errors->has('sea_temperature'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('sea_temperature') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label for="depth" class="col-sm-4 col-form-label text-md-right">{{ __('水深(m)') }}</label>

                                <div class="col-md-6">
                                    <input id="depth" type="number" class="form-control{{ $errors->has('depth') ? ' is-invalid' : '' }}" name="depth" value="{{ old('depth') }}" required autofocus>

                                    @if ($errors->has('depth'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('depth') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="tana" class="col-sm-4 col-form-label text-md-right">{{ __('タナ(m)') }}</label>

                                <div class="col-md-6">
                                    <input id="tana" type="number" class="form-control{{ $errors->has('tana') ? ' is-invalid' : '' }}" name="tana" value="{{ old('tana') }}" required autofocus>

                                    @if ($errors->has('tana'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('tana') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="rod" class="col-sm-4 col-form-label text-md-right">{{ __('竿') }}</label>

                                <div class="col-md-6">
                                    <input id="rod" type="text" class="form-control{{ $errors->has('rod') ? ' is-invalid' : '' }}" name="rod" value="{{ old('rod') }}" required autofocus>

                                    @if ($errors->has('rod'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('rod') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="reel" class="col-sm-4 col-form-label text-md-right">{{ __('リール') }}</label>

                                <div class="col-md-6">
                                    <input id="reel" type="text" class="form-control{{ $errors->has('reel') ? ' is-invalid' : '' }}" name="reel" value="{{ old('reel') }}" required autofocus>

                                    @if ($errors->has('reel'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('reel') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="line" class="col-sm-4 col-form-label text-md-right">{{ __('ライン') }}</label>

                                <div class="col-md-6">
                                    <input id="line" type="text" class="form-control{{ $errors->has('line') ? ' is-invalid' : '' }}" name="line" value="{{ old('line') }}" required autofocus>

                                    @if ($errors->has('line'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('line') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="bait" class="col-sm-4 col-form-label text-md-right">{{ __('餌orルアー') }}</label>

                                <div class="col-md-6">
                                    <input id="bait" type="text" class="form-control{{ $errors->has('bait') ? ' is-invalid' : '' }}" name="bait" value="{{ old('bait') }}" required autofocus>

                                    @if ($errors->has('bait'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('bait') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('釣行記録を登録') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
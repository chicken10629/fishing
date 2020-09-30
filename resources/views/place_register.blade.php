@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="register-box card">
                    <div class="register-header card-header mx-auto">{{ __('釣り場新規登録') }}</div>

                    <div class="register-body card-body">
                        <form method="POST" action="{{ route('place_register') }}">
                            
                        
                            
                            @csrf

                            <div class="form-group row">
                                <label for="place_name" class="col-sm-4 col-form-label text-md-right">{{ __('釣り場名') }}</label>

                                <div class="col-md-6">
                                    <input id="place_name" type="place_name" class="form-control{{ $errors->has('place_name') ? ' is-invalid' : '' }}" name="place_name" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('place_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('place_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prefecture_id" class="col-md-4 col-form-label text-md-right">{{ __('都道府県') }}</label>

                                <div class="col-md-6">
                                    <input id="prefecture_id" type="prefecture_id" class="form-control{{ $errors->has('prefecture_id') ? ' is-invalid' : '' }}" name="prefecture_id" required>
                                
                                <select name="prefecture_id">
<option value="" selected>都道府県</option>
<option value="1">北海道</option>
<option value="2">青森県</option>
<option value="3">岩手県</option>
<option value="4">宮城県</option>
<option value="5">秋田県</option>
<option value="6">山形県</option>
<option value="7">福島県</option>
<option value="8">茨城県</option>
<option value="9">栃木県</option>
<option value="10">群馬県</option>
<option value="11">埼玉県</option>
<option value="12">千葉県</option>
<option value="13">東京都</option>
<option value="14">神奈川県</option>
<option value="15">新潟県</option>
<option value="16">富山県</option>
<option value="17">石川県</option>
<option value="18">福井県</option>
<option value="19">山梨県</option>
<option value="20">長野県</option>
<option value="21">岐阜県</option>
<option value="22">静岡県</option>
<option value="23">愛知県</option>
<option value="24">三重県</option>
<option value="25">滋賀県</option>
<option value="26">京都府</option>
<option value="27">大阪府</option>
<option value="28">兵庫県</option>
<option value="29">奈良県</option>
<option value="30">和歌山県</option>
<option value="31">鳥取県</option>
<option value="32">島根県</option>
<option value="33">岡山県</option>
<option value="34">広島県</option>
<option value="35">山口県</option>
<option value="36">徳島県</option>
<option value="37">香川県</option>
<option value="38">愛媛県</option>
<option value="39">高知県</option>
<option value="40">福岡県</option>
<option value="41">佐賀県</option>
<option value="42">長崎県</option>
<option value="43">熊本県</option>
<option value="44">大分県</option>
<option value="45">宮崎県</option>
<option value="46">鹿児島県</option>
<option value="47">沖縄県</option>
</select>    

                                    @if ($errors->has('prefecture_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('prefecture_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('釣り場登録') }}
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
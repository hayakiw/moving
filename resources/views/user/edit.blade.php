@extends('layout.master')

<?php

    $layout = [
        'left' => true,
        'user' => true,
        'title' => '基本情報',
    ];

?>

@section('content')

<section>
  <div class="reset_box">
    <div class="rs_inner">
      <h2><span>基本情報設定</span></h2>

      {{ Form::model($user, ['route' => 'user.update', 'method' => 'put']) }}
      <div class="rs_inner2">

        <dl>
          <dt><span>必須</span>姓</dt>
          <dd>
            @if ($errors->has('last_name'))
            <p class="err_message"><span>{{ $errors->first('last_name') }}</span></p>
            @endif
            <input type="text" name="last_name" placeholder="姓" value="{{ Request::old('last_name') ?: $user->last_name }}"></dd>
        </dl>
        <dl>
          <dt><span>必須</span>名</dt>
          <dd>
            @if ($errors->has('first_name'))
            <p class="err_message"><span>{{ $errors->first('first_name') }}</span></p>
            @endif
            <input type="text" name="first_name" placeholder="名" value="{{ Request::old('first_name') ?: $user->first_name }}"></dd>
        </dl>

        <dl>
          <dt><span>必須</span>郵便番号</dt>
          <dd>
            @if ($errors->has('zip_code'))
            <p class="err_message"><span>{{ $errors->first('zip_code') }}</span></p>
            @endif
            <input type="text" name="zip_code" placeholder="半角数字で入力" value="{{ Request::old('zip_code') ?: $user->zip_code }}"></dd>
        </dl>
        <dl>
          <dt><span>必須</span>都道府県名</dt>
          <dd>
            @if ($errors->has('prefecture'))
            <p class="err_message"><span>{{ $errors->first('prefecture') }}</span></p>
            @endif
            <input type="text" name="prefecture" placeholder="都道府県名" value="{{ Request::old('prefecture') ?: $user->prefecture }}"></dd>
        </dl>
        <dl>
          <dt><span>必須</span>市区町村</dt>
          <dd>
            @if ($errors->has('city'))
            <p class="err_message"><span>{{ $errors->first('city') }}</span></p>
            @endif
            <input type="text" name="city" placeholder="市区町村" value="{{ Request::old('city') ?: $user->city }}"></dd>
        </dl>
        <dl>
          <dt>住所</dt>
          <dd>
            @if ($errors->has('address'))
            <p class="err_message"><span>{{ $errors->first('address') }}</span></p>
            @endif
            <input type="text" name="address" placeholder="住所" value="{{ Request::old('address') ?: $user->address }}"></dd>
        </dl>

        <dl>
          <dt>建物</dt>
          <dd>
            @if ($errors->has('building'))
            <p class="err_message"><span>{{ $errors->first('building') }}</span></p>
            @endif
            <input type="text" name="building" placeholder="建物" value="{{ Request::old('building') ?: $user->building }}"></dd>
        </dl>

        <dl>
          <dt>連絡先</dt>
          <dd>
            @if ($errors->has('tel'))
            <p class="err_message"><span>{{ $errors->first('tel') }}</span></p>
            @endif
            <input type="text" name="tel" placeholder="半角数字で入力" value="{{ Request::old('tel') ?: $user->tel }}"></dd>
        </dl>

        <dl>
          <dt></dt>
          <dd><button type="submit" id="btn_reset"><span>変更する</span></button></dd>
        </dl>
      </div>
      {{ Form::close() }}

    </div>
  </div>
</section>

@endsection

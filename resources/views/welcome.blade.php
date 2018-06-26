@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h2>思い出に残るデートプランを見つけよう</h2>
                @if (!Auth::check())
                <a href="#" class="btn btn-success btn-lg">DATESPOTSを始める</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    テスト
@endsection

@extends('website.layouts.website')
@section('pageTitle')
{{$title}} | Copyright
@endsection

@section('css')
<link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />

@endsection

@section('content')
<div style="width:1000px;height:100%;margin:auto;font-family:Arial;font-size:12px;" bis_skin_checked="1">
    <br>
    @foreach ($copyrights as $copyright)
            <div class="data_box" bis_skin_checked="1">
                <p class="style44 box_title"><span class="style52">{{$copyright?->name}}</span></p>
                <p class="style53 box_copy">
                    <span class="style41 style46">
                        {{$copyright?->note}}
                    </span>
                </p>
            </div>
      
        <br>
    @endforeach
</div>
@endsection

@section('js')

@endsection
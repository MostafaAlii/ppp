@extends('website.layouts.website')
@section('pageTitle')
{{$title}} | Offers
@endsection

@section('css')
<link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />

@endsection

@section('content')
<div style="width:1000px;height:100%;margin:auto;font-family:Arial;font-size:12px;" bis_skin_checked="1">
    <br>
    @foreach ($offers as $offer)
            <div bis_skin_checked="1">
                <table width="950" border="0">
                    <tbody><tr>
                      <td width="470" height="354"><p class="style45">{{$offer?->name}}</p>
                        <p class="style53">{{$offer?->description}}<br>
                            @if($offer->note1 && $offer->note2 && $offer->note3 && $offer->note4 && $offer->note5 && $offer->note6 !== null)
                            {{$offer?->note1}}<br>
                            {{$offer?->note2}}<br>
                            {{$offer?->note3}}<br>
                            {{$offer?->note4}}<br>
                            {{$offer?->note5}}<br>
                            {{$offer?->note6}}<br>
                            <br>
                            <span class="style41">{{$btn?->name}}</span>
                        </p>
                        <p class="style55">
                            <a href="#">
                                <img src="{{ asset('website/resources/imgs/getstarted.png') }}" name="{{$btn?->name}}" width="234" height="57" border="0">
                            </a>
                        </p>
                        @endif
                    </td>
                    @if($offer->note1 && $offer->note2 && $offer->note3 && $offer->note4 && $offer->note5 && $offer->note6 !== null)
                      <td width="470"><img src="{{ asset($offer->ImagePath()) }}" width="472" height="354"></td>
                    @endif
                    </tr>
                  </tbody></table>
            </div>
     
        <br>
    @endforeach
</div>
@endsection

@section('js')

@endsection
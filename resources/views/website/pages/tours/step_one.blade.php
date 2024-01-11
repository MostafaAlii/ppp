@extends('website.layouts.website')
@section('pageTitle')
{{$title}} | Examples
@endsection

@section('css')
<link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
<link href="{{ asset('website/resources/lib/nivo/nivo-slider.css') }}" rel="stylesheet" />
<script src="{{ asset('website/resources/lib/nivo/nivo.slider.pack.js') }}" type="text/javascript"></script>

<link rel="stylesheet" href="{{ asset('website/resources/lib/vlightbox/vlightbox1.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('website/resources/lib/vlightbox/visuallightbox.css') }}" type="text/css" media="screen" />
<script src="{{ asset('website/resources/lib/vlightbox/visuallightbox.js') }}" type="text/javascript"></script>
<style>
  .style45 {
    color: #CC0000;
    font-size: 35px;
  }
</style>
@endsection

@section('content')
<div style="width:1000px;height:100%;margin:auto;font-family:Arial;font-size:12px;" bis_skin_checked="1">
  <div style="font-family:adventRe;font-size:30px;color:#ce161d" bis_skin_checked="1"></div>
  <table width="975" border="0">
    <tbody>
      <tr>
        <td width="87">
          <div align="left" bis_skin_checked="1">
            <br>
            <a href="{{route('website.tour.step_one')}}">
              <img src="{{ asset('website/resources/imgs/previous.png') }}" width="60" height="60" border="0">
            </a>
            </div>
          </td>
        <td width="789">
            <div align="center" bis_skin_checked="1">
              <br>
            <span class="style45">{{$step_one?->name}}</span>
          </div>
        </td>
        <td width="85">
          <div align="right" bis_skin_checked="1">
            <br>
            <a href="{{route('website.tour.step_two')}}" bis_skin_checked="1">
              <img src="{{ asset('website/resources/imgs/next.png') }}" width="60" height="60" border="0">
            </a>
          </div>
        </td>
      </tr>
    <tr>
      <td height="465">&nbsp;</td>
      <td><div align="center" bis_skin_checked="1"><img src="{{ asset($step_one->ImagePath()) }}" width="850" height="616" alt="{{$step_one?->name}}"></div></td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
  </table>
</div>
@endsection

@section('js')
<script src="{{ asset('website/resources/lib/lightbox/dist/js/lightbox.min.js') }}"></script>
<script>
  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
  });
</script>
@endsection
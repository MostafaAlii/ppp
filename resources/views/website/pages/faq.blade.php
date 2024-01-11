@extends('website.layouts.website')
@section('pageTitle')
    {{ $title }} | FAQ
@endsection

@section('css')
    <link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div style="width:1000px;height:100%;margin:auto;font-family:Arial;font-size:12px;" bis_skin_checked="1">
        <div class="faq_section_wrapper py-4">
            <h1 class="page_title">Frequently Asked Questions</h1>
            @foreach ($faqs as $faq)
                <div class="accordion" id="{{$faq->id}}">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapse_{{$faq->id}}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                aria-controls="panelsStayOpen-collapse_{{$faq->id}}">
                                Q. {{ $faq->question }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse_{{$faq->id}}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}">
                            <div class="accordion-body">
                                <strong>A. {{ $faq->answer }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
@endsection

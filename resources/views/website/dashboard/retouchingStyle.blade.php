@extends('website.layouts.dashboard')

@section('pageTitle')
    Retoching Style
@endsection

@section('css')
<style>
    .selectable-image {
        height: auto;
        width: 100%;
        border-radius: 5px;
        border: 5px solid #d50d0d;
        transition: all 0.3s;
    }

    retouching-imgs img.active, .retouching-imgs img:hover {
    cursor: pointer;
    border: 5px solid #d50d0d;
    transition: all 0.3s;
    }
</style>
@endsection

@section('content')
    <div class="container-fluid dashboard-container">
        <div class="row">
            @include('website.layouts.common.client._sidebar')
            <!-- Start Dashboard -->
            <div class="col-12 col-sm-8 col-md-9">
                <!-- Start Dynamic Content -->
                <div class="dashboard-contents">
                    <div class="contents active edit-profile-con">
                        <h1>Retoching Style</h1>
                        <div class="edit-profile">
                            <form action="{{ route('website.retouching-style.save') }}" method="POST" class="update-profile"
                                id="update-profile">
                                @csrf
                                <div class="mt-5 mb-3 retouching-type">
                                    <div class="retouching-type-title">Preferred retouching style</div>
                                    <div class="retouching-type-subtitle">Skin smoothing level</div>
                                    <div class="retouching-imgs">
                                        @foreach (App\Models\RetouchService::active()->with('image')->get() as $retouch)
                                            <div class="{{ $saveRetouchStyle?->retouch_service_id == $retouch?->id ? 'active' : '' }}">
                                                @if ($retouch->ImagePath())
                                                    <img src="{{ $retouch->ImagePath() }}" id="{{ $retouch->id }}"
                                                        class="selectable-image {{ $saveRetouchStyle?->retouch_service_id == $retouch->id ? 'active' : '' }}">
                                                    <span>{{ $retouch->name }}</span>
                                                @endif
                                            </div>
                                        @endforeach
                                        <input type="hidden" name="retouch_service_id" id="retouch_service_id" value="{{ $saveRetouchStyle?->retouch_service_id }}">

                                    </div>
                                    <div class="my-3 retouching-note">The style you prefer in retouching your photos</div>
                                    <textarea name="retouching_note" id="retouching-note"
                                        placeholder="Write your guidelines to be considered in your orders generally">{{$saveRetouchStyle?->retouching_note}}</textarea>
                                </div>
                                <div class="mt-5 text-center">
                                    <button type="submit" class="btn update-profile-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Dynamic Content -->
            </div>
            <!-- End Dashboard -->
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectableImages = document.querySelectorAll('img.selectable-image');
            const selectedImageInput = document.getElementById('retouch_service_id');

            selectableImages.forEach(function(image) {
                image.addEventListener('click', function() {
                    const selectedId = image.getAttribute('id').charAt(0);
                    selectedImageInput.value = selectedId;
                });
            });
        });
    </script>
@endsection

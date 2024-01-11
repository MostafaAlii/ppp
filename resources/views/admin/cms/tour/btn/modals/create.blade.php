<div class="modal fade" id="create_tour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <h5 class="modal-title white" id="exampleModalLabel">Create New {{ ucfirst($title) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tour.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required name="name" id="name" value="">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->

                    <!-- Start Order -->
                    <div class="p-1 form-group">
                        <label for="order">Ordering</label>
                        <select name="order" id="order" class="form-control">
                            <option selected disabled>Select {{ $title }} Ordering...</option>
                            <option value="1" {{ old('order')=='1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('order')=='2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('order')=='3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ old('order')=='4' ? 'selected' : '' }}>4</option>
                        </select>
                        @error('order')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Order -->

                    <!-- Start Type -->
                    <div class="p-1 form-group">
                        <label for="type">type</label>
                        <select name="type" id="type" class="form-control">
                            <option selected disabled>Select {{ $title }} type...</option>
                            <option value="image" {{ old('type')=='image' ? 'selected' : '' }}>image</option>
                            <option value="video" {{ old('type')=='video' ? 'selected' : '' }}>video</option>
                        </select>
                        @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Type -->

                    <div class="form-group" id="imageField">
                        <label>Image : <span style="color:rgb(199, 8, 8)">*</span></label>
                        <input class="form-control img" name="image" type="file" accept="image/*">
                    </div>

                    <!-- Start Link -->
                    <div class="form-group" id="linkField">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link" id="link" value="">
                        @error('link')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Link -->

                    <hr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
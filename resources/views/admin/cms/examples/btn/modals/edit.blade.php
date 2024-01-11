<div class="modal fade" id="edit{{ $example->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <h5 class="text-white modal-title" id="exampleModalLabel">{{ 'Edit ' . $example?->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.example.update', $example->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $example->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->
                    <!-- Start Image -->
                    <div class="form-group">
                        <label>Image : <span style="color:rgb(199, 8, 8)">*</span></label>
                        <input class="form-control img" name="image" type="file" accept="image/*"
                            onchange="previewImage(this);">
                        <img class="img-thumbnail img-fluid" id="image-preview" src="{{ $example->ImagePath() }}"
                            alt="{{ $example->name }}">
                    </div>
                    <!-- End Image -->

                    <!-- Start Type -->
                    <div class="p-1 form-group">
                        <label for="type">Type</label>
                        <select name="type" class="p-1 form-control">
                            <option selected disabled>Select <span class="text-primary">{{ $example->name }}</span>
                                Type...</option>
                            <option value="photo_retouch" {{ old('type', $example->type) == 'photo_retouch' ? 'selected' : '' }}>
                                Photo Retouch
                            </option>
                            <option value="photo_album" {{ old('type', $example->type) == 'photo_album' ? 'selected' : '' }}>
                                Photo Album
                            </option>
                            <option value="photo_frame" {{ old('type', $example->type) == 'photo_frame' ? 'selected' : '' }}>
                                Photo Frame
                            </option>
                            <option value="photo_flyer" {{ old('type', $example->type) == 'photo_flyer' ? 'selected' : '' }}>
                                Photo Flyer
                            </option>
                        </select>
                        @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Type -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

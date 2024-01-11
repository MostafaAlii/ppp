<div class="modal fade" id="create_example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <form action="{{ route('admin.example.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required name="name" id="name"
                            value="">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->

                    <div class="form-group">
                        <label>Image : <span style="color:rgb(199, 8, 8)">*</span></label>
                        <input class="form-control img" name="image" type="file" accept="image/*" required>
                    </div>
                    <br>
                    <!-- End Notes -->
                    <!-- Start Type -->
                    <div class="p-1 form-group">
                        <label for="type">type</label>
                        <select name="type" id="type" class="form-control">
                            <option selected disabled>Select {{ $title }} type...</option>
                            <option value="photo_retouch" {{ old('type')=='photo_retouch' ? 'selected' : '' }}>Photo Retouch</option>
                            <option value="photo_album" {{ old('type')=='photo_album' ? 'selected' : '' }}>Photo Album</option>
                            <option value="photo_frame" {{ old('type')=='photo_frame' ? 'selected' : '' }}>Photo Frame</option>
                            <option value="photo_flyer" {{ old('type')=='photo_flyer' ? 'selected' : '' }}>Photo Flyer</option>
                        </select>
                        @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Type -->
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

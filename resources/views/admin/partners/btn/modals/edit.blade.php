<div class="modal fade" id="edit{{$partner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <h5 class="text-white modal-title" id="exampleModalLabel">Edit Partner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('partners.update', $partner->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Start Image -->
                    <div class="form-group">
                        <label>Image : <span style="color:rgb(199, 8, 8)">*</span></label>
                        <input class="form-control img" name="image" type="file" accept="image/*" onchange="previewImage(this);">
                        <img class="img-thumbnail img-fluid" id="image-preview" src="{{$partner->ImagePath()}}">
                        
                    </div>
                    <!-- End Image -->

                    <!-- Start Status Status -->
                    <div class="p-1 form-group">
                        <label for="status">Status</label>
                        <select name="status" class="p-1 form-control">
                            <option selected disabled>Select <span class="text-primary">{{$partner->name}}</span>
                                Status...</option>
                            <option value="1" {{ (old('status', $partner->status) == '1') ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="0" {{ (old('status', $partner->status) == '0') ? 'selected' : '' }}>
                                Not Active
                            </option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Status Selected -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
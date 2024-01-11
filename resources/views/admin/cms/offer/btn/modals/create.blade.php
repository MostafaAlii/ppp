<div class="modal fade" id="create_offer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <form action="{{route('offer.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="question">Name</label>
                        <input type="text" class="form-control" required name="name" id="name" value="">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->

                    <div class="form-group">
                        <label>Image :  <span style="color:rgb(199, 8, 8)">*</span></label>
                        <input  class="form-control img" name="image"  type="file" accept="image/*">
                    </div>
                    <br>

                    <!-- Start Notes -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" name="description" rows="5" id="description" placeholder="Type Your Description"></textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Notes -->

                    <!-- Start Note 1 -->
                    <div class="form-group">
                        <label for="note1">Note 1</label>
                        <input type="text" class="form-control" name="note1" id="note1" value="">
                        @error('note1')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Note 1 -->

                    <!-- Start Note 2 -->
                    <div class="form-group">
                        <label for="note2">Note 2</label>
                        <input type="text" class="form-control" name="note2" id="note2" value="">
                        @error('note2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Note 2 -->

                    <!-- Start Note 3 -->
                    <div class="form-group">
                        <label for="note3">Note 3</label>
                        <input type="text" class="form-control" name="note3" id="note3" value="">
                        @error('note3')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Note 3 -->

                    <!-- Start Note 4 -->
                    <div class="form-group">
                        <label for="note4">Note 4</label>
                        <input type="text" class="form-control" name="note4" id="note4" value="">
                        @error('note4')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Note 4 -->

                    <!-- Start Note 5 -->
                    <div class="form-group">
                        <label for="note5">Note 5</label>
                        <input type="text" class="form-control" name="note5" id="note5" value="">
                        @error('note5')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Note 5 -->

                    <!-- Start Note 6 -->
                    <div class="form-group">
                        <label for="note6">Note 6</label>
                        <input type="text" class="form-control" name="note6" id="note6" value="">
                        @error('note6')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Note 6 -->

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
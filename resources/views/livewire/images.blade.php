<div>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                       {{session('message')}}     
                   </div>
                   @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Upload Images</h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="uploadImages" action="" id="upload-images" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="images">Choose Images</label>
                                <input type="file" name="images" class="form-control" wire:model="images" multiple />
                            </div>
                            <button type="submit" class="btn btn-success float-right">upload Images</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

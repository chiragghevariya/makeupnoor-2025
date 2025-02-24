@extends('admin.layout.app')
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kapitanka/image-uploader/dist/image-uploader.min.css">
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    @if (isset($editdata))
    <form class="card-body FromSubmit" action="{{ route('gallery.update',$editdata->id) }}" method="post" data-redirect_url="{{ route('gallery.index') }}" id="gallery" enctype="multipart/form-data">
        @else
        <form class="card-body FromSubmit" action="{{ route('gallery.store') }}" method="post" id="gallery" data-redirect_url="{{ route('gallery.index') }}" enctype="multipart/form-data">
            @endif
            @csrf
            <div class="app-ecommerce">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1">
                            @if (!isset($editdata))
                            Add Gallery
                            @else
                            Edit Gallery
                            @endif
                        </h4>
                    </div>
                </div>

                <div class="col-md-12 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex gap-3 p-0">
                                <div class="col-md-6">
                                    <div class="card-body mb-0">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="name" name="name" class="form-control" data-validate="required" @if (isset($editdata)) value="{{ $editdata->name }}" @endif placeholder="First Name" />
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body mb-0">
                                        <div class="form-floating form-floating-outline">
                                            <input type="number" id="slug" name="slug" class="form-control" data-validate="required" @if (isset($editdata)) value="{{ $editdata->slug }}" @endif placeholder="Last Name" />
                                            <label for="slug">Slug</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3 p-0">
                                <div class="col-md-6">
                                    <div class="card-body mb-0">
                                        <div class="form-floating form-floating-outline">
                                            <select id="status" name="status" class="select2 form-select" aria-placeholder="Select Status">
                                                <option value="" >Select Status</option>
                                                <option value="1" @if(isset($editdata) && $editdata->status == '1') selected @endif>Active</option>
                                                <option value="0" @if(isset($editdata) && $editdata->status == '0') selected @endif>Inactive</option>
                                            </select>
                                            <label for="status">Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body mb-0">
                                    <textarea id="editor" name="description">{{ old('content') }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                  <h5 class="card-header">Multiple</h5>
                                  <div class="card-body">
                                    <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
                                      <div class="dz-message needsclick">
                                        Drop files here or click to upload
                                        <span class="note needsclick"
                                          >(This is just a demo dropzone. Selected files are
                                          <span class="fw-medium">not</span> actually uploaded.)</span
                                        >
                                      </div>
                                      <div class="fallback">
                                        <input name="file" type="file" />
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>


                            <div class="col-md-12">
                                <div class="card-body mb-0">
                                    <div class="input-field" style=" margin-bottom:16px">
                                        <div class="input-images-1" style="padding-top: .5rem;"></div>
                                    </div>
                                    <span class="file-upload-label" style="margin-top:10px; margin-bottom:10px">You can upload files up to 1.5MB each</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" card mb-6">
                    <div class="card-body">
                        <div class="form-floating form-floating-outline d-flex align-content-center flex-wrap gap-4">
                            <a href="javascript:history.back()"><button type="button" class="btn btn-outline-secondary">Discard</button></a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>



            </div>
        </form>
</div>
@endsection
@section('script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kapitanka/image-uploader/dist/image-uploader.min.js"></script>
<script>
    $(function() {
        $('.input-images-1').imageUploader({
            extensions: ['.jpg', '.jpeg', '.png', ]
            , mimes: ['image/jpeg', 'image/png']
        , });
    });

</script>
@endsection

@extends('admin.layout.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">
        @if (isset($editdata))
        <form class="card-body FromSubmit" action="{{ route('gallery.update', $editdata->id) }}" method="post" id="gallery" enctype="multipart/form-data">
            @else
            <form class="card-body FromSubmit" action="{{ route('gallery.store') }}" method="post" id="gallery" enctype="multipart/form-data">
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
                        <div class="d-flex align-content-center flex-wrap gap-4">
                            <a href="javascript:history.back()"><button type="button" class="btn btn-outline-secondary">Discard</button></a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-body">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="name" name="name" class="form-control" data-validate="required" @if (isset($editdata)) value="{{ $editdata->name }}" @endif placeholder="john.doe" />
                                <label for="name">Title<span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Region</h6>
                        </div>
                        <div class="card-body">
                            <textarea id="editor" name="description">{{ old('content') }}</textarea>
                        </div>
                    </div>

                    <div class="card mb-6">
                        <h5 class="card-header">Cover image<span class="text-danger">*</span></h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dropzone-basic" @if(isset($editdata)) data-image-url="{{$editdata->getGalleryImageUrl()}}" @endif id="dropzone-basic" data-input_name="cover_image">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">Allowed file formats: PNG, JPEG, and JPG</span>
                                </div>
                                <div class="fallback">
                                    <input name="cover_image" class="fileinput" type="file" data-validate="required" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-6">
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
</div>
@endsection

@extends('admin.layout.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">
        @if (isset($editdata))
        <form class="card-body ajax-form" action="{{ route('gallery.update', $editdata->id) }}" method="post" id="formSubmit" enctype="multipart/form-data">
            @else
            <form class="card-body ajax-form" action="{{ route('gallery.store') }}" method="post" id="formSubmit" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="app-ecommerce">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                        <div class="d-flex flex-column justify-content-center">
                            <h4 class="mb-1">
                                @if (!isset($editdata))
                                Add Muscle
                                @else
                                Edit Muscle
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
                                <label for="name">Muscle Name<span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Region</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="region">@if(isset($editdata)) {!! $editdata->region !!} @endif</div>
                            <input type="hidden" name="region" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <h5 class="card-header">Cover image<span class="text-danger">*</span></h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dropzone-basic" @if(isset($editdata)) data-image-url="{{$editdata->getCoverImageUrl()}}" @endif id="dropzone-basic" data-input_name="cover_image">
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

                    <div class="card mb-6 mt-6">
                        <h5 class="card-header">image<span class="text-danger">*</span></h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dropzone-basic" @if(isset($editdata)) data-image-url="{{$editdata->getImageUrl()}}" @endif id="dropzone-basic" data-input_name="image">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">Allowed file formats: PNG, JPEG, and JPG</span>
                                </div>
                                <div class="fallback">
                                    <input name="image" class="fileinput" type="file" data-validate="required" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>General Description</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="general_description">@if(isset($editdata)) {!! $editdata->general_description !!} @endif</div>
                            <input type="hidden" name="general_description" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Origin</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="origin">@if(isset($editdata)) {!! $editdata->origin !!} @endif</div>
                            <input type="hidden" name="origin" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Insertion Point</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="insertion">@if(isset($editdata)) {!! $editdata->insertion !!} @endif</div>
                            <input type="hidden" name="insertion" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Major Arteries</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="major_arteries">@if(isset($editdata)) {!! $editdata->major_arteries !!} @endif</div>
                            <input type="hidden" name="major_arteries" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Neural Innervation</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="neural_innervation">@if(isset($editdata)) {!! $editdata->neural_innervation !!} @endif</div>
                            <input type="hidden" name="neural_innervation" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Trigger Point</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="trigger_text">@if(isset($editdata)) {!! $editdata->trigger_text !!} @endif</div>
                            <input type="hidden" name="trigger_text" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <h5 class="card-header">Trigger image<span class="text-danger">*</span></h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dropzone-basic" @if(isset($editdata)) data-image-url="{{$editdata->getTriggerImageUrl()}}" @endif id="dropzone-basic" data-input_name="trigger_image">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                    <span class="note needsclick">Allowed file formats: PNG, JPEG, and JPG</span>
                                </div>
                                <div class="fallback">
                                    <input name="trigger_image" class="fileinput" type="file" data-validate="required" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Concentric</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="concentric">@if(isset($editdata)) {!! $editdata->concentric !!} @endif</div>
                            <input type="hidden" name="concentric" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Eccentric</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="eccentric">@if(isset($editdata)) {!! $editdata->eccentric !!} @endif</div>
                            <input type="hidden" name="eccentric" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Isometric Function</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="isometric_function">@if(isset($editdata)) {!! $editdata->isometric_function !!} @endif</div>
                            <input type="hidden" name="isometric_function" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Related Muscle</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="related_muscle">@if(isset($editdata)) {!! $editdata->related_muscle !!} @endif</div>
                            <input type="hidden" name="related_muscle" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Antagonist</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="antagonist">@if(isset($editdata)) {!! $editdata->antagonist !!} @endif</div>
                            <input type="hidden" name="antagonist" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Common Injuries</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="common_injuries">@if(isset($editdata)) {!! $editdata->common_injuries !!} @endif</div>
                            <input type="hidden" name="common_injuries" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Resistance Exercises</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="resistance_exercises">@if(isset($editdata)) {!! $editdata->resistance_exercises !!} @endif</div>
                            <input type="hidden" name="resistance_exercises" class="editor-content">
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header pb-0">
                            <h6>Stretches</h6>
                        </div>
                        <div class="card-body">
                            <div class="full-editor" data-name="stretches">@if(isset($editdata)) {!! $editdata->stretches !!} @endif</div>
                            <input type="hidden" name="stretches" class="editor-content">
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

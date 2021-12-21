@extends('layouts.admin')
@section('content')
@if (session('landing'))
<div class="alert alert-{{ session('type') }}">
    {{ session('landing') }}
</div>
@endif
<form action="/landing-page/1" method="post">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white" id="btnOne">
                    <h2 class="h5 d-inline-block mb-0 text-white">
                        Hero/Banner (Home) Section
                    </h2>
                </div>
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-7">
                            <img src="{{ asset('/storage/' . $data->hero_image) }}" class="img-fluid" id="heroImage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="hero_image">Background Image</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <div class="custom-file @error('hero_image')
                                is-invalid
                            @enderror">
                                <input type="file" class="custom-file-input cropper-trigger @error('hero_image')
                                    is-invalid
                                @enderror" id="hero_upload" data-field="hero_image" data-preview="heroImage">
                                <label class="custom-file-label" for="hero_upload">Choose file</label>
                                <input type="hidden" name="hero_image" id="hero_image"
                                    value="{{ old('hero_image', $data->hero_image) }}">
                            </div>
                            @error('hero_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">Insert image for background this section. It would appear
                                as a background.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="hero_image">Section Title</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <input type="text" class="form-control @error('hero_title')
                                is-invalid
                            @enderror" placeholder="Solusi Distribusi untuk Usaha Anda" name="hero_title"
                                id="hero_title" value="{{ old('hero_title', $data->hero_title) }}">
                            @error('hero_title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">Insert title for this section. It would appear at the top
                                of the section.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="hero_subtitle">Section Subtitle</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <input type="text" class="form-control @error('hero_subtitle')
                                is-invalid
                            @enderror"
                                placeholder="You need to deliver your goods? You are in right place at the right time!"
                                name="hero_subtitle" id="hero_subtitle"
                                value="{{ old('hero_subtitle', $data->hero_subtitle) }}">
                            @error('hero_subtitle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">Insert subtitle for this section. It would appear at the
                                bottom of the section title</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="font_color">Font Color</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3 col-md-7">
                            <div class="row gutter-xs">
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input type="radio" class="colorinput-input" name="font_color" value="dark"
                                            @if(old('font_color', $data->font_color) == 'dark')
                                        checked
                                        @endif>
                                        <span class="colorinput-color bg-dark"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input type="radio" class="colorinput-input" name="font_color" value="white"
                                            @if(old('font_color', $data->font_color) == 'white')
                                        checked
                                        @endif>
                                        <span class="colorinput-color bg-white"></span>
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input type="radio" class="colorinput-input" name="font_color" value="primary"
                                            @if(old('font_color', $data->font_color) == 'primary')
                                        checked
                                        @endif>
                                        <span class="colorinput-color bg-primary"></span>
                                        </lab>
                                </div>
                                <div class="col-auto">
                                    <label class="colorinput">
                                        <input type="radio" class="colorinput-input" name="font_color" value="danger"
                                            @if(old('font_color', $data->font_color) == 'danger')
                                        checked
                                        @endif>
                                        <span class="colorinput-color bg-danger"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">
                                Set font color for the content of this section</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="cta_button">Click to action Button</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <input type="text" class="form-control @error('cta_button')
                                is-invalid
                            @enderror" name="cta_button" id="cta_button" placeholder="Click Me"
                                value="{{ old('cta_button', $data->cta_button) }}">
                            @error('cta_button')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">
                                Insert as value of Click to action button for this section. It would appear at
                                the
                                bottom of the section subtitle</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="secondary_button">Secondary Button</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <input type="text" class="form-control @error('secondary_button')
                                is-invalid
                            @enderror" name="secondary_button" id="secondary_button" placeholder="Learn More"
                                value="{{ old('secondary_button', $data->secondary_button) }}">
                            @error('secondary_button')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">
                                Insert as value of Click to action button for this section. It would appear
                                after the click to action button, the button will not appear if it doesn't have
                                value</span>
                        </div>
                    </div>
                </div>
                <div class="card-header bg-primary text-white" id="btnTwo">
                    <h2 class="h5 d-inline-block mb-0 text-white">
                        About Section
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-7">
                            <img src="{{ asset('/storage/' . $data->about_image) }}" class="img-fluid" id="aboutImage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="about_image">Background Image</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <div class="custom-file @error('about_image')
                                is-invalid
                            @enderror">
                                <input type="file" class="custom-file-input cropper-trigger @error('about_image')
                                is-invalid
                            @enderror" id="about_upload" data-field="about_image" data-preview="aboutImage">
                                <label class="custom-file-label" for="about_upload">Choose file</label>
                                <input type="hidden" id="about_image" name="about_image"
                                    value="{{ old('about_image', $data->about_image) }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">Insert image for background this section. It would appear
                                as a background.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="about_content">Content</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <textarea name="about_content" class="@error('about_content')
                                is-invalid
                            @enderror" id="about_content" cols="30"
                                rows="10">{{ old('about_content', $data->about_content) }}</textarea>
                            @error('about_content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">Insert sub-title for this section. It would appear at the
                                bottom of the section title</span>
                        </div>
                    </div>
                </div>
                <div class="card-header bg-primary text-white" id="btnThree">
                    <h2 class="h5 d-inline-block mb-0 text-white">
                        Layanan Section
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-7">
                            <img src="{{ asset('/storage/' . $data->service_image) }}" class="img-fluid"
                                id="serviceImage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="service_image">Background Image</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12 col-md-7">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input cropper-trigger" id="service_upload"
                                    data-field="service_image" data-preview="serviceImage">
                                <label class="custom-file-label" for="service_upload">Choose file</label>
                                <input type="hidden" id="service_image" name="service_image">
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <span class="text-muted">Insert image for background this section. It would appear
                                as a background.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-right">
            <button class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
@endsection
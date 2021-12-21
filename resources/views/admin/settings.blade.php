@extends('layouts.admin')

@section('content')
@if (session('setting'))
<div class="row">
    <div class="col">
        <div class="alert alert-success">
            {{ session('setting') }}
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="/website-settings" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="website_name">Websites Name</label>
                        <input type="text" class="form-control" id="website_name" name="website_name"
                            value="{{ old('website_name') }}" placeholder="Insert website name...">
                    </div>
                    <div class="form-group">
                        <label for="website_description">Website Description</label>
                        <input type="text" class="form-control" id="website_description" name="website_description"
                            value="{{ old('website_description') }}" placeholder="Insert website description...">
                    </div>
                    <div class="form-group">
                        <label for="logo">Website Logo</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo" name="logo" required>
                            <label class="custom-file-label" for="logo">Choose file...</label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">https://facebook.com/</span>
                            </div>
                            <input type="text" class="form-control" placeholder="facebook" id="facebook"
                                value="{{ old('facebook') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">https://instagram.com/</span>
                            </div>
                            <input type="text" class="form-control" placeholder="instagram" id="instagram"
                                value="{{ old('instagram') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
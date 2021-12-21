@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <form method="post" action="/profile">
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                <div class="card-header">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name')
                            is-invalid
                        @enderror" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" required
                            autofocus>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email')
                            is-invalid
                        @enderror" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password')
                            is-invalid
                        @enderror" name="password" id="password">
                        <small class=" form-text text-muted">leave it blank if you don't want to change the
                            password</small>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
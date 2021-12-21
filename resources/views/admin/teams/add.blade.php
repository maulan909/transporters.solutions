@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="/teams" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name')
                            is-invalid
                        @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe"
                            autocomplete="off" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control @error('position')
                            is-invalid
                        @enderror" id="position" name="position" value="{{ old('position') }}"
                            placeholder="Chief Excecutive Officer" autocomplete="off" required>
                        @error('position')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" class="form-control @error('linkedin')
                            is-invalid
                        @enderror" id="linkedin" name="linkedin" placeholder="user1102" value="{{ old('linkedin') }}"
                            autocomplete="off">
                        <small id="emailHelp" class="form-text text-muted">https://www.linkedin.com/in/<span
                                class="font-weight-bold">user1102</span> insert only bold text</small>
                        @error('linkedin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" class="form-control @error('whatsapp')
                            is-invalid
                        @enderror" id="whatsapp" name="whatsapp" placeholder="6285212341234"
                            value="{{ old('whatsapp') }}" autocomplete="off">
                        <small class="form-text text-muted">https://wa.me/<span
                                class="font-weight-bold">6285212341234</span> insert only bold text</small>
                        @error('whatsapp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control @error('instagram')
                            is-invalid
                        @enderror" id="instagram" name="instagram" placeholder="user1102"
                            value="{{ old('instagram') }}" autocomplete="off">
                        <small class="form-text text-muted">https://instagram.com/<span
                                class="font-weight-bold">user1102</span> insert only bold text</small>
                        @error('instagram')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
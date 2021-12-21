@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        @if (session('team'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('team') }}
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col">
                        <a href="/teams/create" class="btn btn-primary">Add Team</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col" width="400">Position</th>
                                        <th scope="col" width="100">LinkedIn</th>
                                        <th scope="col" width="100">Whatsapp</th>
                                        <th scope="col" width="100">Instagram</th>
                                        <th scope="col" width="250">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($team as $person)
                                    <tr>
                                        <th scope="row">{{ $person->name }}</th>
                                        <td>{{ $person->position }}</td>
                                        <td>
                                            @if ($person->linkedin)
                                            <a href="https://linkedin.com/in/{{ $person->linkedin }}">
                                                <i class="fas fa-check text-success"></i>
                                            </a>
                                            @else
                                            <i class="fas fa-times text-danger"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($person->whatsapp)
                                            <a href="https://wa.me/{{ $person->whatsapp }}">
                                                <i class="fas fa-check text-success"></i>
                                            </a>
                                            @else
                                            <i class="fas fa-times text-danger"></i>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($person->instagram)
                                            <a href="https://instagram.com/{{ $person->instagram }}">
                                                <i class="fas fa-check text-success"></i>
                                            </a>
                                            @else
                                            <i class="fas fa-times text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            <a href="/#our-team" target="_blank" class="btn btn-info mb-2 ">Detail</a>
                                            <a href="/teams/{{ $person->id }}/edit"
                                                class="btn btn-warning mb-2 ">Edit</a>
                                            <form action="/teams/{{ $person->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger mb-2">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
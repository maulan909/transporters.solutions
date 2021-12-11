@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 mb-2 mb-lg-0">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">Add Service</a>
                    </div>
                    <div class="col-lg-4">
                        <div class="input-group mb-3">
                            <input type="search" name="keyword" class="form-control" placeholder="Search ..."
                                aria-describedby="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="search">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td width="70">#</td>
                                        <td>Name Service</td>
                                        <td width="270">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Transportation & Distribution</td>
                                        <td class="d-flex justify-content-end align-items-center">
                                            <a href="/pages/slug" class="my-2 mx-1 btn btn-info">Lihat</a>
                                            <a href="/pages/slug" class="my-2 mx-1 btn btn-warning">Edit</a>
                                            <form action="/pages" method="post" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="my-2 mx-1 btn btn-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>#</td>
                                        <td>Name Service</td>
                                        <td>Action</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
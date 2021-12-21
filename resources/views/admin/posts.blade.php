@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 mb-2 mb-lg-0">
                        <a href="{{ route('pages.create') }}" class="btn btn-primary">Add New</a>
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
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td width="50">#</td>
                                        <td>Title</td>
                                        <td width="200">Category</td>
                                        <td width="200">Author</td>
                                        <td width="200">Publish Date</td>
                                        <td width="150">Status</td>
                                        <td width="100">Views</td>
                                        <td width="200">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Cara Membuat Sesuatu</td>
                                        <td>Technology</td>
                                        <td>Hilmi Maulana</td>
                                        <td>{{ date('Y-m-d H:i:s') }}</td>
                                        <td><span class="badge badge-pill badge-info">Scheduled</span></td>
                                        <td>1</td>
                                        <td class="d-flex align-items-center justify-content-end">
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
                                        <td>Title</td>
                                        <td>Category</td>
                                        <td>Author</td>
                                        <td>Publish Date</td>
                                        <td>Status</td>
                                        <td>Views</td>
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
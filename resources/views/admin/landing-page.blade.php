@extends('layouts.admin');

@section('content')
<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="accordion" id="accordionLandingPage">
                <div class="card">
                    <div class="card-header bg-primary text-white" id="btnOne">
                        <button
                            class="btn btn-link btn-block text-left px-0 text-decoration-none d-flex justify-content-between align-items-center btn-accordion"
                            type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                Hero/Banner (Home) Section
                            </h2>
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                <i class="fas fa-plus"></i>
                            </h2>
                        </button>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="btnOne" data-parent="#accordionLandingPage">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="heroImage">Background Image</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="heroImage" name="heroImage">
                                        <label class="custom-file-label" for="heroImage">Choose file</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <span class="text-muted">Insert image for background this section. It would appear
                                        as a background.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="sectionHeroTitle">Section Title</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <input type="text" class="form-control"
                                        placeholder="Solusi Distribusi untuk Usaha Anda" name="sectionHeroTitle"
                                        id="sectionHeroTitle">
                                </div>
                                <div class="col-12 col-md-5">
                                    <span class="text-muted">Insert title for this section. It would appear at the top
                                        of the section.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="sectionHeroSubtitle">Section Subtitle</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <input type="text" class="form-control"
                                        placeholder="You need to deliver your goods? You are in right place at the right time!"
                                        name="sectionHeroSubtitle" id="sectionHeroSubtitle">
                                </div>
                                <div class="col-12 col-md-5">
                                    <span class="text-muted">Insert subtitle for this section. It would appear at the
                                        bottom of the section title</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="heroFontColor">Font Color</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3 col-md-2 col-xl-1">
                                    <input type="color" class="form-control" name="heroFontColor" id="heroFontColor"
                                        value="#ffffff">
                                </div>
                                <div class="col-12 col-md-5 offset-md-5 offset-xl-6">
                                    <span class="text-muted">
                                        Set font color for the content of this section</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="ctaButton">Click to action Button</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <input type="text" class="form-control" name="ctaButton" id="ctaButton"
                                        placeholder="Click Me">
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
                                    <label for="secondaryButton">Secondary Button</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <input type="text" class="form-control" name="secondaryButton" id="secondaryButton"
                                        placeholder="Learn More">
                                </div>
                                <div class="col-12 col-md-5">
                                    <span class="text-muted">
                                        Insert as value of Click to action button for this section. It would appear
                                        after the click to action button, the button will disappear if it doesn't have
                                        value</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-primary text-white" id="btnTwo">
                        <button
                            class="btn btn-link btn-block text-left px-0 text-decoration-none d-flex justify-content-between align-items-center btn-accordion"
                            type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                            aria-controls="collapseTwo">
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                About Section
                            </h2>
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                <i class="fas fa-plus"></i>
                            </h2>
                        </button>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="btnTwo" data-parent="#accordionLandingPage">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="aboutImage">Background Image</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="aboutImage" name="aboutImage">
                                        <label class="custom-file-label" for="heroImage">Choose file</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <span class="text-muted">Insert image for background this section. It would appear
                                        as a background.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="aboutContent">Content</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <textarea name="aboutContent" id="aboutContent" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-12 col-md-5">
                                    <span class="text-muted">Insert sub-title for this section. It would appear at the
                                        bottom of the section title</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-primary text-white" id="btnThree">
                        <button
                            class="btn btn-link btn-block text-left px-0 text-decoration-none d-flex justify-content-between align-items-center btn-accordion"
                            type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                            aria-controls="collapseThree">
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                Layanan Section
                            </h2>
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                <i class="fas fa-plus"></i>
                            </h2>
                        </button>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="btnThree"
                        data-parent="#accordionLandingPage">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label for="layananImage">Background Image</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12 col-md-7">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="layananImage"
                                            name="layananImage">
                                        <label class="custom-file-label" for="heroImage">Choose file</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <span class="text-muted">Insert image for background this section. It would appear
                                        as a background.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-primary text-white" id="btnFour">
                        <button
                            class="btn btn-link btn-block text-left px-0 text-decoration-none d-flex justify-content-between align-items-center btn-accordion"
                            type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
                            aria-controls="collapseFour">
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                Our Team Section
                            </h2>
                            <h2 class="h5 d-inline-block mb-0 text-white">
                                <i class="fas fa-plus"></i>
                            </h2>
                        </button>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="btnFour"
                        data-parent="#accordionLandingPage">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <a href="" class="btn btn-primary">Tambah Anggota</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col" width="400">Position</th>
                                                    <th scope="col" width="100">LinkedIn</th>
                                                    <th scope="col" width="100">Whatsapp</th>
                                                    <th scope="col" width="250">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Arief Setiawan</th>
                                                    <td>Founder</td>
                                                    <td><a href="#"><i class="fas fa-times text-danger"></i></a></td>
                                                    <td><a href="#"><i class="fas fa-check text-success"></i></a></td>
                                                    <td class="text-right">
                                                        <a href="#" class="btn btn-info mb-2 ">Detail</a>
                                                        <a href="#" class="btn btn-warning mb-2 ">Edit</a>
                                                        <form action="" method="post" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="hidden" name="id">
                                                            <button type="submit"
                                                                class="btn btn-danger mb-2">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
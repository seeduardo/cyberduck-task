@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h1>
                    Add a New Company
                  </h1>
                </div>

                <div class="card-body">
                  <form method="POST" action="/companies" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                        <div class="col-md-6">
                            <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" autocomplete="logo">

                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                        <div class="col-md-6">
                            <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" autocomplete="website">

                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Company') }}
                            </button>
                        </div>
                    </div>

                  </form>

                  <br>
                  <br>

                  <a href="/companies">Back to Companies List
                  </a>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

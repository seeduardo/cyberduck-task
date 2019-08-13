@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Companies</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <ul>
                      @foreach ($companies as $company)
                        <a href="/companies/{{ $company->id }}">
                          <li>{{ $company->name }}</li>
                        </a>
                      @endforeach
                    </ul>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="/companies/create"><button type="button" class="btn btn-primary">
                                {{ __('Add a Company') }}
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

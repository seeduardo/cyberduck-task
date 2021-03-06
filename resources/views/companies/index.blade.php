@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h1>
                    Companies
                  </h1>
                </div>

                <div class="card-body">
                  @if (!$companies->count())
                    <h2>
                      There are no companies stored as yet.
                    </h2>
                  @endif

                  @foreach ($companies as $company)
                    <div class="card">
                      <div class="card-header">
                        <h2>
                          {{ $company->name }}
                        </h2>
                      </div>
                      <div class="card-body">
                        <a href="/companies/{{ $company->id }}">
                          <button type="button" class="btn btn-primary">
                            {{ __('View Company Details') }}
                          </button>
                        </a>
                      </div>
                    </div>
                    <br>
                  @endforeach

                  {{ $companies->links() }}

                  <br>

                  <a href="/companies/create">
                    <button type="button" class="btn btn-primary">
                      {{ __('Add a Company') }}
                    </button>
                  </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    <h1>
                      {{ $company->name }}
                    </h1>
                  </div>

                  <div class="card-body">
                    <div class="company-email">
                      <h2>
                        <label for="company-email">
                          Email Address:
                        </label>
                        <b>
                          {{ $company->email }}
                        </b>
                      </h2>
                    </div>

                    <div class="company-logo">
                      <h2>
                        <label for="company-logo">
                          Logo:
                        </label>
                        <b>
                          {{ $company->logo }}
                        </b>
                      </h2>
                    </div>

                    <div class="company-website">
                      <h2>
                        <label for="company-website">
                          Website:
                        </label>
                        <b>
                          {{ $company->website }}
                        </b>
                      </h2>
                    </div>

                    <a href="/companies/{{ $company->id }}/employees">
                      <button type="button" class="btn btn-primary">
                        {{ __('View Employees') }}
                      </button>
                    </a>

                    <a href="/companies/{{ $company->id }}/edit">
                      <button type="button" class="btn btn-primary">
                        {{ __('Edit Company Details') }}
                      </button>
                    </a>

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

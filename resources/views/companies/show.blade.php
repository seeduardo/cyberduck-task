@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ $company->name }}</div>

                  <div class="card-body">
                    <div class="">
                      {{ $company->email }}
                    </div>
                    <div class="">
                      {{ $company->logo }}
                    </div>
                    <div class="">
                      {{ $company->website }}
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="/companies/{{ $company->id }}/employees"><button type="button" class="btn btn-primary">
                                {{ __('View Employees') }}
                            </button></a>
                        </div>
                    </div>

                    <a href="/companies/{{ $company->id }}/edit">Edit/Delete Company Details</a><br>
                    <a href="/companies">Back to Companies List</a>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection

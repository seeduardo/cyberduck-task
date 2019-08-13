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

                    <a href="/companies/{{ $company->id }}/edit">Edit/Delete</a><br>
                    <a href="/companies">Back to Companies List</a>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection

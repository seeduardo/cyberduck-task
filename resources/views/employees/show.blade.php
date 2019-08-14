@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ $employee->first_name }} {{ $employee->last_name }}, employee of {{ $company->name }}</div>

                  <div class="card-body">
                    <div class="">
                      {{ $employee->email }}
                    </div>
                    <div class="">
                      {{ $employee->phone }}
                    </div><br>

                    <!-- <form class="" method="POST" action="/employees/{{ $employee->id }}">
                      @method('DELETE')
                      @csrf
                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Delete Employee') }}
                              </button>
                          </div>
                      </div>
                    </form><br> -->

                    <a href="/employees/{{ $employee->id }}/edit">Edit Employee Details</a><br>
                    <a href="/companies">Back to Companies List</a>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection

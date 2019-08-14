@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    <h1>
                      {{ $employee->first_name }} {{ $employee->last_name }}
                    </h1>
                  </div>

                  <div class="card-body">
                    <div class="employee-email">
                      <h2>
                        <label for="employee-email">
                          Email Address:
                        </label>
                        <b>
                          {{ $employee->email }}
                        </b>
                      </h2>
                    </div>
                    <div class="employee-phone">
                      <h2>
                        <label for="employee-phone">
                          Email Address:
                        </label>
                        <b>
                          {{ $employee->phone }}
                        </b>
                      </h2>
                    </div>

                    <a href="/employees/{{ $employee->id }}/edit">
                      <button type="button" class="btn btn-primary">
                        {{ __('Edit Employee Details') }}
                      </button>
                    </a>

                    <br>
                    <br>

                    <a href="/companies">Back to Companies List</a>

                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection

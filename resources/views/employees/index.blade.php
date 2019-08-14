@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    <h1>Employees of {{ $company->name }}
                    </h1>
                  </div>

                  <div class="card-body">
                    @if (!$company->employees->count())
                      <h2>
                        This company does not yet have any employees stored.
                      </h2>
                    @endif

                    @foreach ($company->employees as $employee)
                      <div class="card">
                        <div class="card-header">
                          <h2>{{ $employee->first_name }} {{ $employee->last_name }}
                          </h2>
                        </div>

                        <div class="card-body">
                          <a href="/employees/{{ $employee->id }}">
                            <button type="button" class="btn btn-primary">
                              {{ __('View Employee Details') }}
                            </button>
                          </a>

                          <br>
                          <br>

                          <form class="" method="POST" action="/employees/{{ $employee->id }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                {{ __('Delete Employee') }}
                            </button>
                          </form>
                        </div>
                      </div>
                      <br>
                    @endforeach

                    <a href="/companies/{{ $company->id }}/employees/create">
                      <button type="button" class="btn btn-primary">
                        {{ __('Add an Employee') }}
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

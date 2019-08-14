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
                    <ul>
                      @foreach ($company->employees as $employee)

                        <li>
                          <h2>{{ $employee->first_name }} {{ $employee->last_name }}
                          </h2>
                        </li>

                        <a href="/employees/{{ $employee->id }}"><button type="button" class="btn btn-primary">
                            {{ __('View Employee Details') }}
                        </button></a>

                        <form class="" method="POST" action="/employees/{{ $employee->id }}">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-primary">
                              {{ __('Delete Employee?') }}
                          </button>
                        </form><br>

                      @endforeach
                    </ul>

                    <a href="/companies/{{ $company->id }}/employees/create">
                      <button type="button" class="btn btn-primary">
                        {{ __('Add an Employee') }}
                      </button>
                    </a>
                    
                    <br>

                    <a href="/companies">Back to Companies List</a>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

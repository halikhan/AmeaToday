@extends('user_dashboard.layouts.user-master')
@section('content')

<div class="for-content-tabs">
    <div class="tab-content" id="v-pills-tabContent">

        @if(Session::has('message'))
        <p class="alert
        {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('message') }}</p>
        @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1>Evaluators</h1>
                    </div>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($getEvaluators as $key => $value)
                     <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->contact }}</td>
                        <td><a class="btn btn-success" type="button" href="{{ route('amea-today', $value->id )}}">Select</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>

    </div>
</div>
@endsection

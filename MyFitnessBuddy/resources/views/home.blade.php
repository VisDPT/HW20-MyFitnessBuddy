@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! What would you like to do?
                    <li><a href="{{ url('/addMeal') }}">Add a Meal</a></li>
                    <li><a href="{{ url('/allMeals') }}">View All my Meals</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <form method="POST" action="add">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add a Meal</div>

                <div class="panel-body">
                
                    <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Meal Name</label>
                    <div class="col-10">
                        <input class="form-control MName" type="text" name="mealName" id="example-text-input">

                          <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection


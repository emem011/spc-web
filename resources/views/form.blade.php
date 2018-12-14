@extends('layouts.app')

@section('content')
  <h1>Please Fill Out the Form</h1>
  {!! Form::open(['action' => 'Register@store', 'method' => 'POST']) !!}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for='fname'>First Name</label>
      <input type="text" class="form-control" name="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email Adress</label>
    <input type="email" class="form-control" name="email" placeholder="example@email.com">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Bldg#/Street/Brgy/City/Province">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input type="text" class="form-control" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="state">Province</label>
      <select name="state" class="form-control">
        <option selected>Laguna</option>
        <option>Quezon</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="zip">Zip Code</label>
      <input type="text" class="form-control" name="zip">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0" >Type of Business</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="single" checked>
          <label class="form-check-label" for="gridRadios1">
            Single
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="multiple">
          <label class="form-check-label" for="gridRadios2">
            Mulitple
          </label>
        </div>
      </div>
    </div>
  <button type="submit" class="btn btn-primary mt-4">Print</button>
</form>
  {!! Form::close() !!}
@endsection

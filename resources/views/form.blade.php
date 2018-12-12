@extends('layouts.app')

@section('content')
  <h1>Please Fill Out the Form</h1>
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email Adress</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="example@email.com">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Bldg#/Street/Brgy/City/Province">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="City">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Province</label>
      <select id="inputState" class="form-control">
        <option selected>Laguna</option>
        <option>Quezon</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip Code</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0" >Type of Business</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Single
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
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

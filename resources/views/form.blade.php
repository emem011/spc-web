@extends('layouts.app')

@section('content')
  <h1>Please Fill Out the Form</h1>
  <p>1.	Provide accurate information and print legibly to avoid delays. Incomplete form will be returned to the applicant.<br>
     2. Ensure that all documents attached to this form (if any) are complete and properly filled out.
  </p>
  <p><b>1.	BASIC INFORMATION </b>
  </p>
  {!! Form::open(['action' => 'Register@store', 'method' => 'POST']) !!}

  {{-- first row --}}
  <div class="form-check-inline mb-4">
    <label class="form-check-label">
       <input type="radio" class="form-check-input" name="basicnew">New
    </label>
  </div>
  <div class="form-check-inline">
   <label class="form-check-label">
     <input type="radio" class="form-check-input" name="basicnew">Renewal
   </label>
  </div>
  <p>Mode of Payment</p>
    <div class="form-check-inline mb-4">
      <label class="form-check-label">
         <input type="radio" class="form-check-input" name="modepayment">Annually
      </label>
    </div>
    <div class="form-check-inline">
     <label class="form-check-label">
       <input type="radio" class="form-check-input" name="modepayment">Semi-Annually
     </label>
    </div>
    <div class="form-check-inline disabled">
     <label class="form-check-label">
       <input type="radio" class="form-check-input" name="modepayment">Quarterly
     </label>
    </div>

    {{-- second row --}}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="example-date-input">Date Application</label>
        <input class="form-control" type="date" value="2019-01-01" id="example-date-input">
      </div>
      <div class="form-group col-md-6">
        <label for='fname'>TIN no.
        </label>
        <input type="text" class="form-control" name="tin">
      </div>
      </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for='fname'>DTI/SEC/CDA Registration
        </label>
        <input type="text" class="form-control" name="fname">
      </div>
      <div class="form-group col-md-6">
        <label for="lname">DTI/SEC/CDA Registration
        </label>
        <input type="text" class="form-control" name="lname">
      </div>
    </div>



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
</div>
  {!! Form::close() !!}
@endsection

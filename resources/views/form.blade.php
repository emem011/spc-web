@extends('layouts.app')

@section('content')
<<<<<<< HEAD
  <h1>Please Fill Out the Form</h1>
<<<<<<< HEAD
  {!! Form::open(['action' => 'Register@store', 'method' => 'POST']) !!}
=======
  <p>1.	Provide accurate information and print legibly to avoid delays. Incomplete form will be returned to the applicant.<br>
     2. Ensure that all documents attached to this form (if any) are complete and properly filled out.
  </p>
  <p><b>1.	BASIC INFORMATION </b>
  </p>
=======
  <h1 class="mb-5" align="center">Please Fill Out the Form</h1>
  <div>
    <p><b>INSTRUCTION </b></p>
    <p class="mb-4"><font color="red">1.	Provide accurate information and print legibly to avoid delays. Incomplete form will be returned to the applicant.<br>
    2. Ensure that all documents attached to this form (if any) are complete and properly filled out.
    </p></font>
  </div>

  {{-- APPLICATION
        SECTION
          1  --}}
  <div class="mt-5">
    <p align="center"><b>1.	BASIC INFORMATION </b></p>
  </div>
>>>>>>> 9af9de9072a8dcd664bc81859a1e2cc76cea5875
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
    <div>
      <div class="form-check-inline mb-4">
        <label class="form-check-label">Mode of Payment:
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
    </div>

    {{-- second row --}}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dateapp">Date Application</label>
        <input class="form-control" type="date" value="2019-01-01" id="dateapp">
      </div>
      <div class="form-group col-md-6">
        <label for='tin'>TIN no.
        </label>
        <input type="text" class="form-control" name="tin">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for='dti1'>DTI/SEC/CDA Registration
        </label>
        <input type="text" class="form-control" name="dti3">
      </div>
      <div class="form-group col-md-6">
        <label for="dti2">DTI/SEC/CDA Registration
        </label>
        <input type="text" class="form-control" name="dti2">
      </div>
    </div>

    {{-- thrid row --}}
    <div>
      <div class="form-check-inline mb-4">
        <label class="form-check-label">Type of Business:
           <input type="radio" class="form-check-input" name="typeofbusiness">Single
        </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" name="typeofbusiness">Partnership
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" name="typeofbusiness">Corporation
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" name="typeofbusiness">Cooperative
       </label>
      </div>
    </div>
    <div>
      <div class="form-check-inline mb-4">Amendment: &nbsp;
        <label class="form-check-label">From:
           <input type="radio" class="form-check-input" name="amendfrom">Single
        </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" name="amendfrom">Partnership
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" name="amendfrom">Corporation
       </label>
      </div>
    </div>
    <div>
      <div class="form-check-inline mb-4">Amendment: &nbsp;
        <label class="form-check-label">To:
           <input type="radio" class="form-check-input" name="amendto">Single
        </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" name="amendto">Partnership
       </label>
      </div>
      <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input" name="amendto">Corporation
       </label>
      </div>
    </div>

    <div class="form-check-inline mb-4">Are you enjoying tax incentive from any Government Entity? &nbsp;
      <label class="form-check-label">
         <input type="radio" class="form-check-input" name="entity">Yes
      </label>
    </div>
    <div class="form-check-inline">
     <label class="form-check-label">
       <input type="radio" class="form-check-input" name="entity">No
     </label>
    </div>

    <p align="center">Name of Taxpayer / Registrant </p>

>>>>>>> 15d4c7a1ad975747854a7941cdcb07d9d3a69501
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for='fname'>Last Name</label>
      <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
    <div class="form-group col-md-4">
      <label for="lname">First Name</label>
      <input type="text" class="form-control" name="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-4">
      <label for="lname">Middle Name</label>
      <input type="text" class="form-control" name="mname" placeholder="Middle Name">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Business Name</label>
    <input type="text" class="form-control" name="busname" placeholder="Business Name">
  </div>
  <div class="form-group">
    <label for="address">Trade Name/Franchise</label>
    <input type="text" class="form-control" name="franchise" placeholder="Trade Name/Franchise">
  </div>

  {{-- APPLICATION
        SECTION
          2  --}}

  <div class="mt-5">
    <p align="center"><b>2.	OTHER INFORMATION </b></p>
  </div>
  <div>
    <p class="mb-4"><font color="red">Note:<b> For renewal applications,</b> do not fill up this section unless certain information have changed.
    </p></font>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="city">Business Address</label>
      <textarea type="text" class="form-control" name="businessadd" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="postalcode">Postal Code</label>
      <input type="number" class="form-control" id="postalcode">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Email Adress</label>
      <input type="email" class="form-control" id="inputAddress" placeholder="example@email.com">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="telephone">Telephone</label>
        <input class="form-control" type="tel" id="telephone" placeholder="539-966">
    </div>
    <div class="form-group col-md-6">
      <label for="telephone">Mobile No.</label>
        <input class="form-control" type="tel" id="mobile" placeholder="09XX XXX XXXX">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email Adress</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="example@email.com">
  </div>


  <div class="form-row mt-5">
    <div class="form-group col-md-12">
      <label for="city">Owner's Adress</label>
      <textarea type="text" class="form-control" name="businessadd" placeholder="Bdlg#/Street/Brgy/City" rows="2"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="postalcode">Postal Code</label>
      <input type="number" class="form-control" id="postalcode">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAddress">Email Adress</label>
      <input type="email" class="form-control" id="inputAddress" placeholder="example@email.com">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="telephone">Telephone</label>
        <input class="form-control" type="tel" id="telephone" placeholder="539-966">
    </div>
    <div class="form-group col-md-6">
      <label for="telephone">Mobile No.</label>
        <input class="form-control" type="tel" id="mobile" placeholder="09XX XXX XXXX">
    </div>
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

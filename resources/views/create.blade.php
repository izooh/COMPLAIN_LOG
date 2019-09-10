@extends('layouts.custom')
@section('content')
<form method="POST" action="{{route('addnew')}}">
        <div class="form-group">
          <label>Phone number</label>
          <input type="text" class="form-control"  placeholder="Enter phone number" name="phone">
         
        </div>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="complain">
                  <option selected>Complain Categories</option>
                  <option value="Excessive Calls">Excessive Calls </option>
                  <option value="Rude Agent">Rude Agent</option>
                  <option value="Excessive SMS">Excessive SMS</option>
                  <option value="Verbal Abuse">Verbal AbuseS</option>
                  <option value="SMS Abuse">SMS Abuse</option>
                  <option value="Legal">Legal</option>
                  <option value="Regulatory">Regulatory</option>
                  <option value="Credit Reporting">Credit Reporting</option>
                  <option value="Payment not received">Payment not received</option>
                  <option value="Not happy with fees or non approval">Not happy with fees or non approval</option>

                </select>
              </div>
             
              <div class="form-group"> <!-- Date input -->
                <label class="control-label" for="date">Date</label>
                <input class="form-control" id="date" name="complain_date" placeholder="MM/DD/YYY" type="text"/>
              </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
      @endsection
     
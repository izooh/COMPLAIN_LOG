<template>
  <div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form@submit.prevent='sendData'>

        <div class="form-group">
          <label>Phone number</label>
          <input type="text" class="form-control"  placeholder="Enter phone number" v-model="phone">
         
        </div>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" v-model="complain">
                  <option selected>Complain Categories</option>
                  <option value="Excessive Calls">Excessive Calls </option>
                  <option value="Rude Agent">Rude Agent</option>
                  <option value="Excessive SMS">Excessive SMS</option>
                  <option value="Verbal Abuse">Verbal Abuse</option>
                  <option value="SMS Abuse">SMS Abuse</option>
                  <option value="Legal">Legal</option>
                  <option value="Regulatory">Regulatory</option>
                  <option value="Credit Reporting">Credit Reporting</option>
                  <option value="Payment not received">Payment not received</option>
                  <option value="Not happy with fees or non approval">Not happy with fees or non approval</option>

                </select>
              </div>
             
             
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
</template>
<script>
export default {
  data(){
    return{
      phone:'',
      complain:''
    }
  }
}
</script>
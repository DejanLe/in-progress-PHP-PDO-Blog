<!-- Contact-form --> 
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Contact me</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact me !</h4>
         <form>
            <div class="form-group"> 
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your email" required="Please enter yor email">
            </div>
            <div class="form-group">
               <input type="text" name="text" class="form-control" placeholder="Enter Your meassage" required="Please enter yor message" >
               
            </div>
             
            <button type="submit" class="btn btn-default">Submit</button>
          </form>

      </div>
      <div class="modal-body">
        <p>Thanks !</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
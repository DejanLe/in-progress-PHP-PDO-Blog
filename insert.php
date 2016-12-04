<?php 
include('header.php');
?>
<div class="forma">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<form>
    <div class="form-group">
		    <label>Title</label>
		    <input type="text" class="form-control" name="title" placeholder="Title">
		  </div>
    <div class="form-group">
		  <label>Description</label>
		  <textarea class="form-control" rows="3" name="content"  placeholder="Description"> 
		  </textarea>  
  	</div>
  <div class="form-group">
    <label for="exampleInputFile">Picture input</label>
    <input type="file">
    <p class="help-block">Include picture for your blog</p>
  </div>
   
  <button type="submit" class="btn btn-default">Submit</button>

</form>
</div>

</div><!--end forma-->
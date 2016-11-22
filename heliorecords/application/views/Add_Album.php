<div>
<a data-toggle="modal" href="#myModal" class = "btn btn-success">Add new  </a>
      <div class="container">
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new Album</h4>
        </div>
        <div class="modal-body">

          
          <form class="form-horizontal" method = "POST" action="<?php echo base_url('login_controller/insert?id=albums&');  ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Image Link:</label>
      <div class="col-sm-10">
        <button type="button" class="btn btn-default">Browse</button>
        <input type="text" name="image" class="form-control" id="image" placeholder="Browse image" required autofocus>
        
      
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cat">Category:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cat" name="cat" placeholder="Enter category" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="art">Artist:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="art" name="art" placeholder="Enter Artist Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pro">Produced:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pro" name="pro" placeholder="Enter category" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="det">Detail:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="det" name="det" placeholder="Enter album details here" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gen">Genre:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="gen" name="gen" placeholder="Enter Genre" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tag">TAG:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tag" name="tag" placeholder="Enter Tags" required>
      </div>
    </div>
    <button id="submit" name="submit" type="submit"  class="btn btn-default" >Add</button>
  </form>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>
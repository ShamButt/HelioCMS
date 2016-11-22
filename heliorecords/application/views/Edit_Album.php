<div>

  
<?php

// Access $dataId like this way and use any where you want in this modal. 

$dataId=$_GET['dataId'];
?>
  <!-- Modal -->
  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new Album</h4>
        </div>
        <div class="modal-body">

          
          <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><?php echo $dataId?> Image Link:</label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-default">Browse</button>
        <input type="email" class="form-control" id="email" placeholder="Browse image"  required autofocus>
        
      
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter Title" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cat">Category:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cat" placeholder="Enter category" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="art">Artist:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="art" placeholder="Enter Artist Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pro">Produced:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pro" placeholder="Enter category" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="det">Detail:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="det" placeholder="Enter album details here" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gen">Genre:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="gen" placeholder="Enter Genre" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tag">TAG:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tag" placeholder="Enter Tags" required>
      </div>
    </div>
    <button type="submit" class="btn btn-default" data-dismiss="modal">Add</button>
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
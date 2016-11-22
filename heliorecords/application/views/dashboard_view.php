<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <title>CMS Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/heliorecords/custom/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="http://localhost/heliorecords/custom/css/dashboard.css" rel="stylesheet">

    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('login_controller/view_dashboard'); ?>">CMS | HELIORECORDS CMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://localhost/heliorecords/index.php/login_controller/logout">Logout</a></li>
            
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo base_url('login_controller/view_dashboard'); ?>">Albums <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo base_url('login_controller/view_artist'); ?>">Artists</a></li>
            <li><a href="<?php echo base_url('login_controller/view_latest'); ?>">Latest News And Events</a></li>
            <li><a href="<?php echo base_url('login_controller/view_past'); ?>">Past Events</a></li>
            <li><a href="<?php echo base_url('login_controller/view_youtube'); ?>">Youtube Video</a></li>
          </ul>
          
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            
          </div>
			
          <h2 class="sub-header">Albums Details</h2>
		  <?php include("Add_Album.php");?>
      
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Artist</th>
                  <th>Produced</th>
                  <th>Genre</th>
                  <th>Tag</th>
				  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($albums as $album) {?>
                <tr id="tbl_row_<?php echo $album->id;?>">
                  <td id="tbl_row_id_<?php echo $album->id;?>"><?php echo $album->id; ?></td>
                  <td id="tbl_row_title_<?php echo $album->id;?>"><?php echo $album->title; ?></td>
                  <td id="tbl_row_cat_<?php echo $album->id;?>"><?php echo $album->category; ?></td>
                  <td id="tbl_row_artist_<?php echo $album->id;?>"><?php echo $album->artist; ?></td>
                  <td id="tbl_row_produced_<?php echo $album->id;?>"><?php echo $album->produced; ?>
                  </td>
                  <td id="tbl_row_genre_<?php echo $album->id;?>"><?php echo $album->genre; ?></td>
                  <td id="tbl_row_tag_<?php echo $album->id;?>"><?php echo $album->tag; ?></td>
				  <td><button class="btn btn-success btn-sm button" data-id="<?php echo $album->id; ?>" data-toggle="modal" data-target="#editModal" class="modalLink">
Edit
</button><a href="<?php echo base_url('login_controller/delete?id='); echo $album->id; echo "&a=albums"; ?>" class = "btn btn-danger">  Delete</a></td>
                </tr>
                <?php } ?>

                
              </tbody>
            </table>
          </div>
			<div class = "row">
				<div class="col-md-6">
					
				<div class="col-md-6">
					<?php include("Edit_Album.php");?>
				</div>
		  </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
          $('.modalLink').click(function(){
              var dataId=$(this).attr('data-id');
              $.ajax({url:"Edit_Album.php?dataId="+dataId,cache:false,success:function(result){
                  $(".modal-content").html(result);
              }});
          });
</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

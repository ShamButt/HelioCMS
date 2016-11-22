<?php include("header.php");?>
<body class="archive post-type-archive post-type-archive-noo_album offcanvas-close  page-right-sidebar full-width-layout theme-light wpb-js-composer js-comp-ver-4.7.4 vc_responsive">

	<div class="site">

	
	            <div class="noo-page-heading" style="margin-bottom: 20px; padding: 25px 0px;">
            <div class="container">
                <div class="noo-page-breadcrumb">
                    

	<div class="breadcrumb-wrap">
        Wild Life Volume 3	</div>
                </div>
            </div><!-- /.container-boxed -->
        </div>
    </div>

<div class="container-wrap noo-archive-album">
	<div class="main-content container">
		<div class="row">
			<div class="noo-main">
				<div class="noo_albums-wrap clearfix">
					<h3 style="text-align: center;"> <span style="border-bottom: 1px solid red;">FREE MUSIC</span></h3>
					
					<ul class="noo_albums">
												<?php
                            foreach($freeMusic as $event){ ?>	<li class="col-md-4 col-sm-6 post-1134 noo_album type-noo_album status-publish has-post-thumbnail hentry album_genre-dance album_genre-free album_artist-beni-haze album_tag-free has-featured">
								<div class="noo_album-container">
									<figure>
										<div class="noo_album-wrap">
											<div class="noo_album-images">
												<a href="#">
													<img width="500" height="600" src="<?php echo $event->image;  ?>" alt="<?php echo $event->title; ?>">												</a>
											</div>
										</div>
										<figcaption>
											<div class="noo_album-info">
												<h3 class="noo_album_title"><a href="#"><?php echo $event->title;?></a></h3>
												<div class="noo_album-category"><p><?php echo $event->genre;?></p><a href="#" rel="tag"><?php echo $event->tag;?></a></div>
											</div>
											<div class="noo_album-loop-actions">
                                                <a href="#"><i class="fa fa-link"></i> Detail</a>
                                                													<a href="http://heliorecords.com/albums/#" data-songs="[]" class="add-to-playlist-btn"><i class="fa fa-plus"></i> Add to Playlist</a>
																							</div>
										</figcaption>
									</figure>
								</div>
							</li>
													
											</ul>
										<?php } ?>
				</div>
							</div>
		</div>
	</div>
</div> <!-- /#top.site -->
      <?php include("footer.php");?>
  </body>
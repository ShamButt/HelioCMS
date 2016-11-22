
<?php include("header.php");?>
<div class="container-wrap">	
        <!---- CONTENT AREA START ---->
        
	<div class="main-content container-fullwidth">
       <div class="youtube-video">
       <iframe src="<?php echo $youtubeVideo[0]->video;?>"
   width="560" height="315" frameborder="0" allowfullscreen></iframe>
       </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1453593021272"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">		<style>
		.content-meta{ color: #C3C3C3 !important; }
		</style>
        
        <!------ LATEST NEWS AND EVENTS START ------>
        <div class="noo-shortcode-events grid">
            <div class="noo-grid-header-events">
                <span class="icon">
                    <i class="fa fa-bell"></i>
                </span>
                
                    <h2 class="sh-event-title">
                        Latest News and Events                    </h2>
                                            </div>    
            <div class="row">
                                    
                           <?php
                            foreach($latestNewsAndEvents as $event){ ?>
                           <div class="col-md-4 col-sm-6">
                            <div class="noo-sh-grid-event">
                                <div class="noo-thumbnail">
                                    <img width="620" height="414" src="<?php echo $event->image;?>" class="attachment-large size-large wp-post-image" alt="4_4" srcset="" sizes="(max-width: 620px) 100vw, 620px">                                </div>
                                <div class="noo-shevent-content">
                                    <h4> <a href="http://localhost/heliorecords/index.php/artist_controller/artist_details?id=<?php  echo $event->id;?>">
									<?php echo $event->title;?></a></h4>
                                    <div class="sh-meta">
                                        <p class="content-meta">
<span>
<i class="fa fa-calendar"></i>
<?php echo $event->date;?>
</span>

<span><i class="fa fa-eye"></i><?php echo $event->seen;?></span>
</p>                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php } ?>
                        </div>
                        </div>
        <div class="more-news"><a href="#"><h4>More News & Events</h4></a></div>

        <!---- LATEST NEWS AND EVENT SECTION END ----->
        
        <!---- PAST EVENT SECTION START ---->
        
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1451115690102">
        <div class="container">
        <div class="row">
        <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="wpb_wrapper">        
        <div class="noo-shortcode-events grid">
        <div class="noo-grid-header-events">
                <span class="icon">
                    <i class="fa fa-calendar"></i>
                </span>
                
                    <h2 class="sh-event-title">
                        Past Events                    </h2>
                                            </div>
        <div class="noo-sh-event-content row">
        
         <?php foreach($pastEvents as $eevent){ ?>
                                        <div class="col-md-4 col-sm-6">
                            <div class="noo-sh-grid-event">
                                <div class="noo-thumbnail">
                                    <img width="900" height="900" src="<?php echo $eevent->image;?>" class="attachment-large size-large wp-post-image" alt="B&amp;L Camp Trill Deffie" srcset="" sizes="(max-width: 900px) 100vw, 900px">                                </div>
                                <div class="noo-shevent-content">
                                    <h4><a href="http://localhost/heliorecord/Camp-Trill-Summer.php"><?php echo $eevent->title;?></a></h4>
                                    <div class="sh-meta">
                                        <span class="sh-time-event"><i class="fa fa-clock-o"></i><span class="tribe-event-date-start"><?php echo $eevent->time;?></span></span>
                                        <span class="sh-address"><i class="fa  fa-map-marker"></i><?php echo $eevent->location;?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        
                            <?php } ?>
                        </div>
                            </div>
        </div>
        </div></div></div></div>
        
        <!---- PAST EVENT SECTION END ---->
        
        <!---- FREE MUSIC SECTION START ---->
        
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1453593786059"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">        <div class="wrap">
            <div class="container">
                <div class="noo-grid-header-events header-featured-albums">
                    <span class="icon">
                        <i class="fa fa-music"></i>
                    </span>
                    
                        <h2 class="sh-event-title">
                            Free Music                        </h2>
                                                        </div>
            </div>


            <ul class="clearfix noo-featured-albums owl-carousel owl-theme" style="opacity: 1; display: block;">
                
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1872px; left: 0px; display: block;">
                        
                        
                          <?php foreach($freeMusic as $album){ ?>
                        <div class="owl-item active" style="width: 234px;"><li>
                            <div class="sh-featured-albumns-item">
                                <img width="800" height="600" src="<?php echo $album->image; ?>" class="attachment-large size-large wp-post-image" alt="WILD LIFE VOL.1" srcset="" sizes="(max-width: 800px) 100vw, 800px">                                <div class="sh-top">
                                    <h3 class="product_title"><a href="http://localhost/heliorecord/Wild%20Life%20Volume%201.php"><?php echo $album->title;?></a></h3>
                                </div>
                                <div class="sh-bottom">
                                    <div class="shop-info">
                                        <h3 class="product_title"><a href="http://localhost/heliorecord/Wild%20Life%20Volume%201.php"><?php echo $album->title; ?>	</a></h3>
                                        <div class="product-category"><p><?php echo $album->genre; ?></p></div>
                                    </div>
                                    <div class="shop-loop-actions">
                                        <a class="button" href="#"><i class="fa fa-link"></i> Detail</a>
                                                                                                                                                                            <a href="#" data-songs="[]" class="add-to-playlist-btn button"><i class="fa fa-plus"></i> Add to Playlist</a>
                                                                                                                        </div>
                                </div>
                            </div>
                        </li></div>
                        <?php } ?>
                        </div></div>

                    
                        

                    
                        

                    
                        

                                <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div></div></ul>
        </div>
       
    </div></div></div></div></div>
    
        <!---- FREE MUSIC SECTION END ---->
     
        <!---- GO TOP SECTION START ---->
             
    <div class="vc_row wpb_row vc_row-fluid"><div class="nocontainer"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">                <div class="noo-line">
                    <i class="go-to-top fa fa-angle-up"></i>
                </div>
            </div></div></div></div>
            
        <!---- GO TOP SECTION END ---->
            
        <!---- LAST SECTION START ---->
        
            <div class="vc_row wpb_row vc_row-fluid"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
	<div class="wpb_raw_code wpb_content_element wpb_raw_html">
		<div class="wpb_wrapper">
			<div style="margin-bottom: 20px; text-align: center;"><h2 style="text-transform: uppercase;">Interested in booking a Helio artist?</h2>
<a style="color: #676666;" href="mailto:booking@heliorecords.com"><i class="fa fa-envelope"></i> booking@heliorecords.com</a></div>
		</div>
	</div>
</div></div></div></div></div>

        <!---- LAST SECTION END ---->
                    	</div>
       
        <!---- CONTENT AREA END ---->
                        
</div></div></div>
<?php include("footer.php");?>
        
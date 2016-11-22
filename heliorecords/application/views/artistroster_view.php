<?php include("header.php");?>

<body class="page page-id-449 page-template-default offcanvas-close  page-fullwidth full-width-layout theme-light wpb-js-composer js-comp-ver-4.7.4 vc_responsive no_padding">

	<div class="site">

	
	            <div class="noo-page-heading" style="margin-bottom: 20px; padding: 25px 0px;">
            <div class="container">
                <div class="noo-page-breadcrumb">
                    

	<div class="breadcrumb-wrap">
        Artist Roster	</div>
                </div>
            </div><!-- /.container-boxed -->
        </div>
    

<div class="container-wrap">
		
	<div class="main-content default-p container">
		
		<div class="row">
			
			<div class="noo-main noo-smart-content col-md-12  noo-page" role="main">
				<!-- Begin The loop -->
			<div class="vc_row wpb_row vc_row-fluid"><div class="nocontainer"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">        <div class="noo_team">
                                    <!--Noo team contents-->
            <div class="row noo-team-contents">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="noo_team_item">
                                     <?php foreach($artists as $artist){ ?>
                                <!--Team thumbnail-->
                                <div class="team_thumbnail">
            <img width="552" height="520" src="<?php echo $artist->image; ?>" class="attachment-full size-full" alt="<?php echo $artist->name; ?>"
             sizes="(max-width: 552px) 100vw, 552px">                                   
                                     <div class="team-info">
                                        <h4 class="team_name"><?php echo $artist->name; ?></h4>
                                        <span class="team_position"><?php echo $artist->genre; ?></span>
                    <a href="#" class="hidden-md hidden-lg btn btn-sm btn-success">More..</a>
                                    </div>
                                </div>
                                <!--End Team thumbnail-->

                                <!--Team Detail-->
                                <div class="team-detail">
                                    <div class="team-detail-position">
                                        <p class="ds"><?php echo $artist->detail; ?></p>
                                        <div class="team_socials">
                                        <span class="team_social">
                                                    <span class="social-name">Follow on twitter</span>
                                                    <a href="https://twitter.com/benihaze" class="fa fa-twitter"></a>
                                                </span>
                                                                                                                                                                                                                                                                                                                    >
                                                    <span class="social-name">Follow on instagram</span>
                                                    <a href="https://instagram.com/henibaze/" class="fa fa-instagram"></a>
                                                </span>
                                             </div>
                                        <div style="text-align: center;" class="center more_btn">
                                     <a href="http://heliorecords.com/noo-team/beni-haze/" class="btn btn-sm btn-success">More..</a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Team Detail-->
                              <?php  }?>
                            </div>
                        </div>
                    
                                            
                                           
                                </div>
            <!--End team contents-->
            <div style="text-align: center; border: 1px solid #FF0000; padding: 10px 10px 25px 10px; background-color: rgb(217, 31, 38); border-radius: 10px;">
            	<h2 style="text-transform: uppercase;">Interested in booking a Helio artist?</h2>
		<a href="mailto:booking@heliorecords.com"><i class="fa fa-envelope"></i> booking@heliorecords.com</a>
	    </div>
        </div>
        </div></div></div></div>
                        													<!-- End The loop -->
			</div> <!-- /.main -->
		</div><!--/.row-->
	</div><!--/.container-boxed-->
</div>

<?php include("footer.php");?>

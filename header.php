<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>


</head>


<body <?php body_class();?>>


<header class="sticky-top myHeader">

<div class="container">
    <div class="col-lg-10" >
        <div class="row ">
            <div class="col-1" >			
                <a class="navbar-brand" href="#">
                    <img width="75"  src="<?php echo get_site_url();?>/wp-content/uploads/2020/10/logo1234512.png" alt="Logo">
                </a>
            </div>  
            <div class="col">
                <!-- navigation start -->
                <nav class="navbar navbar-expand-lg navbar-light py-3" style="min-width:100%;">	
                        <?php
                            wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                            ));
                        ?>
                </nav>        
            </div>             
        </div>               
    </div>    
</div>  
<?php get_search_form(); ?> 
</header>
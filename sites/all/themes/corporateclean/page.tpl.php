<!-- Header. -->
<div id="header">

    <div id="header-inside">
    
        <div id="header-inside-left">
            
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
     
            <?php if ($site_name || $site_slogan): ?>
            <div class="clearfix">
            <?php if ($site_name): ?>
            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <span id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
            </div><!-- /site-name-wrapper -->
            <?php endif; ?>
            
        </div>
            
        <div id="header-inside-right">
		<?php print render($page['search_area']); ?>    
        </div>
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- Header Menu. -->
<div id="header-menu">

<div id="header-menu-inside">
    <?php 
	$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
	print drupal_render($main_menu_tree);
	?>
</div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

<!-- Banner. -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!--slideshow-->
    <div id="slideshow">
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
                <div class="left-pane">
                	<img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/drupal.jpg"/>
                </div>
                <div class="right-pane">
                	<div>
		                <h2>Why Drupal?</h2>
		                <strong>Key Features</strong>
	              	</div>
	                <div class="pane-item">
	                	<ul>
	                		<li>Leading CMS</li>
	                		<li>User Management</li>
	                		<li>E-Commerce</li>
	                		<li>Security</li>
	                	</ul>
	                </div>
	                <div class="pane-item">
	                	<ul>
	                		<li>Site Search</li>
	                		<li>Poll</li>
	                		<li>Syndication</li>
	                		<li>News Aggregator</li>
	                	</ul>
	                </div>
	                <div class="pane-item">
	                	<ul>
	                		<li>Blogs</li>
	                		<li>Forums</li>
	                		<li>Themes</li>
	                		<li>SEO</li>
	                	</ul>
	                </div>
	                <div><strong>Example Sites</strong></div>
	                <div class="pane-item">
	                	<ul>
	                		<li>Corporate Site</li>
	                		<li>News Portal</li>
	                		<li>Video Portal</li>
	                		<li>Music Portal</li>
	                	</ul>
	                </div>
	                <div class="pane-item">
	                	<ul>
	                		<li>Photography Site</li>
	                		<li>Community Site</li>
	                		<li>Links Site</li>
	                		<li>Blog Site</li>
	                	</ul>
	                </div>
              	</div>
                <!--EOF:slider-item content-->
                
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
            
                <!--slider-item content-->
                <div style="float:right; padding:0 0 0 30px;">
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-2.jpg"/>
                </div>
                <h2>Services</h2>
                <strong>What We Provide?</strong><br/>
                <br/>
                Custom Content Types, Custom Node Templates, Custom Taxonomy Term Pages, Advanced Views Theming, Views Integrated Sliders, Custom Search Templates, Search Engine Optimization Consultancy, XHTML Tableless Layout and much more...
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="#">Tell me more</a></div>
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content">
                
                <!--slider-item content-->
                <img height="250px" class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-3.jpg"/>
                <!--EOF:slider-item content-->
            
            </div>
        </div>
        <!--EOF:slider-item-->
    
    </div>
    <!--EOF:slideshow-->
    
    <!--slider-controls-wrapper-->
    <div id="slider-controls-wrapper">
        <div id="slider-controls">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!--EOF:slider-controls-wrapper-->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


<!-- Content. -->
<div id="content">

    <div id="content-inside" class="inside">
    
        <div id="main">
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->
        
        <div id="sidebar">
             
            <?php print render($page['sidebar_first']); ?>

        </div><!-- EOF: #sidebar -->

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- Slider -->    
<div id="slider_region">

    <div id="slider_region_inside">
    <?php print render($page['slider_region']); ?>
    </div><!-- EOF: #slider-inside -->

</div><!-- EOF: #slider -->

<!-- Slider -->

<!-- Footer -->    
<div id="footer">

    <div id="footer-inside">
    
        <div class="footer-area first">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area second">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area third">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- Footer -->    
<div id="footer-bottom">

    <div id="footer-bottom-inside">
    
    	<div id="footer-bottom-left">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
        
        <div id="footer-bottom-right">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->

</div><!-- EOF: #footer -->


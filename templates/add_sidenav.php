<?php if (!is_front_page()){?>
    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
        <a id="nav-close" data-canvas=".canvas" data-target=".navmenu" data-recalc="false" data-toggle="offcanvas" class="navbar-toggle el-icon-remove-sign"></a>
        <?php /*?>
        <button id="nav-close" data-canvas=".canvas" data-target=".navmenu" data-recalc="false" data-toggle="offcanvas" class="navbar-toggle" type="button">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
        </button>
        <?php */?>
          <a class="navmenu-brand" href="#">Brand</a>
          <ul class="nav navmenu-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="http://jasny.github.io/bootstrap/examples/navmenu-reveal/#">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu navmenu-nav">
                    <li><a href="http://jasny.github.io/bootstrap/examples/navmenu-reveal/#">Action</a></li>
                    <li><a href="http://jasny.github.io/bootstrap/examples/navmenu-reveal/#">Another action</a></li>
                    <li><a href="http://jasny.github.io/bootstrap/examples/navmenu-reveal/#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="http://jasny.github.io/bootstrap/examples/navmenu-reveal/#">Separated link</a></li>
                    <li><a href="http://jasny.github.io/bootstrap/examples/navmenu-reveal/#">One more separated link</a></li>
                  </ul>
                </li>
          </ul>

<?php if ( is_page() ) { ?>

<ul class="nav navmenu-nav">
<?php
wp_list_pages(array(
    'title_li' => null,
    'depth' => 0,
    'child_of' => 0,
    'walker' => new My_Walker_1()
));
?>
</ul><!-- .timeline -->    



<?php } ?>    
</nav>


<nav id="navigation" class="" role="navigation"> 
<?php
if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'sidenav' ) ) {
wp_nav_menu( array('depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fr', 'theme_location' => 'sidenav' ) );
} else {
?>
    <ul id="main-nav" class="nav fl">
		<?php if ( is_page() ) $highlight = 'page_item'; else $highlight = 'page_item current_page_item'; ?>
        <li class="<?php echo $highlight; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
        <?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?> 
    </ul><!-- /#nav -->
<?php } ?>
<//nav>            

    
    <div id="side-nav-holder" class="clearfix hidden-xs">
        <!--this is a menu -->
        <nav id="side-nav" class="side-nav" role="navigation">
          <?php if (has_nav_menu('sidenav')) {
              wp_nav_menu( array( 'theme_location' => 'sidenav', 'menu_class' => 'list-group' ) );
			  } else {
				// do stuff for all other pages
			}?>
        </nav>
        <!--this is a sidebar   --> 
        <div class="sidebar">
            <?php if ( is_active_sidebar( 'left-sidebar' )) : ?>
                <?php dynamic_sidebar('left-sidebar'); ?>
            <?php endif; ?>
        </div>
    </div> 
<?php } ?>


<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Welearner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $_welearner_header_login = esc_html(get_theme_mod('_welearner_header_login'));?>
<?php $_welearner_header_login_url = esc_url(get_theme_mod('_welearner_header_login_url'));?>
<?php $_welearner_header_getstarted = esc_html(get_theme_mod('_welearner_header_getstarted'));?>
<?php $_welearner_header_getstarted_url = esc_url(get_theme_mod('_welearner_header_getstarted_url'));?>



<header>
            <!-- Header Area Section Start -->  
            <section  class="header-area transparent-header">
                <div class="container d-none d-lg-block">
                    <div class="row menu-area">   
                        <div class="col-xl-2 col-lg-2 d-flex align-items-center">
						<?php if(has_custom_logo( )) {?>
						<div class="img-logo">
						<?php the_custom_logo(); ?>
						</div>
						<?php } else { ?>
                            <div class="text-logo">
                                <a href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
                            </div>
						<?php } ?>
                        </div>
                        
                        <div class="col-xl-8 col-lg-8 ">
                            <div class="main-menu f-right">
                                <nav>
                                    <?php wp_nav_menu( array('theme_location' => 'main-menu') ) ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 ">
                            <div class="top-button-area f-right">
                               <?php if($_welearner_header_login) { ?>
                                    <a class="login-btn" href="<?php echo $_welearner_header_login_url ;?>"><?php echo $_welearner_header_login;?></a>
							   <?php } ?>
							   <?php if($_welearner_header_getstarted) { ?>
                                    <a class="btn header-btn" href="<?php echo $_welearner_header_getstarted_url ;?>"><?php echo $_welearner_header_getstarted;?></a>
								<?php } ?>
                               
                            </div>
                            
                        </div>

                        
                    </div>
                </div>

                <div class="mobile-menu-area d-lg-none d-block fix">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                     <?php wp_nav_menu( array('theme_location' => 'main-menu') ) ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="mobile-logo-area d-lg-none d-block fix pt-50 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <div class="mobile-logo">
                                    <?php if(has_custom_logo( )) {?>
                                <div class="img-logo">
                                <?php the_custom_logo(); ?>
                                </div>
                                <?php } else { ?>
                                    <div class="text-logo">
                                        <a href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-7">
                        <div class="top-button-area f-right">
                               <?php if($_welearner_header_login) { ?>
                                    <a class="login-btn" href="<?php echo $_welearner_header_login_url ;?>"><?php echo $_welearner_header_login;?></a>
							   <?php } ?>
							   <?php if($_welearner_header_getstarted) { ?>
                                    <a class="btn" href="<?php echo $_welearner_header_getstarted_url ;?>"><?php echo $_welearner_header_getstarted;?></a>
								<?php } ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Area Section End -->  
		</header>
			<?php if( ! is_front_page() ) { ?>

			 <section class="breadcrumb_section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="breadcrumb-big">
								<h1><?php get_breadcrumb2(); ?></h1>
							</div>
							<!--<nav aria-label="breadcrumb">
							  <ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Blog</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog single post</li>
							  </ol>
							</nav>--> 
							<div class="breadcrumb-small"><?php get_breadcrumb(); ?></div>
						</div>
					</div>
				</div>
			</section>
			 <?php } ?>
			<!-- END HEADER --> 
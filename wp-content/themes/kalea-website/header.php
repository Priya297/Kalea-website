<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage kaleawebsite
 * @since kaleawebsite 1.0
 */

$main_logo 		=	get_field('main_logo','option');
$contact_link 	=	get_field('contact_link','option');
$phone_no 		=	get_field('phone_no','option');
$club_logo 		=	get_field('club_logo','option');



?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />		
		<?php wp_head(); ?>		
		<?php head_section_script(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php site_loader(); ?>
		<?php scipt_print_in_body(); ?>
		<?php wp_body_open(); ?>

		 <div id="page" class="site">		
<header id="masthead" class="site-header">	
	<!-- <div class="main-header container">
		<div class="row">
			<div class="col-12 col-lg-4"> -->
				<?php  //logo_header(); 	?>
				<!-- hamburger start -->
				    <div class="hamburger-box">
			    		<span class="menu-line"></span>
			    		<span class="menu-line"></span>
			    		<span class="menu-line"></span>
					</div>
				<!-- hamburger end -->
			<!-- </div>
		</div>
	</div> -->
<div class="header-outer">
	<a href="<?php echo site_url();?>" class="header-logo">
		<img src="<?php echo $main_logo['url'];?>" alt="<?php echo $main_logo['alt'];?>">
	</a>

	<div class="header-right">
		<div class="header-right-1">
			<div class="header-right-top">
				<ul class="topbar">
					<li>Zoeken<?php get_search_form();?></li>
					<li><a href="<?php echo $contact_link['url'];?>" title="<?php echo $contact_link['title'];?>"><?php echo $contact_link['title'];?></a></li>
					<li><a href="tel:<?php echo str_replace(' ', '', $phone_no);?>" title="<?php echo str_replace(' ', '', $phone_no);?>"><span class="fas fa-phone"></span> <?php echo $phone_no; ?></a></li>
				</ul>
			</div>

<div class="header-right-bottom">
	<div class="main-menu">
		<ul class="menu-level-1">
			<?php $i=1;
			if(have_rows('header_main_menu','option')):
				while(have_rows('header_main_menu','option')): the_row();
					$menu_link =	get_sub_field('menu_link');
					$category_menu = get_sub_field('category_menu');
			?>
				<li class="<?php if(!empty($category_menu)){ echo "hash-filter"; }?>"><a href="<?php echo $menu_link['url']; ?>" title="<?php echo $menu_link['title'];?>" class="<?php if($i==6){ echo "menu-btn"; } ?>"><?php echo $menu_link['title'];?></a>
					<?php if(!empty($category_menu)){ ?>
						<div class="submenu-outer">
							<div class="submenu-inner">
								<ul class="menu-level-2">
									<?php $ij=1;
									if(have_rows('category_menu','option')):
										while(have_rows('category_menu','option')): the_row();
											$category_link = get_sub_field('category_link');
											$sub_category_menu = get_sub_field('sub_category_menu');
									?>
									<li class="<?php if($ij==1){ echo "hover-active"; } if(!empty($sub_category_menu)){ echo " hash-filter";}
									?>">
										<a href="<?php echo $category_link['url'];?>" title="<?php echo $category_link['title'];?>"><?php echo $category_link['title'];?>
										</a>
										<?php if(!empty($sub_category_menu)){?>
										<ul class="menu-level-3">
											<?php $cnt=1;
											if(have_rows('sub_category_menu','option')):
										while(have_rows('sub_category_menu','option')): the_row();
											$menu = get_sub_field('menu');
											$sub_menu = get_sub_field('sub_menu','option');
										?>
											<li class="<?php if($cnt==13){ echo 'view-all-btn';} if(!empty($sub_menu)){ echo 'hash-filter';}?>">
												<a href="<?php echo $menu['url'];?>" title="<?php echo $menu['title'];?>" ><?php echo $menu['title'];?>
												</a>
												
							<ul class="menu-level-4">
							<?php if(have_rows('sub_menu','option')):
							while(have_rows('sub_menu','option')): the_row();
							$link = get_sub_field('link');
					?>
								<li><a href="<?php echo $link['url'];?>" title="<?php echo $link['title'];?>"><?php echo $link['title'];?></a>
								</li>
							<?php endwhile; endif; ?>	
							</ul>
						
											</li>
										<?php $cnt++; endwhile; endif; ?>
										</ul>	
									<?php }?>
									</li>
								<?php $ij++; endwhile; endif; ?>
								</ul>
							</div>
						</div>
					<?php } ?>
				</li>
			<?php $i++; endwhile; endif; ?>
		</ul>
	</div>
</div>
		</div>
		<?php if(!empty($club_logo)){ ?>
			<figure class="join-club-logo">
				<img src="<?php echo $club_logo['url'];?>" alt="<?php echo $club_logo['alt'];?>">
			</figure>
		<?php } ?>
	</div>
</div>
</header><!-- #masthead -->
<div class="main_site">
<?php

/**
 * British Judo Landing/Homepage page
 *
 * @author Dalvinderpal Soora
 * @since 1.0.0
 */

if ( ! ob_start( 'ob_gzhandler' ) ) {
	ob_start();
};

require_once __DIR__ . '/app/classes/class-british-judo-helper.php';
use BritishJudo24\Helper;
$helper = new Helper();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="British Judo | Discover the Spirit of Judo in the UK">
	<meta name="description" content="Join British Judo and embrace discipline, self-control, and community. Explore clubs, events, and membership benefits today.">
	<title>British Judo</title>
	<script src="<?php echo $helper->asset_url( '/js/main.js' ); ?>" defer></script>
	<link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
	<link rel="preload" as="script" href="https://kit.fontawesome.com/590322deee.js" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/590322deee.js" crossorigin="anonymous" defer></script>
	<link rel="stylesheet" href="<?php echo $helper->asset_url( '/css/main.css' ); ?>">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://britishjudo24.dalvinderpalssoora.co.uk/">
	<meta property="og:title" content="British Judo | Discover the Spirit of Judo in the UK">
	<meta property="og:description" content="Join British Judo and embrace discipline, self-control, and community. Explore clubs, events, and membership benefits today.">
	<meta property="og:image" content="<?php echo $helper->asset_url( '/img/branding/british-judo-cover.png' ); ?>">

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="https://britishjudo24.dalvinderpalssoora.co.uk/">
	<meta name="twitter:title" content="British Judo | Discover the Spirit of Judo in the UK">
	<meta name="twitter:description" content="Join British Judo and embrace discipline, self-control, and community. Explore clubs, events, and membership benefits today.">
	<meta name="twitter:image" content="<?php echo $helper->asset_url( '/img/branding/british-judo-cover.png' ); ?>">

</head>
<body>
	<header class="header">
		<div class="header__eyebrow">
			<div class="container">
				<p class="header__eyebrow--sponsor">
					Proudly sponsored by
					<img src="<?php echo $helper->asset_url( '/img/icons/adidas-icon.svg' ); ?>" alt="Adidas sponsor logo" />
				</p>
				<a class="header__eyebrow--stream-live" href="#" target="_blank" aria-label="Live streams section" role="link">Live streams <span></span></a>
				<nav class="header__eyebrow--nav" role="navigation" aria-label="Main navigation">
						<ul>
							<li><a href="#" target="_blank" aria-label="Learn about Safeguarding" role="link">Safeguarding</a></li>
							<li><a href="#" target="_blank" aria-label="Read the latest News" role="link">News</a></li>
							<li><a href="#" target="_blank" aria-label="Contact British Judo" role="link">Contact</a></li>
							<li><a href="#" target="_blank" aria-label="Visit the Shop" role="link">Shop</a></li>
						</ul>  
					</nav>
			</div>
		</div>
		<div class="header__main">
			<div class="container">
				<a class="header__main--logo" href="#" target="_blank" aria-label="Go to homepage" role="link"></a>
				<nav class="header__main--nav" role="navigation" aria-label="Main menu navigation">
					<ul>
						<li>
							<a href="#" target="_blank" aria-label="Get started with British Judo" role="link">Get started</a>
							<div class="header__main--nav-dropdown" aria-expanded="false" role="region">
								<div class="container">
									<h2>Get started<span></span></h2>
									<ul class="sub-menu">
										<li><a href="#" target="_blank" aria-label="Learn how to Get started with British Judo" role="link">Get started</a></li>
										<li><a href="#" target="_blank" aria-label="Join the British Judo Association (BJA)" role="link">Join BJA</a></li>
										<li><a href="#" target="_blank" aria-label="New to Judo? Start here" role="link">New to Judo</a></li>
										<li><a href="#" target="_blank" aria-label="Find a Judo club near you" role="link">Find a club</a></li>
										<li><a href="#" target="_blank" aria-label="Learn about Judo Insurance" role="link">Insurance</a></li>
										<li><a href="#" target="_blank" aria-label="Take part in Judo activities" role="link">Take part</a></li>
										<li><a href="#" target="_blank" aria-label="Try a Judo taster session" role="link">Taster sessions</a></li>
										<li><a href="#" target="_blank" aria-label="Explore Adaptive Judo" role="link">Adaptive Judo</a></li>
										<li><a href="#" target="_blank" aria-label="Learn about Kata in Judo" role="link">Kata</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="#" target="_blank" aria-label="Compete in Judo events" role="link">Compete</a></li>  
						<li><a href="#" target="_blank" aria-label="Access the Members Zone" role="link">Members Zone</a></li>
						<li><a href="#" target="_blank" aria-label="Learn about GB Judo" role="link">GB Judo</a></li>
						<li><a href="#" target="_blank" aria-label="Learn more about what British Judo does" role="link">What we do</a></li>
					</ul>
				</nav>
				<div class="header__main--search">
					<form role="search" method="get" class="header__main--search-form" action="#"> 
						<label for="main-search" class="sr-only">Site search</label> 
						<input type="search" name="s" value="" id="main-search" minlength="2" placeholder="Search" aria-label="Search the website">
						<button type="submit" id="main-search-submit" aria-label="Submit search"></button>
					</form>
				</div>
				<button class="header__main--search-toggle" aria-label="Toggle search form visibility" aria-expanded="false" role="button"></button>
				<a class="header__main--become-member" href="#" target="_blank" aria-label="Become a member of British Judo" role="link">Become a member</a>
			</div>
		</div>
	</header>

	<section class="hero">
		<video class="hero__video" autoplay muted loop aria-label="Video showcasing British Judo to promote self-control" poster="<?php echo $helper->asset_url( '/img/components/hero-reel-poster.webp' ); ?>" preload="none" data-src="<?php echo $helper->asset_url( '/video/hero-reel.webm' ); ?>">
			<source data-src="<?php echo $helper->asset_url( '/video/hero-reel.webm' ); ?>" type="video/webm">
			<source data-src="<?php echo $helper->asset_url( '/video/hero-reel.mp4' ); ?>" type="video/mp4">
		</video>
		<div class="container">
			<div class="hero__content">
				<p>Embrace</p>
				<h1>Self Control</h1>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<div class="news__grid">
				<div class="news__grid__col">
					<h3 class="news__grid__col__title">Latest news</h3>
					<a class="news__grid__col__link" href="#" target="_blank" aria-label="View all news articles">View all news</a>
				</div>
				<a class="news__grid__col" href="#" target="_blank" aria-label="Read article: Nominations now open for 2024 British Judo Awards">
					<p class="news__grid__col__cat">Clubs</p>
					<h4 class="news__grid__col__title">Nominations now open for 2024 British Judo Awards</h4>
					<span class="news__grid__col__date">July 9th, 2024</span>
				</a>
				<a class="news__grid__col" href="#" target="_blank" aria-label="Read article: GB set for European University Games">
					<p class="news__grid__col__cat">Coaching</p>
					<h4 class="news__grid__col__title">GB set for European University Games</h4>
					<span class="news__grid__col__date">July 8th, 2024</span>
				</a>
				<a class="news__grid__col" href="#" target="_blank" aria-label="Read article: GB set for European University Games">
					<p class="news__grid__col__cat">Latest news</p>
					<h4 class="news__grid__col__title">GB set for European University Games</h4>
					<span class="news__grid__col__date">July 8th, 2024</span>
				</a>
			</div>
		</div>
	</section>

	<section class="benefits">
		<div class="container">
			<div class="benefits__content">
				<h2>Unlock exclusive benefits with <span>British Judo Membership</span></h2>
				<p>Discover a world of exclusive perks and opportunities designed just for our members. <br>
					<strong>As a British Judo member, you'll enjoy:</strong>
				</p>
				<ul class="benefits__content__list">
					<li>
						<span>
							<img src="<?php echo $helper->asset_url( '/img/icons/trophy-icon-light-blue.svg' ); ?>" alt="Trophy icon representing exclusive training resources" />
						</span>
						Exclusive training resources
					</li>
					<li>
						<span>
							<img src="<?php echo $helper->asset_url( '/img/icons/calendar-icon-light-blue.svg' ); ?>" alt="Calendar icon representing members-only events" />
						</span>
						Members-only events
					</li>
					<li>
						<span>
							<img src="<?php echo $helper->asset_url( '/img/icons/tshirt-icon-light-blue.svg' ); ?>" alt="Discount icon representing discounts on gear" />
						</span>
						Discounts on gear
					</li>
					<li>
						<span>
							<img src="<?php echo $helper->asset_url( '/img/icons/tickets-icon-light-blue.svg' ); ?>" alt="Ticket icon representing priority event access" />
						</span>
						Priority event access
					</li>
					<li>
						<span>
							<img src="<?php echo $helper->asset_url( '/img/icons/people-icon-light-blue.svg' ); ?>" alt="People icon representing community connection" />
						</span>
						Community connection
					</li>
				</ul>
				<div class="benefits__content__buttons">
					<a class="benefits__content__buttons__become-member" href="#" target="_blank" aria-label="Become a member of British Judo">Become a member</a>
					<a class="benefits__content__buttons__explore-benefits" href="#" target="_blank" aria-label="Explore the benefits of British Judo membership">Explore benefits</a>
				</div>
			</div>
			<div class="benefits__img">
			<img src="<?php echo $helper->asset_url( '/img/components/membership-athlete.webp' ); ?>" alt="Image of an athlete training in judo" />
			</div>
		</div>
		<img src="<?php echo $helper->asset_url( '/img/components/membership-vector.svg' ); ?>" alt="Illustration of British Judo membership benefits" />
	</section>

	<section class="core">
		<div class="container">
			<div class="core__grid">
				<a class="core__grid--card" href="#" target="_blank" aria-label="Upcoming Events">
					<img class="core__grid--card-img" src="<?php echo $helper->asset_url( '/img/components/judo-athlete-1.webp' ); ?>" alt="Image of Judo Athlete 1" />
					<h3 class="core__grid--card-title">
						<span>Upcoming</span>
						<span>Events</span>
					</h3>
				</a>
				<a class="core__grid--card" href="#" target="_blank" aria-label="Renew Membership">
					<img class="core__grid--card-img" src="<?php echo $helper->asset_url( '/img/components/judo-athlete-2.webp' ); ?>" alt="Image of Judo Athlete 2" />
					<h3 class="core__grid--card-title">
						<span>Renew</span>
						<span>Membership</span>
					</h3>
				</a>
				<a class="core__grid--card" href="#" target="_blank" aria-label="Find a Club">
					<img class="core__grid--card-img" src="<?php echo $helper->asset_url( '/img/components/judo-athlete-3.webp' ); ?>" alt="Image of Judo Athlete 3" />
					<h3 class="core__grid--card-title">
						<span>Find a</span>
						<span>Club</span>
					</h3>
				</a>
			</div>
		</div>
	</section>

	<section class="stats" aria-labelledby="stats-title">
		<div class="container">
			<h3 id="stats-title">
			British Judo<br><span>In numbers</span>
			</h3>
			<div class="stats__grid" role="region" aria-labelledby="stats-title">
				<div class="stats__grid__col" role="presentation">
					<div>
						<h4 id="clubs-count" aria-describedby="clubs-desc" data-count="4300">4,300</h4>
						<h6 id="clubs-desc">Clubs</h6>
					</div>
				</div>
				<div class="stats__grid__col--divider" role="separator" aria-hidden="true">
					<span aria-hidden="true"></span>
				</div>
				<div class="stats__grid__col" role="presentation">
					<div>
						<h4 id="athletes-count" aria-describedby="athletes-desc" data-count="800">800</h4>
						<h6 id="athletes-desc">Athletes</h6>
					</div>
				</div>
				<div class="stats__grid__col--divider" role="separator" aria-hidden="true">
					<span aria-hidden="true"></span>
				</div>
				<div class="stats__grid__col" role="presentation">
					<div>
						<h4 id="volunteers-count" aria-describedby="volunteers-desc" data-count="400">400</h4>
						<h6 id="volunteers-desc">Volunteers</h6>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="partners" aria-labelledby="partners-title">
		<div class="container">
			<h3 class="partners__title" id="partners-title">Our partners</h3>
			<div class="partners__grid">
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 1 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-1.webp' ); ?>" alt="Partner Logo 1" />
					<span class="sr-only">Partner Logo 1</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 2 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-2.webp' ); ?>" alt="Partner Logo 2" />
					<span class="sr-only">Partner Logo 2</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 3 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-3.webp' ); ?>" alt="Partner Logo 3" />
					<span class="sr-only">Partner Logo 3</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 4 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-4.webp' ); ?>" alt="Partner Logo 4" />
					<span class="sr-only">Partner Logo 4</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 5 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-5.webp' ); ?>" alt="Partner Logo 5" />
					<span class="sr-only">Partner Logo 5</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 6 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-6.webp' ); ?>" alt="Partner Logo 6" />
					<span class="sr-only">Partner Logo 6</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 7 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-7.webp' ); ?>" alt="Partner Logo 7" />
					<span class="sr-only">Partner Logo 7</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 8 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-8.webp' ); ?>" alt="Partner Logo 8" />
					<span class="sr-only">Partner Logo 8</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 9 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-9.webp' ); ?>" alt="Partner Logo 9" />
					<span class="sr-only">Partner Logo 9</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 10 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-10.webp' ); ?>" alt="Partner Logo 10" />
					<span class="sr-only">Partner Logo 10</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 11 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-11.webp' ); ?>" alt="Partner Logo 11" />
					<span class="sr-only">Partner Logo 11</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 12 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-12.webp' ); ?>" alt="Partner Logo 12" />
					<span class="sr-only">Partner Logo 12</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 13 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-13.webp' ); ?>" alt="Partner Logo 13" />
					<span class="sr-only">Partner Logo 13</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 14 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-14.webp' ); ?>" alt="Partner Logo 14" />
					<span class="sr-only">Partner Logo 14</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 15 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-15.webp' ); ?>" alt="Partner Logo 15" />
					<span class="sr-only">Partner Logo 15</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 16 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-16.webp' ); ?>" alt="Partner Logo 16" />
					<span class="sr-only">Partner Logo 16</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 17 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-17.webp' ); ?>" alt="Partner Logo 17" />
					<span class="sr-only">Partner Logo 17</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 18 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-18.webp' ); ?>" alt="Partner Logo 18" />
					<span class="sr-only">Partner Logo 18</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 19 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-19.webp' ); ?>" alt="Partner Logo 19" />
					<span class="sr-only">Partner Logo 19</span>
				</a>
				<a class="partners__grid--link" href="" target="_blank" aria-label="Visit partner 20 website">
					<img class="partners__grid--img" src="<?php echo $helper->asset_url( '/img/partners/partner-logo-20.webp' ); ?>" alt="Partner Logo 20" />
					<span class="sr-only">Partner Logo 20</span>
				</a>
			</div>
		</div>
	</section>

	<footer>
		<div class="footer__main">
			<div class="container">
				<div class="footer__main__wrapper">
					<div class="footer__main__col footer__main__col--contact">
						<h5>British Judo Head Office</h5>
						<p>University of Wolverhampton (Walsall Campus)<br> Gorway Road<br> Walsall<br> WS1 3BD</p>
					</div>
					<div class="footer__main__col footer__main__col--links">
						<h5>Useful links</h5>
						<ul>
							<li><a href="#" aria-label="Go to News page" target="_blank">News</a></li>
							<li><a href="#" aria-label="Go to Events page" target="_blank">Events</a></li>
							<li><a href="#" aria-label="Go to Membership page" target="_blank">Membership</a></li>
							<li><a href="#" aria-label="Go to Get started page" target="_blank">Get started</a></li>
							<li><a href="#" aria-label="Go to Partners page" target="_blank">Partners</a></li>
							<li><a href="#" aria-label="Go to Terms & conditions page" target="_blank">Terms & conditions</a></li>
							<li><a href="#" aria-label="Go to Privacy policy page" target="_blank">Privacy policy</a></li>
							<li><a href="#" aria-label="Go to Safe sport page" target="_blank">Safe sport</a></li>
						</ul>
					</div>
					<div class="footer__main__col footer__main__col--social">
						<h5>Connect with us</h5>
						<div class="social-links" role="navigation" aria-label="Social Media Links">
							<a href="#" aria-label="Follow British Judo on X" target="_blank">
								<i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i>
								<span class="sr-only">Follow British Judo on X</span>
							</a>
							<a href="#" aria-label="Follow British Judo on Facebook" target="_blank">
								<i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
								<span class="sr-only">Follow British Judo on Facebook</span>
							</a>
							<a href="#" aria-label="Follow British Judo on Instagram" target="_blank">
								<i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
								<span class="sr-only">Follow British Judo on Instagram</span>
							</a>
							<a href="#" aria-label="Follow British Judo on YouTube" target="_blank">
								<i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
								<span class="sr-only">Follow British Judo on YouTube</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer__marquee">
			<div class="footer__marquee__group" aria-live="polite">
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
			</div>
			<div class="footer__marquee__group" aria-live="polite">
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
				<span>We are gb judo</span>
			</div>
		</div>

		<div class="footer__bottom">
			<div class="container">
				<p>&copy; Copyright - British Judo Association</p>
				<p>Designed & Built by 
					<a href="https://portfolio.dalvinderpalssoora.co.uk" aria-label="Visit Dalvinderpal Soora Portfolio website" target="_blank" rel="noopener noreferrer">Dalvinderpal Soora</a>
				</p>
			</div>
		</div>
	</footer>
</body>
</html>

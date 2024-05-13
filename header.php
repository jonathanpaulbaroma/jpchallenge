<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

 
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="sticky top-0 z-50 border-b"> 

	<nav
  class="flex-no-wrap relative flex w-full items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4">
  <div class="container mx-auto flex w-full flex-wrap items-center justify-between px-3">
    <div class="flex flex-row text-white items-center">
      
    
    <!-- Facebook -->
      <a href="https://facebook.com" target="_blank" class="mr-2">
        <span class="[&>svg]:h-5 [&>svg]:w-5">
          
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 320 512">
              <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
              <path
                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
            </svg>
          
        </span>
      </a>

      <!-- Instagram -->
      <a href="https://instagram.com" target="_blank" class="mr-2">  
        <span class="[&>svg]:h-5 [&>svg]:w-5 ">
          
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 448 512">
              <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
              <path
                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
            </svg>
          
        </span>
      </a>

      <!-- Youtube -->
      <a href="https://youtube.com" target="_blank" class="mr-2">  
        <span class="[&>svg]:h-5 [&>svg]:w-5">
          
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 576 512">
              <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
              <path
                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
            </svg>
          </a>
        </span>
      </a>

      <!-- TikTok -->
      <a href="https://tiktok.com" target="_blank" class="mr-2">  
        <span class="[&>svg]:h-5 [&>svg]:w-5">
        
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
            <path
              d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
          </svg>
        </span>

      </a>

      <span class="mr-3 ml-1">|</span>

      <a href="tel:1234567890" target="_blank" class="mr-2"><i class="fa-solid fa-phone mr-1"></i>(+63) 123-456-7890</a>

      <a href="mailto:support@mail.com" target="_blank" class="mr-2"><i class="fa-solid fa-envelope mr-1"></i>support@mymail.com</a>

    </div>

    <!-- Right elements -->
    <div class="relative flex items-center">
   
    <?php echo do_shortcode( '[woo_cart_but]' ); ?>
      <!-- First dropdown container -->
      <div
        class="relative"
        data-twe-dropdown-ref
        data-twe-dropdown-alignment="end">
        <!-- First dropdown trigger -->
        <a
          class="me-4 flex items-center text-neutral-600 dark:text-white"
          href="#"
          id="dropdownMenuButton1"
          role="button"
          data-twe-dropdown-toggle-ref
          aria-expanded="false">
          <!-- Dropdown trigger icon -->
          <span class="[&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                clip-rule="evenodd" />
            </svg>
          </span>
          <!-- Notification counter -->
          <span
            class="absolute -mt-4 ms-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white"
            >1</span
          >
        </a>
        <!-- First dropdown menu -->
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
          aria-labelledby="dropdownMenuButton1"
          data-twe-dropdown-menu-ref>
          <!-- First dropdown menu items -->
          <li>
            <a
              class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
              href="#"
              data-twe-dropdown-item-ref
              >Action</a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
              href="#"
              data-twe-dropdown-item-ref
              >Another action</a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
              href="#"
              data-twe-dropdown-item-ref
              >Something else here</a
            >
          </li>
        </ul>
      </div>

      <!-- Second dropdown container -->
      <div
        class="relative"
        data-twe-dropdown-ref
        data-twe-dropdown-alignment="end">
        <!-- Second dropdown trigger -->
        <a
          class="flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
          href="#"
          id="dropdownMenuButton2"
          role="button"
          data-twe-dropdown-toggle-ref
          aria-expanded="false">
          <!-- User avatar -->
          <img
            src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg"
            class="rounded-full"
            style="height: 25px; width: 25px"
            alt=""
            loading="lazy" />
        </a>
        <!-- Second dropdown menu -->
        <ul
          class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
          aria-labelledby="dropdownMenuButton2"
          data-twe-dropdown-menu-ref>
          <!-- Second dropdown menu items -->
          <li>
            <a
              class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
              href="#"
              data-twe-dropdown-item-ref
              >Action</a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
              href="#"
              data-twe-dropdown-item-ref
              >Another action</a
            >
          </li>
          <li>
            <a
              class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
              href="#"
              data-twe-dropdown-item-ref
              >Something else here</a
            >
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
</nav>
  
  <!-- Main navigation container -->


		<div class="bg-white opacity-80 ">
			<div class="mx-auto container lg:flex lg:justify-between lg:items-center">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4 onepress-menu',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	

	<div id="content" class="site-content flex-grow">

		<?php if ( is_front_page() ) { ?>
			
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>

    <div
  id="carouselExampleCaptions"
  class="relative"
  data-twe-carousel-init
  data-twe-carousel-slide>
  <!--Carousel indicators-->
  <div
    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
    data-twe-carousel-indicators>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="0"
      data-twe-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="1"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-twe-target="#carouselExampleCaptions"
      data-twe-slide-to="2"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 3"></button>
  </div>

  <!--Carousel items-->
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First item-->
    <div
      class="relative float-left -me-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-active
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <img
        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
        class="block w-full"
        alt="..." />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
        <h5 class="text-xl">First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <!--Second item-->
    <div
      class="relative float-left -me-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <img
        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg"
        class="block w-full"
        alt="..." />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
        <h5 class="text-xl">Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <!--Third item-->
    <div
      class="relative float-left -me-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-twe-carousel-item
      style="backface-visibility: hidden">
      <img
        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg"
        class="block w-full"
        alt="..." />
      <div
        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
        <h5 class="text-xl">Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>

  <!--Carousel controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-twe-target="#carouselExampleCaptions"
    data-twe-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!--Carousel controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-twe-target="#carouselExampleCaptions"
    data-twe-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>
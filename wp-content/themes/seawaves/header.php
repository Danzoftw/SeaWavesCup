<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/main-site-logo.png" type="image/x-icon" />
    <title><?php wp_title(''); ?></title>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<header class="header position-relative z-index-5" id="to_top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="row w-100">
                <div class="col-3 d-flex align-items-center">
                    <a class="navbar-brand site-logo" href="<?php echo get_home_url(); ?>">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-9 d-flex align-items-center justify-content-end d-lg-none">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-9 d-flex align-items-center justify-content-end">
                    <div class="collapse navbar-collapse justify-content-end ps-2" id="navbarSupportedContent">
                        <?php
                            if (has_nav_menu('primary_header')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary_header',
                                    'container' => false,
                                    'menu_class' => 'menu-section flex-column flex-lg-row navbar-nav ml-auto h-100 justify-content-between justify-content-lg-center theme bg-transparent uppercase font-octopus-700 text-uppercase py-3',
                                    )
                                );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <a href="#to_top" class="to-top position-fixed">
        <img src="<?php echo get_template_directory_uri(); ?>/images/up-chevron.png" alt="to-top-button">
    </a>
</header>
    
</body>
</html>
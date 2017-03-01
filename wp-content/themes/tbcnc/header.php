<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php wp_title( '|', true, 'right' ) ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/print.css" media="print/">
   
    <script src="<?php echo get_template_directory_uri() ?>/js/application.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.1.1.js"></script>
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.js"></script>
    <script>
    
</script>
</head>

<body class="no-type">
    
    <div id="header" class="clearfix">
        <div id="header-menu">
            <div class="clearfix">
                <a class="logo" href="<?php echo esc_html(home_url()) ?>">
                    <span class="sfe-icon-sparkfun" data-icon=""><span class="visuallyhidden"><?php echo esc_html(home_url()) ?></span></span>
                    <span class="sfe-icon-flame"></span>
                </a>
                <div class="navbar pull-right">
                    <div id="cart-container">
                        <a href="<?php echo get_page_link(5) ?>">
                            <div id="cart_status" class="sfe-icon-carticon cart-empty">
                                <span class="visuallyhidden">Giỏ hàng</span>
                            </div>
                            <b>
                                <span id="items_in_cart">
                                    <?php echo WC()->cart->get_cart_contents_count(); ?>
                                </span>
                            </b>
                            <span id="cart_noun"> sản phẩm</span><br>
                        </a>
                    </div>
                </div>
            </div>
            <nav id="main-nav">
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#home").addClass('active');
                    });
                </script>
                <?php include_once('inc/menu-top.php'); ?>
                <form class="search" action="<?php echo get_page_link(70); ?>" id="search_form" method="get">
                    <div class="ui-widget">
                        <input name="term" id="global-search" class="search-term" type="text" value="" placeholder="Tìm kiếm sản phẩm...">
                    </div>
                </form>
            </nav>
        </div>
    </div>
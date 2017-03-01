<!--<ul>
    <li id="home" class="active"><a href="http://pnlabvn.com/">Trang chủ</a></li>
    <li id="about"><a href="http://pnlabvn.com/gioi-thieu">Giới thiệu</a></li>
    <li id="product"><a href="http://pnlabvn.com/san-pham">Sản phẩm</a></li>
    <li id="news"><a href="http://pnlabvn.com/tin-tuc">Tin tức</a></li>
    <li id="contact"><a href="http://pnlabvn.com/lien-he">Liên hệ</a></li>
    <li id="cart"><a href="http://pnlabvn.com/gio-hang">Giỏ hàng</a></li>
    <li id="price"><a href="http://pnlabvn.com/price">Báo giá PCB</a></li>
</ul>-->
<?php 
    
    $defaults = array( 
        'menu' => '', 
        'container' => 'div', 
        'container_class' => '', 
        'container_id' => '', 
        'menu_class' => 'menu', 
        'menu_id' => '',
        'echo' => true, 
        'fallback_cb' => 'wp_page_menu', 
        'before' => '', 'after' => '', 
        'link_before' => '', 
        'link_after' => '', 
        'items_wrap' => '<ul>%3$s</ul>', 
        'item_spacing' => 'preserve',
        'depth' => 0, 
        
        'theme_location' => 'top-menu' 
    );
    wp_nav_menu($defaults);
?>

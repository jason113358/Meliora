<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Dynamic Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">

    <!-- WordPress Styles and Scripts -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header position-sticky" id="header">
        <input id="isShowMenu" type="checkbox" class="d-none">

        <label class="header-left flex-align-center" for="isShowMenu">
            <div class="flex-align-center">
                <div class="h-ico">
                    <img class="default" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ico-menu.svg" alt="Menu Icon" />
                    <img class="close" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ico-close-circle.svg" alt="Close Icon" />
                </div>

                <div>
                    <?php _e('Menu', 'your-text-domain'); ?>
                </div>
            </div>
        </label>

        <div class="logo-text absolute-center">
            <?php bloginfo('name'); ?>
        </div>

        <div class="header-right flex-align-center">
            <div class="h-ico first flex-align-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ico-fb.svg" alt="Facebook Icon" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ico-insta.svg" alt="Instagram Icon" />
            </div>

            <div class="h-ico flex-align-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ico-search.svg" alt="Search Icon" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ico-heart.svg" alt="Heart Icon" />
            </div>
        </div>

        <div class="menu-reg">
            <div class="menu-category">
                <?php
                // Replace static categories with dynamic ones if needed
                $categories = ['Thiệp cưới giấy', 'Thiệp cưới online', 'Blog', 'Thư viện hình ảnh', 'Phụ kiện', 'Thiệp mẫu miễn phí', 'Liên hệ'];
                foreach ($categories as $category) {
                    echo '<div>' . esc_html($category) . '</div>';
                }
                ?>
            </div>
            <nav class="menu-content">
                <?php
                // Example dynamic menu items
                $menu_items = [
                    ['name' => 'BST. Eleance Eternal', 'url' => '#', 'img' => ''],
                    ['name' => 'BST. Lấp Lánh Ánh Sáng Tình Yêu', 'url' => '#', 'img' => ''],
                    ['name' => 'BST. Bản Tình Ca Vượt Thời Gian', 'url' => '#', 'img' => ''],
                    ['name' => 'BST. Nét Đẹp Nghệ Thuật Ngày Cưới', 'url' => '#', 'img' => ''],
                    ['name' => 'BST. Sắc Màu Bình Yên', 'url' => '#', 'img' => 'assets/images/menu-img.jpg'],
                    ['name' => 'BST. Cuộc Phiêu Lưu Của Cặp Đôi Đầy Màu Sắc', 'url' => '#', 'img' => ''],
                    ['name' => 'BST. Hành Trình Tìm Kiếm Tình Yêu', 'url' => '#', 'img' => '']
                ];

                foreach ($menu_items as $item) {
                    echo '<a href="' . esc_url($item['url']) . '" class="' . ($item['img'] ? 'selected' : '') . '">';
                    echo esc_html($item['name']);
                    if ($item['img']) {
                        echo '<img src="' . get_template_directory_uri() . '/' . esc_attr($item['img']) . '" alt="' . esc_attr($item['name']) . '">';
                    }
                    echo '</a>';
                }
                ?>
            </nav>
        </div>
    </header>

    <?php wp_footer(); ?>
</body>

</html>

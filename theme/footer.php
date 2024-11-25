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
  <footer>
      <div class="footer-top">
          <div>
              <div class="txt-primary"><?php _e('Khám phá', 'your-text-domain'); ?></div>
              <a href="#" class="txt-secondary"><?php _e('Giới thiệu', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Câu chuyện của chúng tôi', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Các bộ sưu tập', 'your-text-domain'); ?></a>
          </div>
          <div>
              <div class="txt-primary"><?php _e('Trợ giúp', 'your-text-domain'); ?></div>
              <a href="#" class="txt-secondary"><?php _e('Liên hệ', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Mua hàng', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Shipping & Handling', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Đổi trả và hoàn tiền', 'your-text-domain'); ?></a>
          </div>
          <div>
              <div class="txt-primary"><?php _e('Theo dõi chúng tôi tại', 'your-text-domain'); ?></div>
              <a href="#" class="txt-secondary"><?php _e('Instagram', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Facebook', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Tiktok', 'your-text-domain'); ?></a>
              <a href="#" class="txt-secondary"><?php _e('Pinterest', 'your-text-domain'); ?></a>
          </div>
          <div class="footer-discount">
              <div class="txt-promo"><?php _e('Ưu đãi từ Meliora', 'your-text-domain'); ?></div>
              <div class="txt-content">
                  <?php _e('Hãy cùng tham gia chuyến phiêu lưu khắp hành tinh của chúng tôi và nhận tin tức, ý tưởng và cuộc phiêu lưu. Đăng ký để nhận ưu đãi 10% cho lần mua đầu tiên với giá không giảm giá.', 'your-text-domain'); ?>
              </div>
              <div>
                  <input type="text" placeholder="<?php _e('Địa chỉ Email', 'your-text-domain'); ?>">
              </div>
          </div>
      </div>
      <div class="footer-bottom flex-align-center">
          <a href="#"><?php _e('Chính sách bảo mật', 'your-text-domain'); ?></a>
          <a href="#"><?php _e('Chính sách về thông tin', 'your-text-domain'); ?></a>
          <a href="#"><?php _e('Điều khoản dịch vụ', 'your-text-domain'); ?></a>
          <div class="copyright">
              <?php echo sprintf(__('©%s Meliora', 'your-text-domain'), date('Y')); ?>
          </div>
      </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>

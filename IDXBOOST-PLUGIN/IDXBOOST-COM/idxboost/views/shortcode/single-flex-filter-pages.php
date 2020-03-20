<?php
get_header();

while (have_posts()) : the_post();

global $post, $flex_idx_info;

$filter_description = $post->post_content;
$filter_page_ID = $post->ID;
$filter_listing_type = get_post_meta($filter_page_ID, '_flex_filter_page_fl', true);
$filter_token_id = get_post_meta($filter_page_ID, '_flex_filter_page_id', true);
$post_thumbnail_id = get_post_thumbnail_id($filter_page_ID);
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
?>

    <main id="flex-filters-theme">
      <div class="gwr gwr-breadcrumb">
        <div class="flex-breadcrumb">
          <ol>
            <li><a href="<?php echo $flex_idx_info["website_url"]; ?>" title="Home"><?php echo __("Home", IDXBOOST_DOMAIN_THEME_LANG); ?></a></li>
            <li><?php echo __(the_title(), IDXBOOST_DOMAIN_THEME_LANG); ?></li>
          </ol>
        </div>
      </div>

    <?php if (!empty($filter_description) && has_post_thumbnail($filter_page_ID)): ?>
    <div class="gwr c-flex">
      <article class="flex-block-description">
        <h2 class="title-block"><?php echo get_the_title(); ?></h2>
        <p><?php echo get_the_content(); ?></p>
      </article>
      <img src="<?php echo $post_thumbnail_url; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="default-img">
    </div>
    <?php endif; ?>
    <?php echo do_shortcode(sprintf('[flex_idx_filter id="%s" type="%d"]', $filter_token_id, $filter_listing_type)); ?>
    </main>
<?php
endwhile;
get_footer();
?>

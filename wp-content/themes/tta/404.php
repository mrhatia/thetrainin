<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TTA
 */

get_header();
?>

<section class="content-row not-found">
  <section class="middle">
    <div class="wrapper">
      <h1>4<span style="color:#56b2e3;">0</span>4!</h1>
      <h2>Oops! That page can&rsquo;t be found.</h2>
      <a class="btn btn-primary" href="<?php echo site_url(); ?>">Back to Home</a>
    </div>
  </section>
</section>

<?php
get_footer();

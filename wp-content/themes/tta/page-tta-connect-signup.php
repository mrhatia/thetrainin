<?php
/* Template Name: TTA Sign-up */

get_header();
?>

<style>
  .tt-signup-wrap {
    max-width: 760px;
    margin: 0 auto;
    padding: 200px 20px;
    text-align: center;
  }

  .tt-signup-wrap h1 {
    font-size: 28px;
    margin: 0 0 28px;
    font-weight: 700;
  }

  .tt-signup-cards {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
  }

  .tt-signup-card {
    width: 280px;
    min-height: 160px;
    border: 2px solid #d5e6ef;
    border-radius: 16px;
    background-color: #ffffff;
    padding: 20px 18px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
    cursor: pointer;
    transition:
      box-shadow 0.2s,
      transform 0.05s,
      border-color 0.2s,
      background-color 0.2s;
  }

  .tt-signup-card:hover {
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
  }

  .tt-signup-card:active {
    transform: translateY(1px);
  }

  .tt-signup-card[aria-checked="true"] {
    border-color: #9fd3f2;
    background: #eef7fd;
  }

  .tt-signup-icon {
    width: 40px;
    height: 40px;
    display: inline-block;
  }

  .tt-signup-h2 {
    font-size: 21px;
    line-height: 1.35;
  }

  .tt-signup-cta-row {
    margin: 22px 0 10px;
  }

  .tt-signup-cta {
    display: inline-block;
    padding: 10px 22px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    background: #3bb2f6;
    color: #ffffff;
    box-shadow: 0 6px 14px rgba(59, 178, 246, 0.25);
    transition:
      opacity 0.2s,
      transform 0.05s;
  }

  .tt-signup-cta:hover {
    color: #fff;
    background-color: #59c8f3;
  }

  .tt-signup-cta[aria-disabled="true"] {
    background: #b9c7d3;
    box-shadow: none;
    pointer-events: none;
    opacity: 0.85;
  }

  .tt-signup-login {
    font-size: 21px;
    color: #6b7a86;
  }

  .tt-signup-login a {
    color: #3bb2f6;
    text-decoration: underline;
  }

  @media (max-width: 640px) {
    .tt-signup-card {
      width: 100%;
    }
  }
</style>

<?php 
$link = get_field('first_box_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
<?php endif; ?>

<?php 
$link2 = get_field('second_box_button');
if( $link2 ): 
    $link2_url = $link2['url'];
    $link2_title = $link2['title'];
    $link2_target = $link2['target'] ? $link2['target'] : '_self';
    ?>
<?php endif; ?>

  <main class="tt-signup-wrap">
    <h1><?php echo esc_html( get_field('heading') ); ?></h1>

    <div class="tt-signup-cards" role="radiogroup" aria-label="<?php echo esc_html( get_field('heading') ); ?>">
      <button class="tt-signup-card" role="radio" aria-checked="false"
              data-cta-text="<?php echo esc_html( $link_title ); ?>"
              data-cta-url="<?php echo esc_url( $link_url ); ?>"
              data-side="left" tabindex="0">
        <?php if( get_field('first_box_icon') ): ?>
				<img src="<?php the_field('first_box_icon'); ?>" />
			  <?php endif; ?>
        <span class="tt-signup-h2"><?php echo get_field('first_box_text'); ?></span>
      </button>

      <button class="tt-signup-card" role="radio" aria-checked="false"
              data-cta-text="<?php echo esc_html( $link2_title ); ?>"
              data-cta-url="<?php echo esc_url( $link2_url ); ?>"
              data-side="right" tabindex="0">
        <?php if( get_field('second_box_icon') ): ?>
					<img src="<?php the_field('second_box_icon'); ?>" />
			  	<?php endif; ?>
        <span class="tt-signup-h2"><?php echo get_field('second_box_text'); ?></span>
      </button>
    </div>
    <div class="tt-signup-cta-row">
      <a id="tt-signup-cta" class="tt-signup-cta" href="#" aria-disabled="true">Create Account</a>
    </div>
    <p class="tt-signup-login">
     <?php echo get_field('login_text'); ?>
    </p>
  </main>
	
	  <script>
    (function(){
      const cards = document.querySelectorAll('.tt-signup-card');
      const cta   = document.getElementById('tt-signup-cta');

      function select(card){
        cards.forEach(c => c.setAttribute('aria-checked', 'false'));
        card.setAttribute('aria-checked', 'true');

        const text = card.dataset.ctaText;
        const url  = card.dataset.ctaUrl;

        cta.textContent = text;
        cta.href = url;
        cta.setAttribute('aria-disabled','false');
      }

      cards.forEach(card => {
        card.addEventListener('click', () => select(card));
        card.addEventListener('keydown', e => {
          if (e.key === ' ' || e.key === 'Enter') { e.preventDefault(); select(card); }
        });
      });
      cta.addEventListener('click', e => {
        if (cta.getAttribute('aria-disabled') === 'true') e.preventDefault();
      });
    })();
  </script>

<?php get_footer(); ?>
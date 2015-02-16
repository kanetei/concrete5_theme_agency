<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<!-- Header -->
<header>
    <div class="container">
        <?php
        $a = new Area('Top Header');
        $a->display($c);
        ?>
    </div>
</header>

<!-- Services Section -->
<section id="services">
    <?php
    $a = new Area('Services');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <?php
    $a = new Area('Portfolio');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</section>

<!-- About Section -->
<section id="about">
    <?php
    $a = new Area('About');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <?php
    $a = new Area('Team');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <?php
    $a = new Area('Clients');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</aside>

<section id="contact">
    <?php
    $a = new Area('Contact');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</section>



<?php  $this->inc('elements/footer.php'); ?>

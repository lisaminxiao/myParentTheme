<?php
// footer.php
?>

<footer class="container-full">
    <div class="container">

        <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo-picture" class="logo-picture"> <!-- the logo I create for this hotel -->
        </a>

        <br>
        <p class="float-end"><a href="#">Back to top</a></p>

        <?php echo do_shortcode('[wpgmza id="1"]'); ?> <!-- the map plugin  -->

        <p>&copy; 2017–2024 Company, Inc. &middot;<a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

        <?php wp_footer(); ?>
    </div>
</footer>
</body>

</html>
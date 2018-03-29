<footer class="site-footer">

    <nav class="site-nav">
        <?php $my_args = array(
            'theme_location' => 'footer'
        ); ?>

        <?php wp_nav_menu($my_args) ?>
    </nav>

    <p class="footer_p"><b><?php bloginfo('name') ?> at &copy; <?php echo date('Y') ?></b></p>

</footer>

</div>

<?php wp_footer() ?>
</body>
</html>
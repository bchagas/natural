  <footer role="contentinfo">
    <p>This is your footer space <a href="#top" title="Jump back to top">&#8593;</a></p>
  </footer>

  <?php wp_footer(); ?>

  <?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
  </body>
</html>

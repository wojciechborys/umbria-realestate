<?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main id="main" class="main">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

<?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/wp-content/themes/umbria-theme/resources/views/layouts/app.blade.php ENDPATH**/ ?>
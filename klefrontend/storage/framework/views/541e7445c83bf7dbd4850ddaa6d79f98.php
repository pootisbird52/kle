<form <?php echo e($attributes(["class" => "max-w-full form-text-responsive mx-auto space-y-[.3vw]", "method" => "GET"])); ?>>
    <?php if($attributes->get('method', 'GET') !== 'GET'): ?>
        <?php echo csrf_field(); ?>
        <?php echo method_field($attributes->get('method')); ?>
    <?php endif; ?>

    <?php echo e($slot); ?>

</form>
<?php /**PATH /var/www/resources/views/components/forms/form.blade.php ENDPATH**/ ?>
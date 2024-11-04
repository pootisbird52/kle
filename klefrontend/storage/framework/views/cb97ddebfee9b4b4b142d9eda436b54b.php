<?php if (isset($component)) { $__componentOriginal2b88de30f0797e34e0b124ec5f5fd4bd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b88de30f0797e34e0b124ec5f5fd4bd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.my-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('my-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php if(session('token')): ?>
    <div class="mb-[10vh]">
        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productnum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal035cfb39ec4aa5e0161b7db5513bcc5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal035cfb39ec4aa5e0161b7db5513bcc5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-wide','data' => ['product' => $product,'productnum' => $productnum]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-wide'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'productnum' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($productnum)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal035cfb39ec4aa5e0161b7db5513bcc5a)): ?>
<?php $attributes = $__attributesOriginal035cfb39ec4aa5e0161b7db5513bcc5a; ?>
<?php unset($__attributesOriginal035cfb39ec4aa5e0161b7db5513bcc5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal035cfb39ec4aa5e0161b7db5513bcc5a)): ?>
<?php $component = $__componentOriginal035cfb39ec4aa5e0161b7db5513bcc5a; ?>
<?php unset($__componentOriginal035cfb39ec4aa5e0161b7db5513bcc5a); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
    <div>
    </div>
    
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b88de30f0797e34e0b124ec5f5fd4bd)): ?>
<?php $attributes = $__attributesOriginal2b88de30f0797e34e0b124ec5f5fd4bd; ?>
<?php unset($__attributesOriginal2b88de30f0797e34e0b124ec5f5fd4bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b88de30f0797e34e0b124ec5f5fd4bd)): ?>
<?php $component = $__componentOriginal2b88de30f0797e34e0b124ec5f5fd4bd; ?>
<?php unset($__componentOriginal2b88de30f0797e34e0b124ec5f5fd4bd); ?>
<?php endif; ?>


<?php /**PATH /var/www/resources/views/home.blade.php ENDPATH**/ ?>
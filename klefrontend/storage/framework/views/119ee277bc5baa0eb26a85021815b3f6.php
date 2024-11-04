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

    <div class="mt-[3vw]">

        <div class="flex flex-row gap-x-[5vw] max-md:flex-col max-md:items-center">
            <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['productnum' => $product,'xmargin' => $xmargin='mx-[10vw]','class' => 'pt-5 max-w-[15vw] min-w-[15vw] min-h-[30vw] max-h-[35vw]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['productnum' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'xmargin' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($xmargin='mx-[10vw]'),'class' => 'pt-5 max-w-[15vw] min-w-[15vw] min-h-[30vw] max-h-[35vw]']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal29b95272c5ad89a7d1391f326b8c01b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29b95272c5ad89a7d1391f326b8c01b1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product-info','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29b95272c5ad89a7d1391f326b8c01b1)): ?>
<?php $attributes = $__attributesOriginal29b95272c5ad89a7d1391f326b8c01b1; ?>
<?php unset($__attributesOriginal29b95272c5ad89a7d1391f326b8c01b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29b95272c5ad89a7d1391f326b8c01b1)): ?>
<?php $component = $__componentOriginal29b95272c5ad89a7d1391f326b8c01b1; ?>
<?php unset($__componentOriginal29b95272c5ad89a7d1391f326b8c01b1); ?>
<?php endif; ?>
        </div>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b88de30f0797e34e0b124ec5f5fd4bd)): ?>
<?php $attributes = $__attributesOriginal2b88de30f0797e34e0b124ec5f5fd4bd; ?>
<?php unset($__attributesOriginal2b88de30f0797e34e0b124ec5f5fd4bd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b88de30f0797e34e0b124ec5f5fd4bd)): ?>
<?php $component = $__componentOriginal2b88de30f0797e34e0b124ec5f5fd4bd; ?>
<?php unset($__componentOriginal2b88de30f0797e34e0b124ec5f5fd4bd); ?>
<?php endif; ?><?php /**PATH /var/www/resources/views/product.blade.php ENDPATH**/ ?>
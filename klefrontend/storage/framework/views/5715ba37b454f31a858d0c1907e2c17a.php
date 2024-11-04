<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['product' , 'productnum']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['product' , 'productnum']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $test = $productnum-1;
    $product = collect($product);
    $test = strval($test);
    $counts = array_map('count', $data);
    $key = array_flip($counts)[$max_counts];
    $productnum = $product['data'][echo($test)];
?>

<div class="card-responsive group">
    <div class="flex items-center">
        <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['product' => $product,'productnum' => $productnum]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product),'productnum' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($productnum)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
    </div>
    

    <div class="flex flex-col min-w-[30vw] justify-between my-auto">
        
        <div class="flex justify-between hover:cursor-default">
            <h1 class="card-h1">
                <?php echo e($productnum['user']['first_name']." ".$productnum['user']['last_name']); ?>

            </h1>            
        </div>  

        <div class="card-text hover:cursor-default">
            
                <?php echo e($productnum['title']); ?>

            
        </div>

        <div>
            <div class="flex justify-between  space-x-[2vw] ml-[2vw] mt-[6vw] mx-auto">
                <form method="POST" action="/product/<?php echo e($productnum['id']); ?>" id="delete-form-<?php echo e($productnum['id']); ?>" class="hidden">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                </form>
                <button class="home-button-responsive bg-red-600 font-thin hover:bg-red-900 transition-colors duration-300 rounded form-button-text-responsive" style="padding-left: 2vw !important; padding-right: 2vw !important" form="delete-form-<?php echo e($productnum['id']); ?>">Sil</button>
                <a href="/product/<?php echo e($productnum['id']); ?>" class="home-button-responsive bg-blue-600 font-thin hover:bg-blue-900 transition-colors duration-300 rounded form-button-text-responsive "><p class="py-[1vw]">Göster</p></a>
                <a href="/product/<?php echo e($productnum['id']); ?>/edit" class="home-button-responsive bg-green-600 font-thin hover:bg-green-900 transition-colors duration-300 rounded form-button-text-responsive "><p class="py-[1vw]">Düzenle</p></a>
                <h2 class="card-h2 hover:cursor-default xsm:max-md:hidden">
                    <?php echo e($productnum['price']); ?>₺
                </h2>
            </div>
            <div class="md:hidden" style="flex items-center self-center text-center ">
                <h2 class="font-thin hover:cursor-default product-text mt-[1vw]" style="text-align:center !important">
                    <?php echo e($productnum['price']."₺"); ?>

                </h2>
            </div>

            <div class="tagdiv ml-[5vw]">
                
                
            </div>
        </div>
    </div>

    

    
</div><?php /**PATH /var/www/resources/views/components/card-wide.blade.php ENDPATH**/ ?>
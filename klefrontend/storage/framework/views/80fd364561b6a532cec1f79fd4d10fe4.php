<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['product']));

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

foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="flex text-left max-md:text-center gap-y-[1vw] flex-col align-middle self-center">
    <h2 class="h2-responsive">
        <?php echo e($product['user']['first_name']." ".$product['user']['last_name']); ?>

    </h2>
    <hr class="w-[45vw] mx-auto">
    <h1 class="product-h1-responsive ">
        <?php echo e($product['title']); ?>

    </h1>
    <p class="product-text">
        <?php echo e($product['description']); ?>

    </p>

    <div>
        <p class="product-text max-md:text-left mb-[2vw]">
            <?php echo e($product['price']); ?>₺
        </p>
    </div>  
</div>
<?php /**PATH /var/www/resources/views/components/product-info.blade.php ENDPATH**/ ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['product', 'productnum' , 'xmargin' => 'mx-auto']));

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

foreach (array_filter((['product', 'productnum' , 'xmargin' => 'mx-auto']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="min-w-fit  min-h-fit sm:my-auto xsm:max-md:mx-auto <?php echo e($xmargin); ?>">
    <img src="<?php echo e(asset($productnum['logo'])); ?>" class="xsm:max-md:min-h-[30vw] xsm:max-md:min-w-[30vw]" style="width:15vw ; height:15vw ; border-radius: 2vw"  alt="">
</div><?php /**PATH /var/www/resources/views/components/logo.blade.php ENDPATH**/ ?>
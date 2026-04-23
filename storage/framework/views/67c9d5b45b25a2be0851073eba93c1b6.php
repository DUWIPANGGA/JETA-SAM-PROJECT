<div class="border border-b-black bg-white w-full h-16 flex items-center sticky top-0 z-50">
    <ul class="w-full list-none flex items-center justify-around">
        <div class="flex ">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <?php if (isset($component)) { $__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c)): ?>
<?php $attributes = $__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c; ?>
<?php unset($__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c)): ?>
<?php $component = $__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c; ?>
<?php unset($__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c); ?>
<?php endif; ?>
                </a>
            </li>
        </div>
        <div class="flex lg:gap-10 md:gap-5 gap-2 lg:mx-10 md:mx-5 mx-2">
            <li><a href="<?php echo e(url('/')); ?>">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="<?php echo e(url('/tracking')); ?>">Lacak Pesanan</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="<?php echo e(url('/portfolio')); ?>">Portofolio</a></li>
            <li><a href="<?php echo e(url('/request')); ?>">Hubungi Kami</a></li>
        </div>
        <div class="flex">
            <li>
                <a href="<?php echo e(route('login')); ?>">
                    <?php if (isset($component)) { $__componentOriginal7d2e61ec2d8a25cb7439684c2af2ed3c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d2e61ec2d8a25cb7439684c2af2ed3c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.account','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.account'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d2e61ec2d8a25cb7439684c2af2ed3c)): ?>
<?php $attributes = $__attributesOriginal7d2e61ec2d8a25cb7439684c2af2ed3c; ?>
<?php unset($__attributesOriginal7d2e61ec2d8a25cb7439684c2af2ed3c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d2e61ec2d8a25cb7439684c2af2ed3c)): ?>
<?php $component = $__componentOriginal7d2e61ec2d8a25cb7439684c2af2ed3c; ?>
<?php unset($__componentOriginal7d2e61ec2d8a25cb7439684c2af2ed3c); ?>
<?php endif; ?>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('/cart')); ?>">
                    <?php if (isset($component)) { $__componentOriginala2559504ffbfc2f0c65f3c151186db60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala2559504ffbfc2f0c65f3c151186db60 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.cart','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala2559504ffbfc2f0c65f3c151186db60)): ?>
<?php $attributes = $__attributesOriginala2559504ffbfc2f0c65f3c151186db60; ?>
<?php unset($__attributesOriginala2559504ffbfc2f0c65f3c151186db60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala2559504ffbfc2f0c65f3c151186db60)): ?>
<?php $component = $__componentOriginala2559504ffbfc2f0c65f3c151186db60; ?>
<?php unset($__componentOriginala2559504ffbfc2f0c65f3c151186db60); ?>
<?php endif; ?>
                </a>
            </li>
        </div>
    </ul>
</div>
<?php /**PATH E:\Julian\magang\JETA-SAM-PROJECT\resources\views/layout/partials/navbar.blade.php ENDPATH**/ ?>
<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container20u2Ire\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container20u2Ire/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container20u2Ire.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container20u2Ire\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container20u2Ire\App_KernelProdContainer([
    'container.build_hash' => '20u2Ire',
    'container.build_id' => 'a6c73946',
    'container.build_time' => 1648489801,
], __DIR__.\DIRECTORY_SEPARATOR.'Container20u2Ire');

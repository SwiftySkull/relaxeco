<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKfD6xvw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKfD6xvw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKfD6xvw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKfD6xvw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKfD6xvw\App_KernelDevDebugContainer([
    'container.build_hash' => 'KfD6xvw',
    'container.build_id' => '36cea310',
    'container.build_time' => 1648489812,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKfD6xvw');

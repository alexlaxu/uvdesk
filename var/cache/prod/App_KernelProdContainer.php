<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDGeH6xR\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDGeH6xR/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerDGeH6xR.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerDGeH6xR\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerDGeH6xR\App_KernelProdContainer([
    'container.build_hash' => 'DGeH6xR',
    'container.build_id' => '76277741',
    'container.build_time' => 1661673260,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDGeH6xR');
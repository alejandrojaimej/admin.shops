<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR3TKfE6\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR3TKfE6/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerR3TKfE6.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerR3TKfE6\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerR3TKfE6\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'R3TKfE6',
    'container.build_id' => '27f23d1a',
    'container.build_time' => 1540932828,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerR3TKfE6');

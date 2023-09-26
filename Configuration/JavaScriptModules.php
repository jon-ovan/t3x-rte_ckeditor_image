<?php

return [
    'dependencies' => [
        'rte_ckeditor',
    ],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@netresearch/rte-ckeditor-image' => 'EXT:rte_ckeditor_image/Resources/Public/JavaScript/Plugins/typo3image.js',
    ],
];
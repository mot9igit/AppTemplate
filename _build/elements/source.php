<?php
return [
    'name' => 'MS2 Images',
    'description' => 'Default media source for images of miniShop2 products',
    'class_key' => 'sources.modFileMediaSource',
    'properties' => [
        'basePath' => [
            'name' => 'basePath',
            'desc' => 'prop_file.basePath_desc',
            'type' => 'textfield',
            'lexicon' => 'core:source',
            'value' => '/assets/images/products/',
        ],
        'baseUrl' => [
            'name' => 'baseUrl',
            'desc' => 'prop_file.baseUrl_desc',
            'type' => 'textfield',
            'lexicon' => 'core:source',
            'value' => 'assets/images/products/',
        ],
        'imageExtensions' => [
            'name' => 'imageExtensions',
            'desc' => 'prop_file.imageExtensions_desc',
            'type' => 'textfield',
            'lexicon' => 'core:source',
            'value' => 'jpg,jpeg,png,gif,webp',
        ],
        'allowedFileTypes' => [
            'name' => 'allowedFileTypes',
            'desc' => 'prop_file.allowedFileTypes_desc',
            'type' => 'textfield',
            'lexicon' => 'core:source',
            'value' => 'jpg,jpeg,png,gif,webp',
        ],
        'thumbnailType' => [
            'name' => 'thumbnailType',
            'desc' => 'prop_file.thumbnailType_desc',
            'type' => 'list',
            'lexicon' => 'core:source',
            'options' => [
                ['text' => 'Png', 'value' => 'png'],
                ['text' => 'Jpg', 'value' => 'jpg'],
                ['text' => 'Webp', 'value' => 'webp'],
            ],
            'value' => 'jpg',
        ],
        'thumbnails' => [
            'name' => 'thumbnails',
            'desc' => 'ms2_source_thumbnails_desc',
            'type' => 'textarea',
            'lexicon' => 'minishop2:setting',
            'value' => '{"small":{"w":120,"h":90,"q":90,"zc":"1","bg":"000000"}, "webp":{"w":120,"h":90,"q":90,"zc":"1","bg":"000000","f":"webp"}}',
        ],
        'maxUploadWidth' => [
            'name' => 'maxUploadWidth',
            'desc' => 'ms2_source_maxUploadWidth_desc',
            'type' => 'numberfield',
            'lexicon' => 'minishop2:setting',
            'value' => 1920,
        ],
        'maxUploadHeight' => [
            'name' => 'maxUploadHeight',
            'desc' => 'ms2_source_maxUploadHeight_desc',
            'type' => 'numberfield',
            'lexicon' => 'minishop2:setting',
            'value' => 1080,
        ],
        'maxUploadSize' => [
            'name' => 'maxUploadSize',
            'desc' => 'ms2_source_maxUploadSize_desc',
            'type' => 'numberfield',
            'lexicon' => 'minishop2:setting',
            'value' => 10485760,
        ],
        'imageNameType' => [
            'name' => 'imageNameType',
            'desc' => 'ms2_source_imageNameType_desc',
            'type' => 'list',
            'lexicon' => 'minishop2:setting',
            'options' => [
                ['text' => 'Hash', 'value' => 'hash'],
                ['text' => 'Friendly', 'value' => 'friendly'],
            ],
            'value' => 'friendly',
        ],
    ],
    'is_stream' => 1,
];
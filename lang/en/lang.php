<?php

return [
    'plugin'      => [
        'name'        => 'Blog Extension',
        'description' => 'NumenCode Blog Extension plugin extends the RainLab.Blog plugin.',
    ],
    'permissions' => [
        'settings' => 'Manage settings',
        'pictures' => 'Manage pictures',
        'files'    => 'Manage files',
    ],
    'tabs'        => [
        'blog'       => 'Blog',
        'extensions' => 'Extensions',
        'editors'    => 'Editors',
        'pictures'   => 'Pictures',
        'files'      => 'Files',
    ],
    'settings'    => [
        'manage'              => 'Manage blog extension settings',
        'pictures'            => 'Enable picture gallery on blog post.',
        'files'               => 'Enable file attachments on blog post.',
        'content_title'       => 'WYSIWYG content',
        'content_description' => 'Replace blog post markdown content with WYSIWYG editor.',
        'excerpt_title'       => 'WYSIWYG excerpt',
        'excerpt_description' => 'Replace blog post excerpt with WYSIWYG editor.',
    ],
    'pictures'    => [
        'gallery'              => 'Picture gallery',
        'title'                => 'Title',
        'picture'              => 'Picture',
        'is_published'         => 'Published?',
        'is_published_comment' => 'Unpublished pictures can only be viewed by administrators.',
    ],
    'files'       => [
        'label'                => 'Attached files',
        'title'                => 'Title',
        'file'                 => 'File',
        'is_published'         => 'Published?',
        'is_published_comment' => 'Unpublished files can only be viewed by administrators.',
    ],
];

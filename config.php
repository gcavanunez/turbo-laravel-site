<?php

$highlighter = new \Tempest\Highlight\Highlighter;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Turbo Laravel',
    'description' => 'Build web and hybrid navite apps with Laravel and Hotwire today.',

    'github_url' => 'https://github.com/hotwired-laravel/turbo-laravel',
    'hotwire_site_url' => 'https://hotwired.dev/',
    'tony_site_url' => 'https://tonysm.com',

    'current_version' => '2.2.0',
    'latest_v1' => '1.12.2',

    'current_docs_index' => '/docs/installation',
    'v1_docs_index' => '/1.x/docs/installation',
    'bootcamp_index' => '/bootcamp/introduction',

    'collections' => [
        'docs' => ['path' => 'docs/{filename}', 'sort' => 'order', 'searchable' => fn ($page) => $page->search ?? true],
        'v1' => ['path' => '1.x/docs/{filename}', 'sort' => 'order', 'searchable' => fn ($page) => $page->search ?? true],
        'bootcamp' => ['path' => 'bootcamp/{filename}', 'sort' => 'order', 'searchable' => fn ($page) => $page->search ?? true],
    ],

    'navigation' => [
        'v1' => require ('v1-navigation.php'),
        'v2' => require ('navigation.php'),
        'bootcamp' => require ('bootcamp.php'),
    ],

    'selected' => fn ($page, $section) => str_contains($page->getPath(), $section),

    'snippets' => [
        'frames' => <<<HTML
    <pre class="overflow-x-auto"><code class="language-php">{$highlighter->parse(file_get_contents(__DIR__ . '/source/_snippets/frames.txt'), 'blade')}</code></pre>
    HTML,
        'streams' => <<<HTML
    <pre class="overflow-x-auto"><code class="language-php">{$highlighter->parse(file_get_contents(__DIR__ . '/source/_snippets/streams.txt'), 'php')}</code></pre>
    HTML,
        'native' => <<<HTML
    <pre class="overflow-x-auto"><code class="language-php">{$highlighter->parse(file_get_contents(__DIR__ . '/source/_snippets/native.txt'), 'php')}</code></pre>
    HTML,
        'tests' => <<<HTML
    <pre class="overflow-x-auto"><code class="language-php">{$highlighter->parse(file_get_contents(__DIR__ . '/source/_snippets/tests.txt'), 'php')}</code></pre>
    HTML,
    ],
];

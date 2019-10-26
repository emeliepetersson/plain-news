<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
    [
        'id' => 1,
        'first_name' => 'Robert',
        'last_name' => 'Downey Jr.'
    ],
    [
        'id' => 2,
        'first_name' => 'Chris',
        'last_name' => 'Evans'
    ],
    [
        'id' => 3,
        'first_name' => 'Scarlett',
        'last_name' => 'Johansson'
    ],
    [
        'id' => 4,
        'first_name' => 'Chris',
        'last_name' => 'Hemsworth'
    ],
    [
        'id' => 5,
        'first_name' => 'Brie',
        'last_name' => 'Larson'
    ]
];

$articles = [
    [
        'title' => 'Jelly jelly tart icing.',
        'content' => file_get_contents(__DIR__."/articles/article1.txt"),
        'author_id' => 1,
        'published_date' => '2019-05-01',
        'like_counter' => 24569,
        'image' => 'images/capmarv.jpg',
        'alt_text' => 'Captain Marvel poster'
    ],
    [
        'title' => 'Cake donut candy canes.',
        'content' => file_get_contents(__DIR__."/articles/article2.txt"),
        'author_id' => 2,
        'published_date' => '2019-09-09',
        'like_counter' => 1,
        'image' => 'images/futurefight.jpg',
        'alt_text' => 'Future fight poster'
    ],
    [
        'title' => 'Jelly-o toffee marshmallow.',
        'content' => file_get_contents(__DIR__."/articles/article3.txt"),
        'author_id' => 1,
        'published_date' => '2019-02-15',
        'like_counter' => 598,
        'image' => 'images/marauders.jpg',
        'alt_text' => 'Marauders poster'
    ],
    [
        'title' => 'Biscuit apple pie sweet roll cake tootsie roll.',
        'content' => file_get_contents(__DIR__."/articles/article4.txt"),
        'author_id' => 3,
        'published_date' => '2019-10-11',
        'like_counter' => 34,
        'image' => 'images/wasteland.jpg',
        'alt_text' => 'Wasteland poster'
    ],
    [
        'title' => 'Danish cake sweet apple pie caramels.',
        'content' => file_get_contents(__DIR__."/articles/article5.txt"),
        'author_id' => 4,
        'published_date' => '2019-08-30',
        'like_counter' => 3672,
        'image' => 'images/imortalhulk.jpg',
        'alt_text' => 'Imortal hulk poster'
    ],
    [
        'title' => 'Chupa chups sugar plum gingerbread chocolate bar gummies.',
        'content' => file_get_contents(__DIR__."/articles/article6.txt"),
        'author_id' => 5,
        'published_date' => '2019-05-08',
        'like_counter' => 126738,
        'image' => 'images/starwars.jpg',
        'alt_text' => 'Star wars poster'
    ],
    [
        'title' => 'Macaroon soufflé tootsie roll.',
        'content' => file_get_contents(__DIR__."/articles/article7.txt"),
        'author_id' => 5,
        'published_date' => '2019-02-12',
        'like_counter' => 8290,
        'image' => 'images/comicbook-page.jpg',
        'alt_text' => 'Page in a comic book'
    ],
    [
        'title' => 'Dragée lemon drops bear claw jelly chupa chups.',
        'content' => file_get_contents(__DIR__."/articles/article8.txt"),
        'author_id' => 2,
        'published_date' => '2018-07-09',
        'like_counter' => 24,
        'image' => 'images/podcast-poster.jpg',
        'alt_text' => 'Podcast poster'
    ],
    [
        'title' => 'Lemon drops cotton candy powder cotton candy ice cream.',
        'content' => file_get_contents(__DIR__."/articles/article9.txt"),
        'author_id' => 3,
        'published_date' => '2018-12-04',
        'like_counter' => 3840,
        'image' => 'images/comics.jpg',
        'alt_text' => 'Marvel comics'
    ],
    [
        'title' => 'Danish wafer tart brownie cookie icing.',
        'content' => file_get_contents(__DIR__."/articles/article10.txt"),
        'author_id' => 4,
        'published_date' => '2018-03-28',
        'like_counter' => 162784,
        'image' => 'images/maryjane.jpg',
        'alt_text' => 'Mary Jane poster'
    ]
];

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
        'content' => 'Dragée biscuit chocolate cake. Gummies cookie sugar plum. Candy canes caramels lollipop soufflé brownie cheesecake sesame snaps. Ice cream dragée chupa chups. Sweet roll halvah gummies. Pastry marshmallow dragée liquorice marshmallow danish. Sweet sweet roll marshmallow chocolate bar tart dessert chocolate jujubes. Dragée sweet roll pudding cake. Tootsie roll macaroon croissant cotton candy soufflé sugar plum. Pastry danish jujubes cake biscuit. Lemon drops fruitcake gummi bears pastry wafer sesame snaps donut bonbon powder. Cake biscuit sugar plum tart dessert. Dragée caramels macaroon sesame snaps danish topping. Powder cupcake lollipop ice cream pudding donut.',
        'author_id' => 1,
        'published_date' => '2019-05-01',
        'like_counter' => 24569
    ],
    [
        'title' => 'Cake donut candy canes.',
        'content' => 'Jelly-o toffee marshmallow. Brownie sweet gingerbread carrot cake pie dessert chupa chups cookie. Marshmallow marzipan cheesecake cheesecake sweet liquorice. Cookie sesame snaps chupa chups soufflé fruitcake tiramisu. Sweet roll gummi bears jujubes. Lollipop tiramisu cotton candy jelly-o chupa chups. Cake pie lollipop tiramisu. Marzipan muffin croissant lemon drops sweet roll bonbon gummies. Sugar plum muffin brownie donut brownie chocolate cake jelly beans cookie. Candy canes tart donut bonbon jelly chupa chups.',
        'author_id' => 2,
        'published_date' => '2019-09-09',
        'like_counter' => 1
    ],
    [
        'title' => 'Jelly-o toffee marshmallow.',
        'content' => 'Cake donut candy canes. Cheesecake soufflé sweet roll jujubes tiramisu pastry. Danish gummi bears sesame snaps sweet roll marshmallow cake. Candy dessert oat cake dragée cotton candy pie cake wafer. Chocolate cake wafer chocolate chocolate bar ice cream. Powder muffin brownie. Cupcake dragée cake jujubes pie jelly beans soufflé pie. Topping brownie chocolate bar cake.',
        'author_id' => 1,
        'published_date' => '2019-02-15',
        'like_counter' => 598
    ],
    [
        'title' => 'Biscuit apple pie sweet roll cake tootsie roll.',
        'content' => 'Sweet dessert brownie gummies carrot cake. Tart pastry candy fruitcake fruitcake carrot cake. Tart sesame snaps chocolate. Halvah bear claw chocolate cake chocolate cake pie tart toffee. Cheesecake topping bear claw. Topping jelly beans fruitcake dragée tiramisu. Chupa chups wafer tootsie roll jelly cookie bonbon toffee. Bonbon macaroon jujubes.',
        'author_id' => 3,
        'published_date' => '2019-10-11',
        'like_counter' => 34
    ],
    [
        'title' => 'Danish cake sweet apple pie caramels.',
        'content' => 'Bonbon croissant apple pie. Topping sweet sweet roll powder dessert cupcake. Sesame snaps wafer fruitcake ice cream gummies gingerbread croissant biscuit bonbon. Jelly pastry pudding cheesecake sugar plum cotton candy. Chupa chups sugar plum gingerbread chocolate bar gummies. Donut powder gingerbread chocolate bar toffee gingerbread sesame snaps toffee pudding. Pudding fruitcake jelly beans tootsie roll tart. Gingerbread donut apple pie apple pie icing lemon drops.',
        'author_id' => 4,
        'published_date' => '2019-08-30',
        'like_counter' => 3672
    ],
    [
        'title' => 'Chupa chups sugar plum gingerbread chocolate bar gummies.',
        'content' => 'Sugar plum cupcake jelly sesame snaps cheesecake halvah donut. Marzipan cake chocolate bar lemon drops bear claw icing cake oat cake powder. Sweet roll jelly-o powder bear claw danish. Candy canes cake dessert jelly-o chocolate chocolate jelly beans biscuit liquorice. Gummi bears sugar plum chocolate bar croissant macaroon fruitcake. Cotton candy soufflé tootsie roll oat cake dragée gummi bears jelly-o wafer. Jujubes pudding dessert jelly beans. Apple pie jelly beans wafer.',
        'author_id' => 5,
        'published_date' => '2019-05-08',
        'like_counter' => 126738
    ],
    [
        'title' => 'Macaroon soufflé tootsie roll.',
        'content' => 'Candy biscuit apple pie bear claw sugar plum macaroon marshmallow topping. Halvah ice cream brownie cookie tiramisu powder apple pie chocolate cake macaroon. Cheesecake marzipan donut bonbon carrot cake pudding marshmallow lollipop. Jelly-o jelly pudding chocolate jelly beans. Pastry icing fruitcake dessert. Caramels liquorice sweet muffin. Cookie chocolate cake cheesecake bonbon powder gingerbread apple pie. Muffin sweet icing toffee tiramisu halvah marzipan chupa chups. ',
        'author_id' => 5,
        'published_date' => '2019-02-12',
        'like_counter' => 8290
    ],
    [
        'title' => 'Dragée lemon drops bear claw jelly chupa chups.',
        'content' => 'Pudding tart danish. Bear claw jelly beans candy cheesecake chupa chups liquorice biscuit halvah. Macaroon cake sweet roll donut. Donut caramels sesame snaps pastry chupa chups chocolate bar. Wafer chupa chups halvah halvah toffee. Cotton candy candy canes cake cupcake apple pie tiramisu candy canes. Tiramisu chocolate cake sweet cake marzipan macaroon macaroon lollipop.',
        'author_id' => 2,
        'published_date' => '2018-07-09',
        'like_counter' => 24
    ],
    [
        'title' => 'Lemon drops cotton candy powder cotton candy ice cream.',
        'content' => 'Oat cake jelly pudding tart marshmallow. Gummies caramels chocolate bar toffee cotton candy toffee gingerbread gummies ice cream. Brownie chupa chups candy icing marshmallow sugar plum wafer sweet. Soufflé cotton candy pastry chocolate cake. Muffin donut topping chocolate bar croissant jelly cake brownie dessert. Sweet tiramisu croissant lollipop cotton candy. Marzipan topping fruitcake cotton candy candy candy canes gingerbread icing danish.',
        'author_id' => 3,
        'published_date' => '2018-12-04',
        'like_counter' => 3840
    ],
    [
        'title' => 'Danish wafer tart brownie cookie icing.',
        'content' => 'Halvah halvah cotton candy jelly lemon drops macaroon candy canes lemon drops. Chocolate cake ice cream soufflé muffin liquorice. Topping bonbon sugar plum gummi bears tootsie roll. Chocolate cake chocolate cake tart topping. Donut liquorice gingerbread. Dragée marzipan chocolate bar fruitcake. Sweet roll halvah soufflé.',
        'author_id' => 4,
        'published_date' => '2018-03-28',
        'like_counter' => 162784
    ]
];

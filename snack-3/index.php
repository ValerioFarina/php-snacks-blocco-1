<?php
    // PHP snack3:
    // Creare un array di array.
    // Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati a quella data.
    // Stampare ogni data con i relativi post.

    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php
            // beginning of foreach in $posts
            foreach ($posts as $date => $date_posts) { ?>
                <h4 class="date">
                    <?php echo $date; ?>
                </h4>
                <div class="container-posts">
                    <?php
                    // beginning of foreach in $date_posts
                    foreach ($date_posts as $post) { ?>
                        <div class="post">
                            <h2 class="title">
                                <?php echo $post['title']; ?>
                            </h2>
                            <h3 class="author">
                                <?php echo $post['author']; ?>
                            </h3>
                            <p class="text">
                                <?php echo $post['text']; ?>
                            </p>
                        </div>
                        <?php
                    } ?>
                    <!-- end of foreach in $date_posts -->
                </div>
                <?php
            } ?>
            <!-- end of foreach in $posts -->
        </div>
    </body>
</html>

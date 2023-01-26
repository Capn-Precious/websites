<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

<h1>Recommended Books</h1>

    <?php
        $books = [
            [
                'name' => '1984',
                'author' => 'George Orwell',
                'releaseYear' => 'June 8, 1949',
                'purchaseUrl' => 'www.buythisbook.com'
            ],
            [
                'name' => 'Animal Farm',
                'author' => 'George Orwell',
                'releaseYear' => 'August 17, 1945',
                'purchaseUrl' => 'www.buythisbook.com'
            ],
            [
                'name' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'releaseYear' => 'October 19, 1953',
                'purchaseUrl' => 'www.buythisbook.com'
            ]
        ];


    function filterByAuthor($books)
    {
        return '';
    }

    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if ($book['author'] === 'George Orwell') : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?> (?= $book['releaseYear'] ?)
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>
        <?= filterByAuthor(); ?>
    </p>

</body>
</html>

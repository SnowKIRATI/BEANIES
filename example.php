<?php
$qcm = [
    [
        'question' => "Une superbe question de test, n'est-ce pas ?",
        'reponses' => [
            ['Magnifique !', false],
            ["Pas mal...", false],
            ["Top !", true],
            ["Obi-Wan Kenobi", false],
        ],
    ],
    [
        'question' => 'La vie est-elle un long fleuve tranquille ?',
        'reponses' => [
            ['Oui', false],
            ['Non', true],
        ],
    ],
];
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercices</title>
    <style>
        .even {
            border-top: 5px dotted red;
        }
    </style>
</head>

<body>
    <h1>QCM</h1>
    <form action="">
        <?php
        foreach ($qcm as $i => $questionAvecReponses) {
            ++$i;
        ?>
            <h2 <?php if ($i % 2 == 0) { ?> class="even" <?php } ?>>
                <?php echo  $i . '. ' . $questionAvecReponses['question']; ?>
            </h2>
            <ol>
                <?php
                $reponses = $questionAvecReponses['reponses'];

                for ($j = 0; $j < count($reponses); $j++) {
                    $reponse = $reponses[$j][0];
                    $isCorrect = $reponses[$j][1];
                ?>
                    <li <?php if ($j % 2 == 1) { ?> class="even" <?php } ?>>
                        <label>
                            <input type="checkbox" <?php if ($isCorrect) { ?> checked <?php } ?>>
                            <?php echo $reponse; ?>
                        </label>
                    </li>
                <?php
                }
                ?>
            </ol>
        <?php
        }
        ?>
    </form>
</body>

</html>
Rémi Jarjat — Today at 1:59 PM
<?php
$qcm = [
    [
        'question' => "Une superbe question de test, n'est-ce pas ?",
        'reponses' => [
            'Magnifique !',
            "Pas mal...",
            "Top !",
            "Obi-Wan Kenobi",
        ],
        'correct' => [0, 3],
    ],
    [
        'question' => 'La vie est-elle un long fleuve tranquille ?',
        'reponses' => [
            'Oui',
            'Non',
        ],
        'correct' => [1],
    ],
];
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercices</title>
    <style>
        .even {
            border-top: 5px dotted red;
        }
    </style>
</head>

<body>
    <h1>QCM</h1>
    <form action="">
        <?php
        foreach ($qcm as $i => $questionAvecReponses) {
            ++$i;
        ?>
            <h2 <?php if ($i % 2 == 0) { ?> class="even" <?php } ?>>
                <?php echo  $i . '. ' . $questionAvecReponses['question']; ?>
            </h2>
            <ol>
                <?php
                $reponses = $questionAvecReponses['reponses'];
                $correctes = $questionAvecReponses['correct'];

                for ($j = 0; $j < count($reponses); $j++) {
                    $reponse = $reponses[$j];
                    $isCorrect = in_array($j, $correctes);
                ?>
                    <li <?php if ($j % 2 == 1) { ?> class="even" <?php } ?>>
                        <label>
                            <input type="checkbox" <?php if ($isCorrect) { ?> checked <?php } ?>>
                            <?php echo $reponse; ?>
                        </label>
                    </li>
                <?php
                }
                ?>
            </ol>
        <?php
        }
        ?>
    </form>
</body>

</html>
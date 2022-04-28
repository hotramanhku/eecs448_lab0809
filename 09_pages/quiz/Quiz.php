<?php

echo '<head> <link rel="stylesheet" href="Quiz.css"> </head>';
echo '<div id="box"><div class="wrapper"><p>';

$answers = array(
    $_POST['q1'],
    $_POST['q2'],
    $_POST['q3'],
    $_POST['q4'],
    $_POST['q5']
);

$questions = array(
    '1: What team will you be watching for MCC21?',
    '2: In the series <em>Moon Knight</em>, which one of these is NOT a valid name of the main character\'s alters?',
    '3: In the series/webcomic <em>Heartstopper</em>, what instrument does Tara Jones play?',
    '4: Who of these is not a violinist featured on the YouTube channel TwoSetViolin?',
    '5: Who is Steve Jobs?'
);

$correct = array(
    'What, you expect me to pick just one POV?',
    'Ethan Hawke',
    'Clarinet',
    'Hyung Suk Bae',
    'Ligma'
);

$correctCounter = 0;

for ($i = 0; $i < 5; $i++) {
    echo '<strong>Question ' . $questions[$i] . '</strong><br>';
    echo '&emsp;You answered: ' . $answers[$i] . '<br>';
    echo '&emsp;Correct answer: ' . $correct[$i] . '<br><br>';
    if ($answers[$i] == $correct[$i]) {
        $correctCounter++;
    }
}

$correctPercent = $correctCounter / 5 * 100;
echo $correctPercent . '% - You got ' . $correctCounter . '/5 correct!';

echo '</p></div></div>';
?>

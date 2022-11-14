<?php

$total = 0;

echo "1. What is the capital of the U.S.?";
$ans1 = $_POST["capital"];
echo "<p>You answered: ".$ans1."</p>";
echo "<p>Correct answer: Washington D.C.</p>";
if ($ans1 === "Washington D.C.") {
    $total ++;
};

echo "2. What type of cheese is from Switzerland?";
$ans2 = $_POST["cheese"];
echo "<p>You answered: ".$ans2."</p>";
echo "<p>Correct answer: Swiss</p>";
if ($ans2 === "Swiss") {
    $total ++;
};

echo "3. Where is pizza from?";
$ans3 = $_POST["country"];
echo "<p>You answered: ".$ans3."</p>";
echo "<p>Correct answer: Italy</p>";
if ($ans3 === "Italy") {
    $total ++;
};

echo "4. What color is the sky?";
$ans4 = $_POST["sky"];
echo "<p>You answered: ".$ans4."</p>";
echo "<p>Correct answer: Blue</p>";
if ($ans4 === "Blue") {
    $total ++;
};

echo "4. What is 5^2?";
$ans5 = $_POST["math"];
echo "<p>You answered: ".$ans5."</p>";
echo "<p>Correct answer: 25</p>";
if ($ans5 === "25") {
    $total ++;
};

echo "<p>Total correct: ".$total."</p>";
$score = $total / 5 * 100;
echo "<p>Score: ".$score."%</p>";
?>
<?php
$ans1 = $_POST['q1'];
$ans2 = $_POST['q2'];
$ans3 = $_POST['q3'];
$ans4 = $_POST['q4'];
$ans5 = $_POST['q5'];

$score = 0;
if ($ans1 == "Lisbon") { $score++; }
if ($ans2 == "Madrid") { $score++; }
if ($ans3 == "Kabul") { $score++; }
if ($ans4 == "Lima") { $score++; }
if ($ans5 == "Ottawa") { $score++; }
$finalscore = $score*20;

echo "<div>Q1: What is the capital of Portugal?</div>";
echo "<div>&nbsp You answered: $ans1</div>";
echo "<div>&nbsp Correct answer: Lisbon</div><br>";
echo "<div>Q2: What is the capital of Spain?</div>";
echo "<div>&nbsp You answered: $ans2</div>";
echo "<div>&nbsp Correct answer: Madrid</div><br>";
echo "<div>Q3: What is the capital of Afghanistan?</div>";
echo "<div>&nbsp You answered: $ans3</div>";
echo "<div>&nbsp Correct answer: Kabul</div><br>";
echo "<div>Q4: What is the capital of Peru?</div>";
echo "<div>&nbsp You answered: $ans4</div>";
echo "<div>&nbsp Correct answer: Lima</div><br>";
echo "<div>Q5: What is the capital of Canada?</div>";
echo "<div>&nbsp You answered: $ans5</div>";
echo "<div>&nbsp Correct answer: Ottawa</div><br>";
echo "<br><div>You answered $score correct</div>";
echo "<br><div>Final Score $finalscore %</div>";
?>       
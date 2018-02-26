<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$total = 5;
$correct = 0;

echo "Name: " . $name . "<br>";

if($Q1 == "Madrid")
{
  $correct++;
}
if($Q2 == "Beijing")
{
  $correct++;
}
if($Q3 == "Washington")
{
  $correct++;
}
if($Q4 == "Tokyo")
{
  $correct++;
}
if($Q5 == "New Delhi")
{
  $correct++;
}
echo "Question 1: What was the capital of Spain<br>";
echo "You answered: ".$Q1."<br>";
echo "Correct answer: Madrid <br><br>";

echo "Question 2: What was the captial of China?<br>";
echo "You answered: ".$Q2."<br>";
echo "Correct answer: Beijing <br><br>";

echo "Question 3: What was the capital of the U.S?<br>";
echo "You answered: ".$Q3."<br>";
echo "Correct answer: Washington <br><br>";

echo "Question 4: What was the capital of Japan?<br>";
echo "You answered: ".$Q4."<br>";
echo "Correct answer: Tokyo <br><br>";

echo "Question 5: What was the capital of India?<br>";
echo "You answered: ".$Q5."<br>";
echo "Correct answer: New Delhi <br><br>";

$score = $correct/$total *100;
echo "Score: ".$score."%";
?>

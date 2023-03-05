<?php
// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];
$q11 = $_POST["q11"];
$q12 = $_POST["q12"];
$q13 = $_POST["q13"];
$q14 = $_POST["q14"];
$q15 = $_POST["q15"];
$q16 = $_POST["q16"];
$q17 = $_POST["q17"];
$q18 = $_POST["q18"];
$q19 = $_POST["q19"];
$q20 = $_POST["q20"];
$q21 = $_POST["q21"];
$q22 = $_POST["q22"];
$q23 = $_POST["q23"];
$q24 = $_POST["q24"];
$q25 = $_POST["q25"];

$startTime = $_POST["start-time"];

// Convert the start time from milliseconds to seconds
$startTime = floor($startTime / 1000);

// Calculate the elapsed time
$elapsedTime = time() - $startTime;
$minutes = floor($elapsedTime / 60);
$seconds = $elapsedTime % 60;

// Check the answers and calculate the number of correct ones
$correctAnswers = 0;
If ($q1 == "routine") { $correctAnswers++; }
If ($q2 == "daily") { $correctAnswers++; }
If ($q3 == "revise") { $correctAnswers++; }
If ($q4 == "active") { $correctAnswers++; }
If ($q5 == "say out aloud") { $correctAnswers++; }
If ($q6 == "pronunciation") { $correctAnswers++; }
If ($q7 == "highlight") { $correctAnswers++; }
If ($q8 == "rub out") { $correctAnswers++; }
If ($q9 == "redo") { $correctAnswers++; }
If ($q10 == "clean") { $correctAnswers++; }
If ($q11 == "permanent temporary" || $q11="permanent" || $q11="temporary") { $correctAnswers++; }
If ($q12 == "kind") { $correctAnswers++; }
If ($q13 == "smooth") { $correctAnswers++; }
If ($q14 == "entrance") { $correctAnswers++; }
If ($q15 == "dead") { $correctAnswers++; }
If ($q16 == "accept") { $correctAnswers++; }
If ($q17 == "argue") { $correctAnswers++; }
If ($q18 == "argument") { $correctAnswers++; }
If ($q19 == "plays") { $correctAnswers++; }
If ($q20 == "reading") { $correctAnswers++; }
If ($q21 == "will") { $correctAnswers++; }
If ($q22 == "eat") { $correctAnswers++; }
If ($q23 == "am going") { $correctAnswers++; }
If ($q24 == "has") { $correctAnswers++; }
If ($q25 == "has been") { $correctAnswers++; }

// Format the elapsed time
$elapsedTimeFormatted = sprintf('%d:%02d', $minutes, $seconds);

// Send the email
$to = "1eldarmuxtarov1@gmail.com";
$subject = "Timer Test Results";
$message = "Name: $name\nEmail: $email\nTime Elapsed: $elapsedTimeFormatted\nNumber of Correct Answers: $correctAnswers\n\nAnswers:\nQ1: $q1\nQ2: $q2\nQ3: $q3\nQ4: $q4\nQ5: $q5\nQ6: $q6\nQ7: $q7\nQ8: $q8\nQ9: $q9\nQ10: $q10\nQ11: $q11\nQ12: $q12\nQ13: $q13\nQ14: $q14\nQ15: $q15\nQ16: $q16\nQ17: $q17\nQ18: $q18\nQ19: $q19\nQ20: $q20\nQ21: $q21\nQ22: $q22\nQ23: $q23\nQ24: $q24\nQ25: $q25";
$headers = "From: $name";
mail($to, $subject, $message, $headers);

// Display the results to the user
echo "<h2>Results</h2>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Time Elapsed: $elapsedTimeFormatted</p>";
echo "<p>Number of Correct Answers: $correctAnswers</p>";
echo "<p>Answers:</p>";
echo "<ul>";
echo "<li>Question 1: $q1</li>";
echo "<li>Question 2: $q2</li>";
echo "<li>Question 3: $q3</li>";
echo "<li>Question 4: $q4</li>";
echo "<li>Question 5: $q5</li>";
echo "<li>Question 6: $q6</li>";
echo "<li>Question 7: $q7</li>";
echo "<li>Question 8: $q8</li>";
echo "<li>Question 9: $q9</li>";
echo "<li>Question 10: $q10</li>";
echo "<li>Question 11: $q11</li>";
echo "<li>Question 12: $q12</li>";
echo "<li>Question 13: $q13</li>";
echo "<li>Question 14: $q14</li>";
echo "<li>Question 15: $q15</li>";
echo "<li>Question 16: $q16</li>";
echo "<li>Question 17: $q17</li>";
echo "<li>Question 18: $q18</li>";
echo "<li>Question 19: $q19</li>";
echo "<li>Question 20: $q20</li>";
echo "<li>Question 21: $q21</li>";
echo "<li>Question 22: $q22</li>";
echo "<li>Question 23: $q23</li>";
echo "<li>Question 24: $q24</li>";
echo "<li>Question 25: $q25</li>";

echo "</ul>";
?>

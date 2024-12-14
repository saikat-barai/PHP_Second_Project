<?php

// Example questions
$questions = [
    ['question' => 'What is 2 + 2?', 'answer' => '4'],
    ['question' => 'What is the capital of France?', 'answer' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'answer' => 'Shakespeare'],
];

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}

// evaluate function 
function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['answer']) {
            $score++;
        }
    }
    return $score;
}


// calculate score 

$score = evaluateQuiz($questions, $answers);
echo "\n You scored $score out of " . count($questions) . "\n";

if ($score === count($questions)) {
    echo "Exellent! Job \n";
} elseif ($score > 1) {
    echo "Good Effort! \n";
} else {
    echo "Better luck next time! \n";
}

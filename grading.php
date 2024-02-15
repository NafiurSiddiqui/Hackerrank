function gradingStudents($grades) {
      $finalGrades = [];

    foreach ($grades as $grade) {
        if ($grade >= 38) {
            $nextMultipleOfFive = ceil($grade / 5) * 5;
            if ($nextMultipleOfFive - $grade < 3) {
                $roundedGrade = $nextMultipleOfFive;
            } else {
                $roundedGrade = $grade;
            }
        } else {
            $roundedGrade = $grade;
        }
        $finalGrades[] = $roundedGrade;
    }

    return $finalGrades;
}


//https://www.hackerrank.com/challenges/grading/problem

<?php 
$students = ['John', 'Mary', 'Jane', 'Bob'];
$grades = ['A+', 'B', 'C-', 'D'];
foreach($students as $student) {
echo "$student's grade is: $grades[rand(0,3)]";
}
?>
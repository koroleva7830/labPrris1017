<?php
$word = "horse";
print_r(searchAnagram($word));
function searchAnagram($word) {
    $anagrams = []; //массив для хранения анагарамм
    $sortWord = sortWord($word); //сортируем буквы слова в алфавитном порядке 
    $file = file('words.txt'); //чтение файла в массив
    for ($i = 0; $i < count($file); $i++) {
        $fileWord = $file[$i];
        $sortFileWord = sortWord($fileWord); //сортируем в алфавитном порядке буквы слов из файла
        
        if ($sortWord === $sortFileWord) {
            $anagrams[] = $fileWord;// сравниваем отсортированные слова 
        }
    }
    return $anagrams;
}

function sortWord($word) { //сортируем символы массива в алфавитном порядке 
    $trimWord = trim($word); // удаляем пробелы из строки
    $splitWord = str_split($trimWord); //преобразуем строку в массив
    sort($splitWord); //отсортируем массив в алфавитном порядке
    return implode($splitWord); //преобразуем массив в строку
}
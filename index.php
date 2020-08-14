 <?php
$arrText = "A specific situation; a set of circumstances."; // task # 1 in which it was necessary to display the number of symbols in a line
echo strlen($arrText);
echo "<br>";
echo "<br>";


$arrWithout = "A specific situation; a set of circumstances."; // task # 1.2 in which it was necessary to delete the letter s and display the text without this letter
$delSymbol = str_replace('s', '', $arrWithout);
echo $delSymbol;
echo "<br>";
echo "<br>";


$arrCreate = ["Don`t worry,","be happy","!"]; // task # 2 in which it was necessary to create an array and glue it with different pieces of text
echo implode(" ", $arrCreate);
echo "<br>";
echo "<br>";


$arrAssociative = array(
    "Bruno Mars_love song" => "Mark Ronson feat. Bruno Mars - Uptown Funk", // task # 3 in which it was necessary to create an associative array, where the key will be the performer and the value will be the favorite and the least favorite song
    "Bruno Mars_less lovely song"=> "Bruno Mars - It Will Rain"
                        );
echo $arrAssociative["Bruno Mars_love song"];
echo "<br>";
echo $arrAssociative["Bruno Mars_less lovely song"];
echo "<br>";
echo "<br>";


$arrColor = [
    'ru'=>['голубой', 'красный', 'зеленый'], // task # 4 in which we have a multidimensional array and it was necessary to output the word red
    'en'=>['blue', 'red', 'green'],
];
echo $arrColor['ru'][1];
echo "<br>";
echo "<br>";


$arrSum = ['a'=>1, 'b'=>2, 'c'=>3]; // task # 5 in which it was necessary to produce the sum of the values in the array through the function and the addition operator +
echo "sum(a) = " . array_sum($arrSum);
echo "<br>";
echo "<br>";
echo $arrSum['a'] + $arrSum['b'] + $arrSum['c'];
echo "<br>";
echo "<br>";



$arrTable = array
(
    array('X', '0', 'X'),
    array('0', 'X', '0'),
    array('X', '0', 'X')
);  // task # 6 in which it was necessary to display the array in the form of a 3x3 table using the <table> tag

echo '<table border="1">';
foreach ($arrTable as $key => $value) {
    echo "<tr>";
    foreach ($value as $data)
        echo "<td>".$data."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<br>";





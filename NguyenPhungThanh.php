<!-- câu 1 Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
echo "Câu 1: ";
function isEven($number) {
    if (!is_numeric($number)) {
        return false;
    }

    return $number % 2 === 0;
}
$number = 31;
if (isEven($number)) {
    echo "$number là số chẵn";
} else {
    echo "$number không phải là số chẵn";
}
?>
<br>

<!-- câu 2 Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
echo "Câu 2: ";
    function sum($n)
    {
        if (!is_int($n) || $n < 1 || !is_numeric($n)) { 
            return "Đầu vào không hợp lệ.";
        }
        $s=0;
        for ($i=1; $i<=$n; $i++){
            $s+=$i;
        }
        return $s;
    }
    $n=8;
    echo sum($n);
?>
<br>

<!-- câu 3 In ra bảng cửu chương từ 1 đến 10. -->
<?php
echo "Câu 3: "; 
function printMultiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i: <br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result <br>";
        }
        echo "<br>";
    }
}
printMultiplicationTable();
?>
<br>

<!-- câu 4 Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
echo "Câu 4: ";
function containsWord($string, $word) {
  $words = explode(' ', $string);
  foreach ($words as $w) {
    if (strtolower($w) === strtolower($word)) { 
      return true;
    }
  }
  return false;
}
$string = "Con mèo béo của Hà Nhi";
$word = "mèo";
if (containsWord($string, $word)) {
  echo "Chuỗi chứa từ '$word'";
} else {
  echo "Chuỗi không chứa từ '$word'";
}
?>
<br>

<!-- câu 5 Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
echo "Câu 5: ";
function findMaxMin($arr) {
    $max = $arr[0]; 
    $min = $arr[0]; 

    foreach ($arr as $value) {
        $max = ($value > $max) ? $value : $max; 
        $min = ($value < $min) ? $value : $min; 
    }
    return array('max' => $max, 'min' => $min);
}

$arr = array(3, 2, 5, 1, 4); 
$result = findMaxMin($arr); 
echo "Max trong mảng là: " . $result['max'] . "<br>"; 
echo "Min trong mảng là: " . $result['min'] . "<br>"; 
?>
<br>

<!-- câu 6 Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
echo "Câu 6: ";
function sortArray($arr) {
    for($i = 0; $i < count($arr)-1; $i++) {
        $minIndex = $i;
        for($j = $i+1; $j < count($arr); $j++) {
            if($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        if($minIndex != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
    }
    return $arr;
}
$arr = array(-3, 2, -8, 5, 10, 4, 7, 6);
$arr = sortArray($arr);
print_r($arr);
?>
<br>

<!-- câu 7 Viết chương trình PHP để tính giai thừa của một số nguyên dương -->
<?php
echo "Câu 7: ";
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 3.2; 

if ($number < 0 || !is_int($number) || !is_numeric($number)) {
    echo "Đầu vào không hợp lệ. Vui lòng nhập một số nguyên dương.";
} else {
    $result = factorial($number);
    echo "Giai thừa của $number là: $result";
}
?>
<br>

<!-- câu 8 Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
echo "Câu 8: ";
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$start = 10;
$end = 20; 
if (!is_numeric($start) || !is_numeric($end)) {
    echo "Vui lòng nhập các giá trị số cho khoảng bắt đầu và kết thúc.";
} elseif ($start > $end) {
    echo "Khoảng không hợp lệ (kết thúc nhỏ hơn bắt đầu).";
} elseif ($start < 1 && $end < 1) {
    echo "Khoảng không hợp lệ (cả bắt đầu và kết thúc đều âm).";
} else {
    $start = max(1, $start); // Đảm bảo khoảng bắt đầu không âm
    echo "Các số nguyên tố từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}
?>
<br>

<!-- câu 9 -->
<?php
echo "Câu 9: ";
// Viết chương trình PHP để tính tổng của các số trong một mảng
function calculateSum($arr) {
    $sum = 0;
    foreach ($arr as $number) {
        if (is_numeric($number)) {
            $sum += $number;
        }
    }
    return $sum;
}
$arr = array(1, 2, 3, 4, 5, 'abc', 6);
$sum = calculateSum($arr);
echo "Tổng của các số trong mảng là: " . $sum;
?>
<br>

<!-- câu 10 Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước -->
<?php
echo "Câu 10: ";
function fibonacci_range($start, $end) {
    $fibonacci = array();
    for ($a = 0, $b = 1; $a <= $end; $c = $a + $b, $a = $b, $b = $c) { 
        if ($a >= $start) {
            $fibonacci[] = $a;
        }
    }
    return $fibonacci;
}
$start = 10;
$end = 50;
echo "Các số Fibonacci trong khoảng từ $start đến $end là: " . implode(", ", fibonacci_range($start, $end));
?>
<br>

<!-- câu 11 Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
echo "Câu 11: ";
function checkArmstrong($num) {
    $digits = str_split($num);
    $sum = 0;
    $num_digits = count($digits);
    foreach ($digits as $digit) {
        $sum += pow($digit, $num_digits);
    }
    return ($sum == $num);
}
$num=154; //153
if (checkArmstrong($num)) {
    echo "$num là số Armstrong";
} else {
    echo "$num không phải là số Armstrong";
}
?>
<br>

<!-- câu 12 Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
echo "Câu 12: ";
function insertElement($arr, $element, $position) {
    $new_array = array(); 
    $length = count($arr); 
    for ($i = 0; $i < $length; $i++) { 
        if ($i == $position) { 
            array_push($new_array, $element); 
        }
        array_push($new_array, $arr[$i]); 
    }
    if ($position >= $length) { 
        array_push($new_array, $element); 
    }
    return $new_array; // Trả về mảng mới đã chèn phần tử
}
$array = array(1, 2, 3, 4, 5);
$new_array = insertElement($array, 6, 2);
echo "Mảng mới sau khi chèn phần tử là: ";
print_r($new_array);
?>
<br>

<!-- câu 13 Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
echo "Câu 13: ";
function removeDuplicates($arr) {
    $result = array(); 
    foreach ($arr as $element) { 
        if (!in_array($element, $result)) { 
            array_push($result, $element);
        }
    }
    return $result; 
}
$array = array(1, 2, 2);
$new_array = removeDuplicates($array);
echo "Mảng mới sau khi loại bỏ các phần tử trùng lặp là: ";
print_r($new_array);
?>
<br>

<!-- câu 14 Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
echo "Câu 14: ";
function findPosition($arr, $element) {
    $position = -1; 
    foreach ($arr as $key => $value) { 
        if ($value == $element) { 
            $position = $key; 
            break; 
        }
    }
    return $position; 
}
$array = array(1, 2, 3, 4, 5);
$element = 3;
$position = findPosition($array, $element);
if ($position != -1) {
    echo "Phần tử " . $element . " có vị trí là " . $position;
} else {
    echo "Không tìm thấy phần tử " . $element . " trong mảng";
}
?>
<br>

<!-- câu 15 Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
echo "Câu 15: ";
function reverseString($str) {
    $length = strlen($str); 
    $reverse_str = ""; 
    for ($i = $length - 1; $i >= 0; $i--) { 
        $reverse_str .= $str[$i]; 
    }
    return $reverse_str; 
}
$string = "Hello world!";
$reverse_string = reverseString($string);
echo "Chuỗi đảo ngược là: " . $reverse_string;
?>
<br>

<!-- câu 16 Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
echo "Câu 16: ";
function countElements($arr) {
    $count = 0; 
    foreach ($arr as $element) { 
        $count++; 
    }
    return $count; 
}
$array = array(1, 2, 3, 4, 5);
$count = countElements($array);
echo "Số lượng phần tử trong mảng là: " . $count;
?>
<br>

<!-- câu 17 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
echo "Câu 17: ";
function checkPalindrome($str){
    $reverseString = strrev($str); 
    if ($str === $reverseString){ 
        return true; 
    }
    else{
        return false; 
    }
}
$string = "level"; 
if (checkPalindrome($string)){ 
    echo $string . " là chuỗi Palindrome."; 
}
else{
    echo $string . " không phải chuỗi Palindrome."; 
}
?>
<br>

<!-- câu 18 Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
echo "Câu 18: ";
function countOccurrences($arr, $element) {
    $count = 0; 
    foreach ($arr as $value) { 
        if ($value == $element) { 
            $count++; 
        }
    }
    return $count; 
}
$arr = array(1, 2, 3, 2, 4, 2, 5, 2);
echo "Mảng ban đầu: ";
print_r($arr);
$element = 2;
$count = countOccurrences($arr, $element);
echo "Số lần xuất hiện của phần tử " . $element . " trong mảng là: " . $count;
?>
<br>

<!-- câu 19 Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
echo "Câu 19: ";
function sortDescending($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        $maxIndex = $i;
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$j] > $array[$maxIndex]) {
                $maxIndex = $j;
            }
        }
        $temp = $array[$maxIndex];
        $array[$maxIndex] = $array[$i];
        $array[$i] = $temp;
    }
    return $array;
}
$arr = array(3, 5, 2, 8, 1, 4);
echo "Mảng ban đầu: ";
print_r($arr);
$arr = sortDescending($array);
echo "Mảng đã được sắp xếp theo thứ tự giảm dần: ";
print_r($arr);
?>
<br>

<!-- câu 20  Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
echo "Câu 20: ";
function addElementToArray($arr, $element, $position) {
    $newArr = []; 
    if ($position == 'start') { 
        array_unshift($newArr, $element); 
    } elseif ($position == 'end') { 
        foreach($arr as $item) { 
            array_push($newArr, $item); 
        }
        array_push($newArr, $element); 
    }
    return $newArr; 
}
$arr = [1, 2, 3]; 
$element = 4; 
$position = 'end'; 
$newArr = addElementToArray($arr, $element, $position); 
print_r($newArr); 
?>
<br>

<!-- câu 21 Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
echo "Câu 21: ";
function findSecondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = null;
    for ($i = 1; $i < count($arr); $i++) {
        if (is_numeric($arr[$i])) {
            if ($arr[$i] > $largest) {
                $secondLargest = $largest;
                $largest = $arr[$i];
            } elseif ($arr[$i] != $largest && ($secondLargest === null || $arr[$i] > $secondLargest)) {
                $secondLargest = $arr[$i];
            }
        }
    }
    return $secondLargest;
}
$arr = array(4, -8, 2, 0, 9);
$secondLargest = findSecondLargest($arr);
if ($secondLargest !== null) {
    echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
} else {
    echo "Không có số lớn thứ hai trong mảng.";
}
?>
<br>

<!-- câu 22 Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.-->
<?php
echo "Câu 22: ";
function greatestCommonDivisor($a, $b) { 
    while ($b != 0) { 
        $temp = $a % $b; 
        $a = $b; 
        $b = $temp; 
    }
    return $a; 
}

function leastCommonMultiple($a, $b) { 
    $gcd = greatestCommonDivisor($a, $b); 
    $lcm = ($a * $b) / $gcd; 
    return $lcm;
}
$a = 9;
$b = 12;
$gcd = greatestCommonDivisor($a, $b);
echo "Ước số chung lớn nhất của " . $a . " và " . $b . " là: " . $gcd . "<br>";
$lcm = leastCommonMultiple($a, $b);
echo "Bội số chung nhỏ nhất của " . $a . " và " . $b . " là: " . $lcm;
?>
<br>

<!-- câu 23 Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không -->
<?php
echo "Câu 23: ";
function checkPerfectNumber($number) { 
    $sum = 0; 
    for ($i = 1; $i <= $number/2; $i++) { 
        if ($number % $i == 0) { 
            $sum += $i;
        }
    }
    if ($sum == $number) { 
        return true;
    } 
        else {
            return false;
        }
}
$number = 6;
if (checkPerfectNumber($number)) {
  echo $number . ' là số hoàn hảo';
} else {
  echo $number . ' không phải là số hoàn hảo';
}
?>
<br>

<!-- câu 24 Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
echo "Câu 24: ";
function findLargestOdd($arr) {
    $largestOdd = null;
    foreach ($arr as $num) {
        if (is_numeric($num) && $num % 2 != 0) {
            if ($largestOdd === null || $num > $largestOdd) {
                $largestOdd = $num;
            }
        }
    }
    return $largestOdd;
}
$arr = array(3, 5, -7, 2, 8, 4);
$largestOddNumber = findLargestOdd($arr);
if ($largestOddNumber !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
} else {
    echo "Không có số lẻ trong mảng.";
}
?>
<br>

<!-- câu 25 Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
echo "Câu 25: ";
function checkPrime($number) {
    if (!is_numeric($number) || $number <= 1 || $number != intval($number)) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 5.2;
if (checkPrime($number)) {
    echo "$number là số nguyên tố";
} else {
    echo "$number không phải là số nguyên tố";
}
?>
<br>

<!-- câu 26 Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
echo "Câu 26: ";
function findLargestPositive($arr) { 
    $largestPositive = null; 
    foreach ($arr as $number) {
        if (is_numeric($number) && $number > 0) {
            if ($largestPositive === null || $number > $largestPositive) {
                $largestPositive = $number;
            }
        }
    }
    return $largestPositive; 
}
$arr = array("abc","a");
$largestPositive = findLargestPositive($arr);
if ($largestPositive != null) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
} else {
    echo "Không có số dương nào trong mảng.";
} 
?>
<br>

<!-- câu 27 Viết chương trình PHP để tìm số âm lớn nhất trong một mảng -->
<?php
echo "Câu 27: ";
function findLargestNegative($arr) { 
    $largestNegativeNumber = null;
    foreach ($arr as $number) {
        if ($number < 0) {
            if ($largestNegativeNumber === null || $number > $largestNegativeNumber) {
                $largestNegativeNumber = $number;
            }
        }
    }
    return $largestNegativeNumber;
}
$arr = array(5,-6,3,7,-3);
$largestNegativeNumber = findLargestNegative($arr);
if ($largestNegativeNumber != null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegativeNumber;
} else {
    echo "Không có số âm nào trong mảng.";
}
?>
<br>

<!-- câu 28 Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.-->
<?php
echo "Câu 28: ";
function sumOddNumbers($n) {
	if (!is_int($n) || $n < 1 || !is_numeric($n)) { 
		return "Đầu vào không hợp lệ.";
	}
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 2 != 0) {
			$sum += $i;
		}
	}
	return $sum;
}
$n = 10;
$sum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;
?>
<br>

<!-- câu 29 Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.-->
<?php
echo "Câu 29: ";
function findPerfectSquares($start, $end) { 
    $result = array(); 
    for ($i = $start; $i <= $end; $i++) { 
        $sqrt = sqrt($i); 
        if ($sqrt == floor($sqrt)) { 
            array_push($result, $i); 
        }
    }
    return $result; 
}
$start = -10;
$end = 30;
$squares = findPerfectSquares($start, $end); 
if (!is_numeric($start) || !is_numeric($end)) {
    echo "Vui lòng nhập các giá trị số cho khoảng bắt đầu và kết thúc.";
} elseif ($start > $end) {
    echo "Khoảng không hợp lệ (kết thúc nhỏ hơn bắt đầu).";
} elseif ($start < 1 && $end < 1) {
    echo "Khoảng không hợp lệ (cả bắt đầu và kết thúc đều âm).";
} else {
    $start = max(1, $start); // Đảm bảo khoảng bắt đầu không âm
    echo "Các số chính phương từ {$start} đến {$end} là: ";
    foreach ($squares as $square) { 
        echo $square . " "; 
    }
}
?>
<br>

<!-- câu 30 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
echo "Câu 30: ";
function checkSubString($string, $subString) {
    $stringLength = strlen($string);
    $subStringLength = strlen($subString);

    for ($i = 0; $i <= $stringLength - $subStringLength; $i++) {
        $temp = substr($string, $i, $subStringLength);
        if ($temp === $subString) {
            return true; 
        }
    }

    return false; 
}
$string = "K56SD3 lớp php";
$subString = "php";

if (checkSubString($string, $subString)) { 
    echo "Chuỗi '{$subString}' là chuỗi con của chuỗi '{$string}'";
} else {
    echo "Chuỗi '{$subString}' không phải là chuỗi con của chuỗi '{$string}'";
}
?>


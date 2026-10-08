<?php
// Test 1 - Ordinary - Priority
$total = 550000;
$city = "Jakarta";
echo "Test 1 - Ordinary - Priority";
echo "<br>";
echo "Input: total=550000, city=Jakarta";
echo "<br>";
echo "Expected: Priority Delivery";
echo "<br>";
echo "Actual: ";
if($total <= 0){
    echo "Invalid Order";
}elseif($total >= 500000 && $city == "Jakarta"){
    echo "Priority Delivery";
}elseif($total >= 300000){
    echo "Free Standard Delivery";
}else{
    echo "Regular Delivery - Shipping Fee Rp20.000";
}
echo "<br>";
echo "<br>";

// Test 2 - Ordinary - Free
$total = 350000;
$city = "Bandung";
echo "Test 2 - Ordinary - Free";
echo "<br>";
echo "Input: total=350000, city=Bandung";
echo "<br>";
echo "Expected: Free Standard Delivery";
echo "<br>";
echo "Actual: ";
if($total <= 0){
    echo "Invalid Order";
}elseif($total >= 500000 && $city == "Jakarta"){
    echo "Priority Delivery";
}elseif($total >= 300000){
    echo "Free Standard Delivery";
}else{
    echo "Regular Delivery - Shipping Fee Rp20.000";
}
echo "<br>";
echo "<br>";

// Test 3 - Ordinary - Regular
$total = 150000;
$city = "Surabaya";
echo "Test 3 - Ordinary - Regular";
echo "<br>";
echo "Input: total=150000, city=Surabaya";
echo "<br>";
echo "Expected: Regular Delivery - Shipping Fee Rp20.000";
echo "<br>";
echo "Actual: ";
if($total <= 0){
    echo "Invalid Order";
}elseif($total >= 500000 && $city == "Jakarta"){
    echo "Priority Delivery";
}elseif($total >= 300000){
    echo "Free Standard Delivery";
}else{
    echo "Regular Delivery - Shipping Fee Rp20.000";
}
echo "<br>";
echo "<br>";

// Test 4 - Boundary - Pas 500k Jakarta
$total = 500000;
$city = "Jakarta";
echo "Test 4 - Boundary - Pas 500k Jakarta";
echo "<br>";
echo "Input: total=500000, city=Jakarta";
echo "<br>";
echo "Expected: Priority Delivery";
echo "<br>";
echo "Actual: ";
if($total <= 0){
    echo "Invalid Order";
}elseif($total >= 500000 && $city == "Jakarta"){
    echo "Priority Delivery";
}elseif($total >= 300000){
    echo "Free Standard Delivery";
}else{
    echo "Regular Delivery - Shipping Fee Rp20.000";
}
echo "<br>";
echo "<br>";

// Test 5 - Boundary - Pas 300k
$total = 300000;
$city = "Medan";
echo "Test 5 - Boundary - Pas 300k";
echo "<br>";
echo "Input: total=300000, city=Medan";
echo "<br>";
echo "Expected: Free Standard Delivery";
echo "<br>";
echo "Actual: ";
if($total <= 0){
    echo "Invalid Order";
}elseif($total >= 500000 && $city == "Jakarta"){
    echo "Priority Delivery";
}elseif($total >= 300000){
    echo "Free Standard Delivery";
}else{
    echo "Regular Delivery - Shipping Fee Rp20.000";
}
echo "<br>";
echo "<br>";

// Test 6 - Invalid - Total 0
$total = 0;
$city = "Jakarta";
echo "Test 6 - Invalid - Total 0";
echo "<br>";
echo "Input: total=0, city=Jakarta";
echo "<br>";
echo "Expected: Invalid Order";
echo "<br>";
echo "Actual: ";
if($total <= 0){
    echo "Invalid Order";
}elseif($total >= 500000 && $city == "Jakarta"){
    echo "Priority Delivery";
}elseif($total >= 300000){
    echo "Free Standard Delivery";
}else{
    echo "Regular Delivery - Shipping Fee Rp20.000";
}
echo "<br>";

?>
<?php 

// variable scope
// 1. global scope
// $x = 10;
// function test_variable_scope() {
//     global $x;
//     echo $x;
// }
// test_variable_scope();

// 2. local scope
// echo "<br>";
// echo "20";

// 3. superglobal scope
// scope yang dimiliki oleh PHP ( merupakan array assosiative )
// 1. $_GET ( URL )
// cara menulisakan
//      1. didalam text editor
// $_GET["nama"] = "Dimas Ariyanto";
// $_GET["nim"] = "21.11.4408";
// var_dump($_GET);
//      2. di dalam URL
// http://localhost/phpDasar/pertemuan7/?nama=dimas%20ariyanto&nim=21.11.4408

// 2. $_POST ( FORM ) -> biasanya digunkan untuk menu login

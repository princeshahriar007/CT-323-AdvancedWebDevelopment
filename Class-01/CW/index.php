<?php
#Data Type

  $name = "Prince Shahriar";
  $character = 'T';
  $nothing = '';            #Empty  - outputs - string(0) ""
  $nope;                    #Null   - outputs - NULL with warning
  $num = 123;
  $frac = 12.3;
  echo var_dump($name)."<br>";          #Predefind method
  echo var_dump($character)."<br>";
  echo var_dump($nothing)."<br>";
# echo var_dump($nope)."<br>";
  echo var_dump($num)."<br>";
  echo var_dump($frac)."<br>";

  $arr = array("Rahim","Karim","Joshim");
  echo $arr[2]."<br>";
  echo $arr[0]." ".$arr[1]." ".$arr[2]."<br>";
  $arr_2d = array(
    array("Rahim","Karim","Joshim","Rubel"),
    array("Shabana","Rojina","Bobita","Shabnur"),
    array("Jambu","Kabila","Dipjol","Misha")
  );
  echo $arr_2d[1][1]." ".$arr_2d[2][1]."<br><br>";
  echo var_dump($arr_2d)."<br><br>";
  $arr_as = array(
    "id" => "15-12-1233",
    "name" => "Prince Shahriar",
    "status" => "running"
  );
  echo var_dump($arr_as)."<br>";
  echo $arr_as["name"]."<br><br>";

  # String Functions
  echo strlen($name)."<br>";                 #Outputs sting length
  echo str_word_count($name)."<br>";
  echo md5($name)."<br>";
  echo sha1($name)."<br>";

  print_r(explode(" ", $name));
  echo "<br>";
  $data_1 = explode(" ", $name);              #String to array
  echo $data_1[0]."<br>";

  $new_arr = array("I","am","Batman");
  $data_2 = implode(" ", $new_arr);           #Array to string
  echo $data_2."<br>";

  # Change comma separated string to space separated sentence

  $test = "I,am,Superman";
  echo $test."<br>";

  $data_3 = explode(",", $test);              #String to array
  $res = implode(" ", $data_3);               #Array to string
  echo $res."<br>";

  # Mathematical Operations
  # ** - Power operator
  $i = 4 ** 4;
  echo $i."<br>";
  $a = 4;
  $b = $a++;
  echo $a." ".$b."<br>";                      # Incrementing after asigning - So a = 5, b = 4
  $c = 4;
  $d = ++$c;
  echo $c." ".$d."<br>";                      # Incrementing before asigning - So c = 5, d = 5

  #Variable Handling Function
  echo is_int($num)."<br>";                   # 1 = TRUE, 0 = FALSE
  echo gettype($num)."<br>";
  echo gettype($name)."<br>";

  print_r($_SERVER);                          # $_SERVER is an associative array  - Outputs info about server


?>

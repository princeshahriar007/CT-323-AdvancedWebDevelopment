<?php
  # 1.2.7

  $data = "GACCATCAAAACTGATAAACTACTTAAAAATCAGT";
  $str = "AAA";
  $count = 0;
  for ($i=0; $i < strlen($data)-strlen($str); $i++) {
    if (substr($data, $i, strlen($str)) == $str) {
      $count++;
    }
  }
  echo $count.'<br />';

  # 1.2.10
  /*
  $data = "GATCCAGATCCCCATAC";
  $k = 2;
  $frequent_pattern;
  $str = '';
  $pattern;
  $count;
  function PatternCount($data,$str, $count){
    for ($i=0; $i < strlen($data)-strlen($str); $i++) {
      if (substr($data, $i, strlen($str)) == $str) {
        $count++;
      }
    }
    return $count;
  }
  for ($i=0; $i < strlen($data)-$k; $i++) {
    $pattern[$i] = substr($data, $i, $k);
    $count[$i] = PatternCount($data, $pattern[$i], 0);
    //echo $pattern[$i].' = '.$count[$i].'<br />';
  }
  $maxCount = max($count);
  //echo $maxCount.'<br>';
  for ($i=0; $i < strlen($data)-$k; $i++) {
    if ($count[$i] == $maxCount) {
      $str = $str.' '.$pattern[$i];
    }
  }
  $final_data = explode(" ", $str);
  $res = implode(" ", array_unique($final_data));
  echo $res;
  */
  # 1.3.2
  /*
  $data = "TTGTGTC";
  $data_arr = str_split($data);
  for ($i=0; $i < strlen($data); $i++) {
    if ($data_arr[$i] == 'A') {
      $data_arr[$i] = 'T';
    }elseif ($data_arr[$i] == 'T') {
      $data_arr[$i] = 'A';
    }elseif ($data_arr[$i] == 'C') {
      $data_arr[$i] = 'G';
    }elseif ($data_arr[$i] == 'G') {
      $data_arr[$i] = 'C';
    }
  }
  $res = implode("", $data_arr);
  echo strrev($res);
  */
  # 1.3.5
  /*
  $data = "AAACATAGGATCAAC";
  $str = "AA";
  $res_str = "";
  for ($i=0; $i < strlen($data)-strlen($str); $i++) {
    if(substr($data, $i, strlen($str)) == $str){
      $res_str = $res_str.' '.strval($i);
    }
  }
  echo $res_str;
  */
  # 1.4.5 - Inefficient Way - Have to do it the efficient way
  /*
  $data = "AAGACGAGGGTTGTGGGTGGCTCGGTCTCAAAAAAAATAGGTATGATCTTATCGGCACGACCATAGTCCCCTCGGACGTCGAAAATGCAAATGTTCCGCCAAGAAGGCGTCCTCATTCTAGATGTTTTTTTTCGCGTCGTGCGTTTTCGCGTGGTGAGTCACTGTATGCCATAAAGACGTCGCGTAAGTGTATGACAACCTGTGGATGTGAGTCTCGCCTGGGTCTAAATCGCGATCTAGTGTCTTGCGGCTCTAGTCGTGTATCCACAGATAGAAGCTTTTCCTATGCCGAGCCAGGGTTTTAAAATACCTAATCCATCGGAAAGGTTACGGCTTGACCCCTCAAAGAGCTAGAACCGGAATAATCAGTCTTTCAACAGACCTGATGACCGCCGGCGCCAATGGTTTAAGTATTACCAGTCCCTTTTTTCCCTTTTTTTTCCCTTTTTAGAACTATAATCGTATCCCTGAGCTGAAGCAAGTACGAGGCATTGACTAATATCGCATCCACCGCGACCGTTATGACCGGCCGCGCCTCACCTCGTATCCGATTCTGAACGAACAGATATTTCTATTACTGCGCCGACTAATCTAAGCAGTCGTCAGGCTGCGACTAAGGTGTCGAAGCCAGAGCGTAGACGGTCCCCGGGCCAATCTAGCACGGTGCTAGTACGGTGCTACTATATCGAAGCCTGAAGCTCGAAGCCTGCCTCTTGAGCCTTGCCGTAAACTAACGCCGGGCGTATTCTCGCGTGTTTCATGGAAGTATAAAGCCGAGCTAGAGATAGTCGATTTTAATATGCTGAGGAATCTTAACGATATCAAGTATAAAAGCTCAAACTGTGGAGCTGGGGTCCACCCACTATCCTGGGCTGGGACAACGGCATCCGTCCACCTACGGAAGGTGCATCTTTTCGGGCCCCGCATGATACTGGATTCGCTGGTTTTACCAAGAAAAGGGCGTCTGAAAACTTTCTCGCTCGCTCGGGCATGATGTTTATGTTCACATGGCCTTGTAATGATACCGTCCGGGCTTGTACCTACAGTATACCATATAAGACTAAAAAACCTCCCAACCTGCGTACAACACAAGGGCCAGCGACGATTTTTACAGGAGTAGAGGGGCGAGCAACCAACCTAATAGGGTTTACCACGGTTTTAGGACCGACCATTGTTGACCATTGTTATACTGGTTGCTGCCGGATTTCCGTCACCACCTTTAACCTACTGGGTCTTATAGATTTCGAGTCCCTTATACGCCCTCCGGAGTTCATACAACCGAGCTTTTATACGCTTTTTTCTCACGCAGTACGTACTACCCGCTCCTATGGCTCCCTTTCCACGGCGAAGCGATACTTGATCGTATATTTAATTAGTAATTAGGTTAGTAGAGGACTTGACTTTAGACCTACTCAAGTGACGCGTTACAGTGGGGCCCGATGTATGTGATGTTGCCCGATGTCATGCAGATCGTCGTGATGGTTGCTAAGCGGTTAAATCGATCGGGCCCTGTTCCCACCTTGCTTAGCAAATACCACTTTGCGGAGGACGACATATGTATGACGTCTGGAGTCAGGAGAGGATAAGCTGTCCCCCTTTCAGACCGGATCAGTTAAGCCATCAGCCATCTGCCATCTGATTGACTGGCAAGGTAGCTGCGATGGATGATCGTATCATCAGATCGTATCCCATCTACGAACACCTAAGACGTGACAAAAATACTGTTCGTAGAACGTGAGAACCAATCAGAAAGGATAAAAGTGACAGCGCTCTTTTCTAGGGTCGGCATTGGAGGTGAACCGCTTAGACGAATCGCGTATTCGCGTATAATCGCGTATGGTGGCGACCTAGTAATACAGCACACCGATATAAATGCTAAGAAGTCAACCGTAG";
  $k = 9;
  $L = 28;
  $t = 4;
  $frequent_pattern;
  $str = '';
  $pattern;
  $count;
  function PatternCount($data,$str, $count){
    for ($i=0; $i < strlen($data)-strlen($str); $i++) {
      if (substr($data, $i, strlen($str)) == $str) {
        $count++;
      }
    }
    return $count;
  }
  for ($i=0; $i < strlen($data)-$k; $i++) {
    $pattern[$i] = substr($data, $i, $k);
    $count[$i] = PatternCount($data, $pattern[$i], 0);
    //echo $pattern[$i].' = '.$count[$i].'<br />';
  }
  //echo $maxCount.'<br>';
  for ($i=0; $i < strlen($data)-$k; $i++) {
    if ($count[$i] == $t) {
      $str = $str.' '.$pattern[$i];
    }
  }
  $final_data = explode(" ", $str);
  $res = implode(" ", array_unique($final_data));
  echo $res;
  */
  # 1.5.5
  /*
  $data = "TTAAA";
  $freq_arr;
  $pat_num;
  $pattern;
  function PatternToNumber($str){
    $num = 0;
    $str_rev = strrev($str);
    $p = str_split($str_rev);
    for ($i=0; $i < count($p); $i++) {
      if ($p[$i] == 'A') {
        $num = $num+(0*(pow(4,$i)));
      }elseif ($p[$i] == 'C') {
        $num = $num+(1*(pow(4,$i)));
      }elseif ($p[$i] == 'G') {
        $num = $num+(2*(pow(4,$i)));
      }elseif ($p[$i] == 'T') {
        $num = $num+(3*(pow(4,$i)));
      }
    }
    return $num;
  }

  for($i = 0; $i < (pow(4, 2)); $i++){
    $freq_arr[$i] = 0;
  }
  for($i = 0; $i < pow(4, 2); $i++){
    $pattern[$i] = substr($data, $i, 2);
    $pat_num[$i]=PatternToNumber($pattern[$i]);
    for ($j=0; $j < 16; $j++) {
      if($pat_num[$i]==$j){
        $freq_arr[$j]++;
      }
    }
  }
  print_r($freq_arr);
  */
  /*
  ComputingFrequencies(Text, k)
        for i ← 0 to 4k − 1
            FrequencyArray(i) ← 0
        for i ← 0 to |Text| − k
            Pattern ← Text(i, k)
            j ← PatternToNumber(Pattern)
            FrequencyArray(j) ← FrequencyArray(j) + 1
        return FrequencyArray
        */
?>

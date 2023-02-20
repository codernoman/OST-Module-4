<?php
$str = "The quick brown fox jumped over the lazy dog";
function longestWord($str) {
	$words = explode(' ', $str);
	$longestWord = '';
  
	foreach ($words as $word) {
	  if (strlen($word) > strlen($longestWord)) {
		$longestWord = $word;
	  }
	}
  
	return $longestWord;
  }
  
echo longestWord($str); 

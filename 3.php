<?php

function count_vowels($string)
{
	$count = 0;
	for ($i = 0; $i < strlen($string); $i++)
	{
		if ($string[$i] == 'a' || $string[$i] == 'i' ||
			$string[$i] == 'u' || $string[$i] == 'e' || $string[$i] == 'o')
		{
			$count++;
		}
	}

	return $count;
}
?>

<?= count_vowels("abcdefghi"); ?> <br>
<?= count_vowels("granblue fantasy"); ?>
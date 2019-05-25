<?php

function ganti_kata($kata, $char1, $char2)
{
	// hitung panjang kata
	$i = 0;
    while (!empty($kata[$i]))
    {
        $i++;
    }
    $length = $i;

    for ($i = 0; $i < $length; $i++)
    {
    	if ($kata[$i] == $char1)
    	{
    		$kata[$i] = $char2;
    	}
    }

    return $kata;
}
?>

<?= ganti_kata("riski lee",'s','z'); ?> <br>
<?= ganti_kata("arcademy", 'c', 'k'); ?>

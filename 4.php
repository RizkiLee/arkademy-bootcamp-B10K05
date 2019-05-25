<style type="text/css">
	* { font-family: Consolas; }
</style>

<?php

function cetakGambar($limit)
{
	if ($limit % 2 == 0)
	{
		echo "Bilangan harus ganjil.";
		return;
	}

	for ($row = 0; $row < $limit; $row++)
	{ 
		for ($col = 0; $col < $limit; $col++)
		{
			if ($row == 0 || $row == ($limit - 1))
			{
				echo " X ";
			}

			elseif($col == floor($limit/2))
			{
				echo " X ";
			}

			else
			{
				echo " = ";
			}
		} ?>
		<br>
	<?php }
}
?>

 <?= cetakGambar(6); ?> <br><br>

 <?= cetakGambar(7); ?> <br><br>

 <?= cetakGambar(9); ?>

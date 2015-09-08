<?php

function fun_1 ( $numero, $autre ) {
	if ( $numero == 2 )
		fun_2($autre);
	elseif ( $numero == 3 )
		fun_3($autre);
	elseif ( $numero == 4 )
		return fun_4($autre);
	elseif ( $numero == 5 )
		return fun_5($autre);
	elseif ( $numero == 6 )
		return fun_6($autre);
}

function fun_2 ( $chaine ) {

	echo "Hello " . $chaine . "<br />\n";

}


function fun_3 ( $chaine ) {

	for ( $i = 1; $i <= 10; $i++ )
		echo "Hello " . $chaine . " " . $i . "<br />\n";

}


function fun_4 ( $nombre ) {
	return $nombre * $nombre;
}


function fun_5 ( $jours ) {

	return date('d-m-Y', 3600 * 24 * $jours);

}


function fun_6 ( $date ) {

	return date_create_from_format('d/m/Y', $date)->format('l');

}

function fun_7 ( $get ) {

	return fun_1($get['numero'], $get['autre']);

}

function fun_8 ( $n ) {

	echo "<table border=1>";
	for ( $i = 0; $i < $n; $i++ )
		if ( $i % 2 )
			echo "<tr><td>&nbsp;</td></tr>";
		else echo '<tr><td style="background: black;">&nbsp;</td></tr>';
	echo "</table>";


}

function fun_9 ( $n ) {
	echo "<table border=1>";
	for ( $i = 0; $i < $n; $i++) {
		echo "<tr>";
		for ( $j = 0; $j < $n; $j++) {
			if ( $j % 2 === $i % 2 )
				echo "<td>$i-$j</td>";
			else echo "<td style=\"background: black; color: white;\">$i-$j</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

fun_1(2, "Boris");
fun_1(3, "Aurel");
echo fun_1(4, 5);
echo "<br />\n";
echo fun_1(5, 150);
echo "<br />\n";
echo fun_1(6, '07/09/2015');
echo "<br />\n";
fun_7($_GET);
fun_8(10);
fun_9(10);
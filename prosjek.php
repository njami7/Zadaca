<!DOCTYPE HTML>
<html>
	<head>
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marijano Prodanic">
	</head>
<body>
		<?php
			 $ocjene = array();
             array_push($ocjene, $_POST['a']);
             array_push($ocjene, $_POST['b']);
             $prosjecna_ocjena=array_sum($ocjene)/2;
             $konacna_ocjena=0;
             if ($ocjene[0]=='1' || $ocjene[1]=='1')
             {
                $konacna_ocjena=1;
             }
             else {
                $konacna_ocjena=round($prosjecna_ocjena);
             }
            
		print '
			<div class="odlomak">
				<p class="vra">Kolokvij 1.='.$ocjene[0] .'</p>
				<p>Kolokvij 2.='.$ocjene[1].'</p>
				<p>Prosjecna ocjena='.$prosjecna_ocjena .'</p>
                <p>Zakljucna ocjena='.$konacna_ocjena .'</p>
			</div>';
		?>
	</body>
</html>
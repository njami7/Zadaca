<!DOCTYPE HTML>
<html>
	<head>
		<title>Prosjek</title>
        <link rel="stylesheet" href="style.css">
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
			<div class="rezultat">
				<p class="ocjena">Kolokvij 1.='.$ocjene[0] .'</p>
				<p class="ocjena">Kolokvij 2.='.$ocjene[1].'</p>
				<p class="ocjena2">Prosjecna ocjena='.$prosjecna_ocjena .'</p>
                <p class="ocjena2">Zakljucna ocjena='.$konacna_ocjena .'</p>
			</div>';
		?>
	</body>
</html>
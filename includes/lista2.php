<?php
include_once('funkcje_dolacz.php');
include_once('naglowek.php');
		 
if (isset($_POST['nazwa_uz'])) {
$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];

if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;
}

}

//ustawienia dla przegladarki zeby nie cachowala wynikow
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();

$result = $baza->query('SELECT ip,system,browser,data FROM statystyka ');
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);

?>
 <style type="text/CSS">
	 obr {
		background: none;
		box-shadow: 0px 0px 0px 0px;

		float:none;
		margin: 0px;
		list-style:none;
		
		border: 0;
		border-radius: 0px;
}
</style>
  <div id="menu" class="clearfix">
    	<span></span>
        <ul>
           <li class="current okno"><a href="lista3.php?wybor=all"><b>All</b></a></li> 
			<li class="current okno"><a href="lista3.php?wybor=data"><b>Data</b></a></li>
           <li class="okno" ><a href="lista3.php?wybor=ip"><b>IP</b></a></li>
           <li class="okno"  ><a href="lista3.php?wybor=system"><b>System</b></a></li>
      <!--      <li><a href="mojahistoria.php?tytul=moja_historia"><b>Moja Historia</b></a></li>
			<li><a href="porady.php?tytul=porady"><b>Porady</b></a></li>-->
         <!--   <li><a href="formularz.php"><b>Zgłoszenie pytania</b></a></li>
            <li><a href="kursy.php?tytul=kurs"><b>Kursy</b></a></li>  -->
      
        </ul>
		<div id="nowy" style="position: relative; left: 50px; ">
		
				  <?php
					if (isset($_SESSION['uwierz_uzyt'])) {
					echo '<h2> Historia: </h2>';
		      mysql_query('SET NAMES utf8');
			$i = 1;
			
        /*    while ($row = mysql_fetch_array($result)) {
	
				echo '<div id="pasek" style="position: relative; width: 820px; color: black; background: white; border: 1px  solid black;border-radius: 3px; padding: 0px 4px 0px 4px; 
		margin: 0px;"><p style="position: relative; top: 5px;font-size: 20px; margin:0px; padding:2px; height:5px;width: 700px; ">
				'.$i.'. '.$row['ip'].'. '.$row['system'].'. '.$row['browser'].'. '.$row['data'].'</p><a class="obr" style="position: relative; left: 750px; text-decoration:none;"href="dodaj2.php?id='.$row['id'].'"><img  src="../images/dyskietka2.png" width="3%" height="2%"<b></b></a>
												<a class="obr" style="position: relative; left: 750px; text-decoration:none;"href="usun_artykul.php?id='.$row['id'].'"><img  src="../images/kosz.png" width="3%" height="2%"<b></b></a></div>';
				
			
       $i=++$i;
            }
			*/
			}
			else
			{
			echo 'Brak dostępu';
			}
            ?>
		
		
		
		</div>

<?php	
include_once('stopka.php');
?>
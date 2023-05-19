
    <div class="side hidden">

    <img src="http://ozama-creation.fr/img/ozama-creation-logo-1677658204.jpg" alt="">
<form id="fingerForm" method="POST">
<p>Il suffit de vous équiper d'une simple feuille de papier que vous découperez en forme de ruban. L'enrouler autour de votre doigt et annoté lorsque le papier se superpose. Munissez-vous de votre règle et mesurer votre ruban de papier déplié.</p>
<img src="https://www.linea-chic.fr/blog-bijoux/wp-content/uploads/2018/10/tour-300x201.jpg" alt="guide circon" id="fingerform">
        <p>Taille de votre tour de doigt en millimètres:</p>
  <input type="text" id="fingerDiameter" name="fingerDiameter"><br><br>
  <input type="submit" value="Envoyer">

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $diameter = $_POST['fingerDiameter'];
  $sizes = ["42 (2,25 sous le format US)", "44 (3 sous le format US)", "46 (3,75 sous le format US)", "48 (4,5 sous le format US)", "50 (5,5 sous le format US)", "52 (6 sous le format US)", "54 (7 sous le format US)", "56 (7,75 sous le format US)", "58 (8,5 sous le format US)", "60 (9,5 sous le format US)", "62 (10 sous le format US)", "64 (11 sous le format US)", "66 (11,75 sous le format US)", "68 (12,5 sous le format US)", "70 (13,25 sous le format US)"];
  $size = "";

  for ($i = 0; $i < count($sizes); $i++) {
    if ($diameter < (41.8 + ($i * 1.8))) {
      $size = $sizes[$i];
      break;
    }else if($diameter >68){
      $size=$sizes[14];
    }elseif($diameter <41.8){
      $size = $sizes[0];
    }

elseif(41.8<=$diameter && $diameter>43.6){
$size =44;
break;
}

  }

  echo "La taille de votre doigt est: " . $size;
}
?></form>
<p> Pour une mesure plus précise, il faudrait utiliser un baguier que vous pouvez trouver chez votre bijoutier.</p>
</div>
<div class="content">
		<p><a href="#" id="toggleSidebar">Afficher/masquer la sidebar</a></p>
	</div>
<script src="main.js"></script>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Le blog d'Ozama Creation - Bijoux</title>
    <link rel="stylesheet" href="global.css">
  </head>
  <body>
    <?php include "sidebar.php" ?>
    <main> <header>
          <h2>Bague </h2>
          <p class="meta">Publié le 11 mars 2023 par Jane Doe</p>
        </header><div class="picture">
            <img src="http://ozama-creation.fr/img/ozama-creation-logo-1677658204.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure sint consectetur dolorem harum et odio veritatis eius distinctio alias pariatur? Iure, rem perspiciatis at quaerat sunt pariatur dolorem magni quisquam.</p>
            
</div>
<section><h2>Nouveaux articles</h2>
<article>
        <?php

$articles = array(
  array(
    'image' => 'http://ozama-creation.fr/modules/ybc_nivoslider/images/cc61edf259ee1179d3b489a41129a7a111ece2f8_BI.jpg',
    'title' => 'Article 1',
    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusamus sapiente debitis consequatur a cumque quisquam beatae rerum minima inventore! Alias sed est aspernatur atque, repellat provident exercitationem ratione deserunt!'
  ),
  array(
    'image' => 'http://ozama-creation.fr/modules/ybc_nivoslider/images/cc61edf259ee1179d3b489a41129a7a111ece2f8_BI.jpg',
    'title' => 'Article 2',
    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusamus sapiente debitis consequatur a cumque quisquam beatae rerum minima inventore! Alias sed est aspernatur atque, repellat provident exercitationem ratione deserunt!'
  ),
  array(
    'image' => 'http://ozama-creation.fr/modules/ybc_nivoslider/images/cc61edf259ee1179d3b489a41129a7a111ece2f8_BI.jpg',
    'title' => 'Article 3',
    'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusamus sapiente debitis consequatur a cumque quisquam beatae rerum minima inventore! Alias sed est aspernatur atque, repellat provident exercitationem ratione deserunt!'
  )
);

foreach ($articles as $article) {

echo "<div class='align'><div class='obje'><div class='image-and-paragraph'>
      <img src='". $article['image'] ."' alt='Image de l'article'></div><div class='fadedbox'>
      <div class='title text'>" . $article['title'] ."</div></div></div>
      <p>'".$article['content'] . "'</p></div>";
}
?>

  </article></section>
        <footer>
          <p class="tags">Tags: <a href="#">bijoux</a>, <a href="#">mode</a>, <a href="#">tendance</a></p>
        </footer>

    </main>
    </body>
</html>



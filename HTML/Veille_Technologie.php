
<!--php qui s'applique au vieille technologique -->
<?php


// $xml = simplexml_load_file('https://javascript.developpez.com/index/rss');
$xml = simplexml_load_file('https://www.journalduhacker.net/rss');
$xml = simplexml_load_file('https://news.humancoders.com/t/java/items/feed');

foreach ($xml -> channel -> item as $item) {

    print("<a href='{$item->link}'>'{$item->title}</a><br/>");
    print("{$item->pubDate}");
    print("{$item->description}");
    print("{$items->$date}");
    print("{$items->$enclosure}");

    // $enclosureUrl = $item->enclosure[''];
    // print('<br/><br/>enclosureUrl = "'. $enclosureUrl .'"<br/><br/>');


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/Veille_Technologique.css" />
  <title>Veille Technologique</title>
</head>

<body>
  <!-- Html qui s'applique au tableau -->
  <section>
    <table xborder="">
      <tr align="center">
        <td colspan="3">
          <h1>Veille Technologique</h1>
        </td>
      </tr>
      <tr>
        <td width="0%" align="right">
          <a href="#Sujet1"><p>Sujet 1</p></a>
        </td>
        <td width="10%" align="center">
          <a href="#Sujet2"><p>Sujet 2</p></a>
        </td>
        <td width="0%" align="left">
          <a href="#Sujet3"><p>Sujet 3</p></a>
        </td>
      </tr>
    </table>
    <a href="../index.html">
      <section id="PP" align="center">
        <img src="../Fichier/Photo/Moi.jpg" alt="" />
        <h2>Accueil</h2>
        <br />
      </section>
  </section>
  <br>
  <br>
  <br>
  <section id="Sujet1">
    <h1>Sujet 1</h1>
    <p>Veille_Technologique</p>
    
  </section>
  <br>
  <br>
  <section id="Sujet2">
    <h1>Sujet 2</h1>
    <p>Veille_Technologique</p>
  </section>
  <br>
  <br>
  <section id="Sujet3">
    <h1>Sujet 3</h1>
    <p>Veille_Technologique</p>
  </section>


</body>

</html>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Catalog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,500,700&amp;subset=cyrillic" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', Helvetica, sans-serif;

/* Style the header */
header {
  background-color: #666;
  padding: 10px;
  text-align: center;
  font-size: 15px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 10px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 300px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>

<header>
  <h2>Catalog</h2>
</header>
<h3>Категории</h3>
<!------------  php category loop ---------->
<?php


$BR = '<br />';

$categories2 = array(
        'Компьютеры' => array( 'Lenovo', 'HP', 'Dell'),
       'Комплектующие' => array( 'Материнские платы', 'Процессоры', 'Память'),
        'Аксессуары' => array( 'Кабели', 'Переходники', 'Чистящие средства')
);
echo '<section>
	<nav>
	<ul>';
foreach ($categories2 as $category => $items) {
	echo '<li><a href="#">'$category.' '.$items'</a></li>';
}
echo '</ul>
</nav>
</section>'

?>

<section>

  <article>
    <h1>Category</h1>
<p>description</p>
  </article>
</section>
<footer>
  <p>Footer</p>
</footer>

</body>
</html>


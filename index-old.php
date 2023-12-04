<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Alexandr Gerasimov">
    <title>Марафон N2T-трансформация</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body >
    
    <div class="container-main">
      <div class="main-cover">
        <div class="main-cover__filter"></div>
        <header class="main-cover__header">
          <div>
            <nav class="menu">
              <a class="menu_link" href="#">О марафоне</a>
              <a class="menu_link" href="#">Тарифы</a>
              <a class="menu_link" href="#">Контакты</a>
            </nav>
          </div>
        </header>
        <div class="main-cover__content">
          <h1>Марафон N2T-Трансформация</h1>
          <h3>Online-проект Александра Герасимова по увеличению энергии и личной эффективности</h3>
          <a href="#" id="get_part">Принять участие</a>
        </div>
      </div>

      <div class="container about">
        <div class="about__left">
          <h3>Об авторе и о марафоне</h3>
          <p>Приветствую всех на сайте моего марафона трансформации личности. Меня зовут Александр Герасимов. Я являюсь одним из бывших организаторов Like-центра в г. Иркутске, а в частности куратором проекта "Армия" Аяза Шабутдинова. В своем марафоне я взял лучшие техники из проекта "Армия" и подкрепил знаниями о работе мозга от команды "Нейрософия". Пройдя марафон вы за 14 дней внедрите в вашу жизнь систему увеличения энергии, отказа от вредных привычек - пожирателей энергии, поставите большую финансовую цель на год, познакомитесь с основами финансовой грамотности для достижения богатства в жизни, а также попадете в классное окружение таких же заряженных людей.</p>
        </div>
        <div class="about__right">
          <div class="author-photo">фото</div>
        </div>
      </div>

      <footer class="">
        <p>N2T project <?php echo date('Y') ?></p>
        <?php /*
          $conn = new mysqli("localhost", "ca04423_n2t", "yfp3ub7n6", "ca04423_n2t");
          if($conn->connect_error){
              die("Ошибка: " . $conn->connect_error);
          }
          //echo "Подключение успешно установлено";
          $sql = "SELECT * FROM users";
          if($result = $conn->query($sql)){
              $rowsCount = $result->num_rows; // количество полученных строк
              echo "<p>Получено объектов: $rowsCount</p>";
              echo "<table><tr><th>Id</th><th>Имя</th><th>Access</th></tr>";
              foreach($result as $row){
                  echo "<tr>";
                      echo "<td>" . $row["id"] . "</td>";
                      echo "<td>" . $row["name"] . "</td>";
                      echo "<td>" . $row["access"] . "</td>";
                  echo "</tr>";
              }
              echo "</table>";
              $result->free();
          } else{
              echo "Ошибка: " . $conn->error;
          }
          $conn->close();
          */
        ?>
      </footer>
    </div>
    
    <script src="js/main.js"></script>
  </body>
</html>
  

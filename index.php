<?php

$server = 'localhost'; 
$username = 'username'; 
$password = 'password'; 
$dbname = 'rocketbusiness';

$connect = mysqli_connect($server, $username, $password, $dbname);
mysqli_set_charset($connect, "utf8mb4");
mysqli_select_db($connect, $dbname);
if(!$connect){
    die('Ошибка подключения к базе данных');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
    <title>Тестовое задание от Rocket Business</title>
</head>
<body>

<div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Записаться на приём</h3>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
        <form action="formhandler.php" method="post">
            <input class="inp" type="text" name="fio" placeholder="ФИО" required>
            <input class="inp" type="text" name="phone" placeholder="Телефон" required>
            <input type="submit" class="btn" name="submit" value="Отправить">
        </form>
      </div>
    </div>
  </div>
</div>

    <header class="header">
        <div class="h_sec">
            <div class="h_col">
                <div class="logo">LOGO</div>
                <svg class="geo-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#aaa" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>
                <a href="https://goo.gl/maps/ovqU3RR5BY6ygfnDA" class="address">
                    <p>Ростов-на-Дону</p>
                    <p>ул. Ленина, 2Б</p>
                </a>
            </div>
            <div class="h_col">
                <a class="icon" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg></a>
                <a class="phone" href="tel:+78630000000">+7(863) 000 00 00</a>
                <a href="#openModal" class="btn">Записаться на приём</a>
            </div>
        </div>
        <div class="h_sec fornav">
            <nav class="nav">
                <a href="">О клинике</a>
                <a href="">Услуги</a>
                <a href="">Специалисты</a>
                <a href="">Цены</a>
                <a href="">Контакты</a>
            </nav>
            <div></div>
        </div>

        <nav class="mobile-nav">
            <div class="navbar">
                <div class="container nav-container">
                    <input class="checkbox" type="checkbox" name="" id="" />
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>  
                    <div class="logo">LOGO</div>
                    <div class="tc">
                    <a href="tel:+78630000000">+7(863) 000 00 00</a>
                    <p>Ростов-на-Дону</p>
                    </div>
                    <div class="menu-items">
                    <li><a href="#">О клинике</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Специалисты</a></li>
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Контакты</a></li>
                    </div>
                </div>
            </div>
          </nav>


    </header>

    <main>
        <section class="intro">
            <div class="itext">
                <p class="title">Многопрофильная клиника для детей
                    и взрослых</p>
                <p class="caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <img src="images/ca36f24aa3088cc739e22a3e57f64fff.png" alt="">
        </section>

        <section class="checkups">

            <div class="checkup">

<?php 

    if (count($_GET) > 0) {   

        if (isset($_GET['page'])) {
            $page = $_GET["page"];
        }
        else $page = 0;
    }

        $stmt = $connect->prepare("SELECT * FROM `checkups` LIMIT 1 OFFSET ?;");
        $stmt->bind_param("s", $page); 
        $stmt->execute();
        $result = $stmt->get_result();
        $result = mysqli_fetch_array($result);
        
        $caption = $result[1];
        $list = explode("\n", $result[2]);
        $hlist = "";
        foreach ($list as $i) {
            $hlist = $hlist."<li>" . $i . "</li>";
        }
        
        $cost = $result[3];
        $oldcost = $result[4];

        echo "<div class='text'>
            <p class='title'>CHECK-UP</p>
            <p class='caption'>$caption</p>
            <ul>
            $hlist
            </ul>
            <div class='costs'>
                <p class='cost'>Всего $cost</p>
                <p class='oldcost'>$oldcost</p>
            </div>
            
                    <div class='btns'>
                        <a href='#openModal' class='btn'>Записаться</a>
                        <button class='btn btn1'>Подробнее</button>
                    </div>
                    
                </div>

                <div class='checkup-img'><img src='images/ba3c21c9cbdb44a626fe004c5b4fd9a5.jpeg' alt=''></div>
                
            </div>

        </section>

        <div class='pagination'>
            <a href='index.php?page=" , $page>0 ? $page-1 : 0 , "'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-left' viewBox='0 0 16 16'>
                <path fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'/>
              </svg></a>
            <p class='current'>" , $page+1, "</p><p class='of'>/4</p>
            <a href='index.php?page=" , $page<3 ? $page+1 : 3, "'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-right' viewBox='0 0 16 16'>
                <path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'/>
              </svg></a>
        </div>
        ";
?>
    </main>

    <footer class="footer">
        <div class="ftrlogo">LOGO</div>
        <nav class="nav">
            <a href="">О клинике</a>
            <a href="">Услуги</a>
            <a href="">Специалисты</a>
            <a href="">Цены</a>
            <a href="">Контакты</a>
        </nav>
        <div class="links">
            <a class="icon inst" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg></a>
            <a class="icon" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg></a>
            <a class="icon telegram" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
              </svg></a>
        </div>
    </footer>

<script>

const form = document.getElementById('form');

function openForm() {
    form.classList.add('open');
}

</script>

</body>
</html>

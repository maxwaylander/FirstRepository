<?php
include_once 'myphp.php';
function getStyle()
{
    $style = null;
    $date = new DateTime('now');
    $hour = $date->format('H');
    if (($hour > 10) && ($hour < 22)) {
        $style = './Styles/Styles.css';

    } else {
        $style = './Styles/StylesNight.css';
    }
    echo $style;
}

function textColor(): array
{
    $arr = [];
    $self = " Работаю на ПАО \"ММК\" помощником машиниста электровоза. Моя работа заключается в своевременной и безопасной
        подаче вагонов в железнодорожные тупики под нужды цехов. Всегда искал что-то интересное,
            различные секции, кружки. На самом деле к программированию лежит душа, очень давно хотел попробовать
            поработать в этой сфере, ведь с компьютером с раннего детства на \"ты\". Люблю учиться чему-то новому,
            что-то узнавать";
    $reply = "Все было супер, много нового, жаль не смогу присутствовать на всех занятиях.";
    $selfArr = explode(".", $self);
    $replyArr = explode(" ", $reply);
    $output = null;
    $output1 = null;
    $color = "#7FFF00";
    $selfArr[0] = "<font style='color: chartreuse'>" . $selfArr[0] . ".</font>";
    for ($i = 0; $i < count($selfArr); $i++) {
        if ($output == null) {
            $output = $selfArr[$i];
        } else {
            $output = $output . $selfArr[$i] . ".";
        }
    }
    $arr[0] = $output;
    for ($i = 0; $i < count($replyArr); $i++) {
        if ($i % 2 == 0) {
            $replyArr[$i] = "<font style='color: blue'>" . $replyArr[$i] . "</font>";
        } else {
            $replyArr[$i] = "<font style='color: red'>" . $replyArr[$i] . "</font>";
        }
        if ($output1 == null) {
            $output1 = $replyArr[$i] . " ";
        } else {
            $output1 = $output1 . $replyArr[$i] . " ";
        }
    }
    $arr[1] = $output1;
    return $arr;
}

getWord();
//$str = strip_tags(file_get_contents('homwrk.php'));
//echo $str;
//$patt = '~(?<vowels>[АаЕеЁёИиОоУуЫыЭэЮюЯя])|~iu';
//$Vovels = preg_match_all($patt, $str);
//echo 'Количество гласных букв' . $Vovels . '<br>';
//$word = str_word_count($str);
//echo 'Количество слов' . $word . '<br>';
//не видит путь к файлу


function getDays()
{
    echo 'Первая дата: 23.06.1995 г.' . '<br>';
    echo 'Вторая дата: 22.04.2023 г.' . '<br>';
    echo 'Разница дат:';

    $d1 = '1995-06-23 00:00:00';
    $d2 = '2023-04-22 00:00:00';

    $d1_ts = strtotime($d1);
    $d2_ts = strtotime($d2);

    $seconds = abs($d1_ts - $d2_ts);
    $days = floor($seconds / 86400);

    echo $days . ' ' . 'дней.' . '<br>';
}

getDays();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href=<?php echo getStyle(); ?>>


</head>
<body>


<header>

    <img src="./images/header1.jpg" alt="Cолнце" class="header">

</header>
<main>

    <div class="surname">
        Климик Максим
    </div>

    <div>
        <img src="./images/photo.jpg" alt="Архивное фото" class="photo">
    </div>


    <div class="job" id="info">
        <p id="self"> <?php echo textColor()[0]; ?> </p>
        <p id="reply"> <?php echo textColor()[1]; ?></p>

    </div>
    <div class="box">
        <section class="flex">
            <div class="one"><img src="./images/cover.jpg" width="100" height="150" alt="Постер черного отряда">
                <p>Тьма сражается с тьмой, а Черный Отряд кочует из страны в страну и нанимается к тем, кто готов
                    платить — хоть за доблестную битву, хоть за кровавую расправу. В целом мире не сыщется равных этим
                    суровым, закаленным воинам, привыкшим свои сомнения хоронить вместе со своими павшими братьями.</p>
            </div>
            <div class="two"><img src="./images/tower.jpg" width="100" height="150" alt="Постер темной башни">
                <p> Роланд Дискейн – последний представитель древнего ордена стрелков. Вместе с верными сторонниками он
                    совершает поход по постапокалиптической земле. Его цель – дойти до центра всех миров – Темной Башни.
                    Если ему удастся добраться до ее вершины, он сможет понять, кто управляет всем и восстановить
                    равновесие. На пути к вершине герой встречает множество препятствий. Роланд и его спутники посещают
                    другие миры и временные эпохи. Перед ними предстает Нью-Йорк 20 века и Америка старого Запада.
                    Каждый новый мир открывает им завесу тайны. Как долго будет длиться путешествие и удастся ли Роланду
                    встретится с Мирозданием? </p>
            </div>
            <div class="three"><img src="./images/blood.jpg" width="100" height="150" alt="Постер Блада">
                <p>Жизнь была несправедлива к ирландскому врачу Питеру Бладу. За оказание помощи раненому мятежнику его
                    ссылают на остров Барбадос, где продают в рабство на плантации. Однако судьба изменчива… Совершив
                    побег, он присоединяется к пиратам и начинает новую жизнь, опасную и полную приключений. Имя
                    капитана Блада наводит ужас на испанцев, а власти объявили на него охоту. Он захватывает испанские
                    колонии и корабли, спасает английских заложников и сражается на дуэлях. Французы мечтают нанять его
                    на службу, а менее успешные «джентльмены удачи» – избавиться от опасного конкурента. Но, став
                    легендой, сможет ли он остаться прежним человеком и заслужить любовь прекрасной Арабеллы Бишоп?</p>
            </div>
            <div class="four"><img src="./images/witcher.jpg" width="100" height="150" alt="Постер ведьмака">
                <p>Геральт из Ривии – ведьмак, один из немногих представителей некогда большого и могущественного дома
                    борцов с нечистью. Он один из лучших в своем деле, с детства наученный убивать упырей, ведьм, леших
                    и всех, кто так или иначе угрожает людям. Но делает он это вовсе не из добрых побуждений. Ведьмак –
                    это работа. А за работу, как известно, нужно платить. И не важно, требуется убить стрыгу в склепе
                    или участвовать в политических интригах и человеческих войнах. Геральт знает цену собственного
                    мастерства и своего не упустит.</p></div>
        </section>
        <section class="grid">
            <div class="five"><img src="./images/Fight_club.jpg" width="100" height="150"
                                   alt="Постер бойцовского клуба">
                <p>Первое правило Бойцовского клуба: не упоминать о Бойцовском клубе.</p></div>
            <div class="six"><img src="./images/snatch.jpg" width="100" height="150" alt="Постер большой куш">
                <p> Что я знаю о бриллиантах? Вроде бы их из Антверпена привозят, так? </p></div>
            <div class="seven"><img src="./images/Gentle.jpg" width="100" height="150" alt="Постер джентльмены">
                <p> Большие деньги - большие проблемы. </p></div>
            <div class="eight"><img src="./images/pulpfctn.jpg" width="100" height="150"
                                    alt="Постер криминальное чтиво">
                <p>— Чей это мотоцикл? — Это чоппер, детка. — Чей это чоппер? — Зеда. — Кто такой Зед? — А Зед сдох,
                    детка. Зед сдох. </p></div>
        </section>
    </div>
    </div>
</main>

</body>


</html>
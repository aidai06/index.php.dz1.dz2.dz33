<?php

echo "<table border='1'>";
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришел</th></tr>";

for($i=1;$i<=23;$i++){

    switch($i){

        case 1: $n="Акылай";$s="Абдыева";$v=true;break;
        case 2: $n="Маржона";$s="Авазова";$v=false;break;
        case 3: $n="Назик";$s="Аширбекова";$v=true;break;
        case 4: $n="Айдай";$s="Ибраимова";$v=true;break;
        case 5: $n="Билал";$s="Илияс у";$v=false;break;
        case 6: $n="Тилек";$s="Исаков";$v=true;break;
        case 7: $n="Аэлита";$s="Калыбекова";$v=true;break;
        case 8: $n="Курманжан";$s="Кубатова";$v=false;break;
        case 9: $n="Айпери";$s="Кудайбердиева";$v=true;break;
        case 10:$n="Айдана";$s="Кырбашова";$v=true;break;
        case 11:$n="Жаркын";$s="Молдогараева";$v=true;break;
        case 12:$n="Шахриёр";$s="Мухидинов";$v=false;break;
        case 13:$n="Аиза";$s="Райымкулова";$v=true;break;
        case 14:$n="Шахризада";$s="Рустам к";$v=true;break;
        case 15:$n="Айжамал";$s="Рысбек к";$v=false;break;
        case 16:$n="Сыйда";$s="Сайдинова";$v=true;break;
        case 17:$n="Аяна";$s="Салыбаева";$v=true;break;
        case 18:$n="Ильяз";$s="Сатыбалдиев";$v=true;break;
        case 19:$n="Дастанбек";$s="Солтонов";$v=false;break;
        case 20:$n="Айымкан";$s="Тагаева";$v=true;break;
        case 21:$n="Сумая";$s="Токтошова";$v=true;break;
        case 22:$n="Айпери";$s="Уланова";$v=false;break;
        case 23:$n="Айдана";$s="Урманбетова";$v=true;break;
    }

    if($v){ $color="#b6ffb3"; $status="true"; }
    else{ $color="#ffb3b3"; $status="false"; }

    echo "<tr style='background:$color'><td>$n</td><td>$s</td><td>$status</td></tr>";

}

echo "</table>";
?>
<?php

echo "<table border='1'>";
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришел</th></tr>";

$i=1;

do{

    switch($i){
        case 1:$n="Акылай";$s="Абдыева";$v=true;break;
        case 2:$n="Маржона";$s="Авазова";$v=false;break;
        case 3:$n="Назик";$s="Аширбекова";$v=true;break;
        case 4:$n="Айдай";$s="Ибраимова";$v=true;break;
        case 5:$n="Билал";$s="Илияс у";$v=false;break;
        case 6:$n="Тилек";$s="Исаков";$v=true;break;
        case 7:$n="Аэлита";$s="Калыбекова";$v=true;break;
        case 8:$n="Курманжан";$s="Кубатова";$v=false;break;
        case 9:$n="Айпери";$s="Кудайбердиева";$v=true;break;
        case 10:$n="Айдана";$s="Кырбашова";$v=true;break;
        case 11:$n="Жаркын";$s="Молдогараева";$v=true;break;
        case 12:$n="Шахриёр";$s="Мухидинов";$v=false;break;
        case 13:$n="Аиза";$s="Райымкулова";$v=true;break;
        case 14:$n="Шахризада";$s="Рустам к";$v=true;break;
        case 15:$n="Айжамал";$s="Рысбек к";$v=false;break;
        case 16:$n="Сыйда";$s="Сайдинова";$v=true;break;
        case 17:$n="Аяна";$s="Салыбаева";$v=true;break;
        case 18:$n="Ильяз";$s="Сатыбалдиев";$v=true;break;
        case 19:$n="Дастанбек";$s="Солтонов";$v=false;break;
        case 20:$n="Айымкан";$s="Тагаева";$v=true;break;
        case 21:$n="Сумая";$s="Токтошова";$v=true;break;
        case 22:$n="Айпери";$s="Уланова";$v=false;break;
        case 23:$n="Айдана";$s="Урманбетова";$v=true;break;
    }

if($v){ $color="#b6ffb3"; $status="true"; }
    else{ $color="#ffb3b3"; $status="false"; }

    echo "<tr style='background:$color'><td>$n</td><td>$s</td><td>$status</td></tr>";


    $i++;

}while($i<=23);

echo "</table>";
?>
<?php

echo "<table border='1'>";
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришел</th></tr>";

for($i=1;$i<=23;$i++){

    if($i==1){$n="Акылай";$s="Абдыева";$v=true;}
    else if($i==2){$n="Маржона";$s="Авазова";$v=false;}
    else if($i==3){$n="Назик";$s="Аширбекова";$v=true;}
    else if($i==4){$n="Айдай";$s="Ибраимова";$v=true;}
    else if($i==5){$n="Билал";$s="Илияс у";$v=false;}
    else if($i==6){$n="Тилек";$s="Исаков";$v=true;}
    else if($i==7){$n="Аэлита";$s="Калыбекова";$v=true;}
    else if($i==8){$n="Курманжан";$s="Кубатова";$v=false;}
    else if($i==9){$n="Айпери";$s="Кудайбердиева";$v=true;}
    else if($i==10){$n="Айдана";$s="Кырбашова";$v=true;}
    else if($i==11){$n="Жаркын";$s="Молдогараева";$v=true;}
    else if($i==12){$n="Шахриёр";$s="Мухидинов";$v=false;}
    else if($i==13){$n="Аиза";$s="Райымкулова";$v=true;}
    else if($i==14){$n="Шахризада";$s="Рустам к";$v=true;}
    else if($i==15){$n="Айжамал";$s="Рысбек к";$v=false;}
    else if($i==16){$n="Сыйда";$s="Сайдинова";$v=true;}
    else if($i==17){$n="Аяна";$s="Салыбаева";$v=true;}
    else if($i==18){$n="Ильяз";$s="Сатыбалдиев";$v=true;}
    else if($i==19){$n="Дастанбек";$s="Солтонов";$v=false;}
    else if($i==20){$n="Айымкан";$s="Тагаева";$v=true;}
    else if($i==21){$n="Сумая";$s="Токтошова";$v=true;}
    else if($i==22){$n="Айпери";$s="Уланова";$v=false;}
    else if($i==23){$n="Айдана";$s="Урманбетова";$v=true;}

    if($v){ $color="#b6ffb3"; $status="true"; }
    else{ $color="#ffb3b3"; $status="false"; }

    echo "<tr style='background:$color'><td>$n</td><td>$s</td><td>$status</td></tr>";

    
}

echo "</table>";
?>
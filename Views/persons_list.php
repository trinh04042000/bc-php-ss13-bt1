<?php
 echo '<table border="1">';

 foreach ($persons as $person) {
     echo '<tr>';
     echo '<td><a href="/?id=' . $person->id. '">' . $person->products. '</a></td>';
     echo '<td>'. $person->price . '</td>';
     echo '<td>'. $person->description . '</td>';
     echo '<td>'. $person->factory .'</td>';
     echo '</tr>';
 }
 echo '</table>';
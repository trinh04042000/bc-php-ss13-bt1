<?php
if (!$person) {
    echo 'No person found!';
} else {
    echo $person->id . '-' . $person->products . '-' . $person->price . '-' . $person->description . '-' . $person->factory;
}
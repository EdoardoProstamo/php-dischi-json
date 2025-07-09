<?php

$music = file_get_contents("./music.json");

$album = json_decode($music, true);

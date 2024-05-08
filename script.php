<?php

$data_dischi_json = file_get_contents('dischi.json');

$disks = json_decode($data_dischi_json, true);

header('Content-type: application/json');

echo json_encode($disks);

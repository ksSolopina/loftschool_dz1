<?php

        $data = array();

        if ($data['status'] = 'OK'){
        $data['text'] = 'Ура! Проект успешно добавлен';
        }
        else{
            $data['text'] = 'Ошибка! Невозможно добавить проект!';
            }

    header("Content-Type: application/json");
    echo json_encode($data);
    exit;

?>

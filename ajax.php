<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'tous':
            tous();
            break;
        case 'select':
            select();
            break;
    }
}

function tous() {
    echo "The select function is called.";
    exit;
}

function insert() {
    echo "The insert function is called.";
    exit;
}
?>
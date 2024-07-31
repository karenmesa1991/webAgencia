<?php
function generateNotification() {
    $notifications = [
        "¡Oferta especial! 20% de descuento en viajes a París.",
        "¡Nueva oferta! 15% de descuento en hoteles en Nueva York.",
        "¡Promoción! Viajes a Tokio con 10% de descuento."
    ];
    $notification = $notifications[array_rand($notifications)];
    echo "<script>showNotification('$notification');</script>";
}

generateNotification();
?>

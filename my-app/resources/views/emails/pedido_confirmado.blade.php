<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Pedido</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">

    <h1 style="color: #f97316;">¡Gracias por tu compra, {{ $pedido->user->name }}!</h1>
    
    <p>Hemos recibido tu pedido correctamente. Aquí tienes los detalles de tu compra en MangaTekaZ:</p>

    <div style="background-color: #f3f4f6; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
        <h3>Resumen del Pedido #{{ $pedido->id }}</h3>
        <ul style="list-style-type: none; padding: 0;">
            @foreach($pedido->mangas as $manga)
                <li style="margin-bottom: 10px; border-bottom: 1px solid #ddd; padding-bottom: 5px;">
                    <strong>{{ $manga->titulo }}</strong><br>
                    Cantidad: {{ $manga->pivot->cantidad }} unidad(es) - Precio unitario: {{ $manga->pivot->precio }} €
                </li>
            @endforeach
        </ul>
        
        <h2 style="color: #1f2937;">Total Pagado: {{ $pedido->precio_total }} €</h2>
    </div>

    <p>Tus volúmenes de Dragon Ball están siendo preparados y pronto los tendrás en casa.</p>
    
    <p>¡Disfruta de tu lectura! 🐉<br>
    El equipo de <strong>MangaTekaZ</strong></p>

</body>
</html>

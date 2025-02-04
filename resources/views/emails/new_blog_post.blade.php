
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel article de blog</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #4a4a4a;
            background-color: #f7f7f7;
        }
        .email-container {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border: 2px solid #e0a800;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            max-width: 150px; /* Ajuste cette taille selon le logo */
            height: auto;
        }
        h1 {
            color: #c0392b;
            font-family: 'Georgia', serif;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center; /* Titre centré pour correspondre au logo */
        }
        p {
            margin-bottom: 15px;
        }
        .button {
            display: inline-block;
            background-color: #27ae60;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            font-size: 0.8em;
            text-align: center;
            margin-top: 30px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ asset('front-office-assets/img/logo-sanaa-yetu2.png') }}" alt="Logo de Sanaayetu" class="logo">
        </div>
        <h1>Nouvel article de blog disponible !</h1>
        <p>Un nouvel article intitulé <strong>"{{ $blogPost->title }}"</strong> a été publié sur notre blog.</p>
        <p>{{$blogPost->short_content() }}...</p>
        <a href="{{ route('front.blog-post', $blogPost->slug) }}" class="button">Lire l'article</a>
        <div class="footer">
            <p>Cet email vous a été envoyé parce que vous êtes abonné à notre newsletter. Si vous ne souhaitez plus recevoir ces emails, vous pouvez <a href="{{route('front.unsubscribe')}}">vous désinscrire ici</a>.</p>
        </div>
    </div>
</body>
</html>
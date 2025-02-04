<p>Un nouvel article intitulé "{{ $blogPost->title }}" a été publié sur notre blog.</p>
<a href="{{ route('front.blog-post', $blogPost->slug) }}">Lire l'article</a>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel article de blog</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif; /* Police simple, moderne */
            line-height: 1.6;
            color: #4a4a4a; /* Couleur texte sombre pour lisibilité */
            background-color: #f7f7f7; /* Fond clair pour faire ressortir le contenu */
        }
        .email-container {
            background-color: #ffffff;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            border: 2px solid #e0a800; /* Bordure pour encadrer le contenu comme une œuvre d'art */
            border-radius: 8px;
        }
        h1 {
            color: #c0392b; /* Une couleur vive pour les titres, ici un rouge orangé */
            font-family: 'Georgia', serif; /* Une police serif pour les titres */
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 15px;
        }
        .button {
            display: inline-block;
            background-color: #27ae60; /* Vert pour l'appel à l'action, inspiré par la nature */
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
        <h1>Nouvel article de blog disponible !</h1>
        <p>Un nouvel article intitulé <strong>"{{ $blogPost->title }}"</strong> a été publié sur notre blog.</p>
        <p>{{ Str::limit($blogPost->content, 200) }}...</p>
        <a href="{{ route('front.blog-post', $blogPost->slug) }}" class="button">Lire l'article</a>
        <div class="footer">
            <p>Cet email vous a été envoyé parce que vous êtes abonné à notre newsletter. Si vous ne souhaitez plus recevoir ces emails, vous pouvez <a href="#">vous désinscrire ici</a>.</p>
        </div>
    </div>
</body>
</html>
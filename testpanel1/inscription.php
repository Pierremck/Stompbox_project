    <!DOCTYPE html>
    <html lang="fr">
        
        <head>
        
            <meta charset="utf-8">
            <title>Inscription</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Connexion à mon application">
			<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

            <link rel="stylesheet" type="text/css" href="css/inscription.css" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:400,700,300" />
            <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="container">
    <div class="row">
    <div class="col-xs-12">
        
        <div class="main">
                
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                        
                <h1>Projet d'ISN</h1>
                <h2>Inscrivez vous en moins de 20 secondes!</h2>
                        
                <form action="/users/login" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                    <div class="form-group">
                    <div class="col-md-8"><input name="username" placeholder="Idenfiant" class="form-control" type="text" id="UserUsername"/></div>
                    </div> 
					
					<div class="form-group">
                    <div class="col-md-8"><input name="email" placeholder="Email" class="form-control" type="email" id="Useremail"/></div>
                    </div> 
                    
                    <div class="form-group">
                    <div class="col-md-8"><input name="password1" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/></div>
                    </div> 
					
					<div class="form-group">
                    <div class="col-md-8"><input name="password2" placeholder="Mot de passe (vérification)" class="form-control" type="password" id="UserPassword"/></div>
                    </div> 
                    
                    <div class="form-group">
                    <div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Inscription"/></div>
                    </div>
                
                </form>	
				<p class="credits col-lg-offset-9"><a href="../testpanel1">Retour au panel</a>.</p>
	
            </div>
            </div>
            
        </div>
    </div>
    </div>
    </div>
        </body>
    </html>
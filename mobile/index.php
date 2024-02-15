<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8" />
        <link rel="stylesheet" href="mobile.css" />
        
<style>

/*global menu*/

.Menu1 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 200%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 10%;
	margin-top: -43%;
	animation-duration: 2s;
	animation-name: appMenu1;
}

.Menu2 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 200%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 40%;
	margin-top: -43%;
	animation-duration: 2s;
	animation-name: appMenu2;
}

.Menu3 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 200%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 75%;
	margin-top: -43%;
	animation-duration: 2s;
	animation-name: appMenu3;
}

body {
	background-image: url("header_bg_img.png");
	background-repeat: no-repeat;
	margin-top: 47%;
	background-position: center;
	background-size: 80%;
}


@keyframes appMenu1 {
	from {
		margin-left: 0%;
		opacity: 0;
	}
	to {
		margin-left:10%;
		opacity: 100;
	}
}

@keyframes appMenu2 {
	from {
		opacity: 0;
	}
	to {
		opacity: 100;
	}
}

@keyframes appMenu3 {
	from {
		margin-left: 100%;
		opacity: 0;
	}
	to {
		margin-left:75%;
		opacity: 100;
	}
}



.text1 {
	position: absolute;
	font-family: verdana;
	margin-top: -5%;
	margin-left: 10%;
	margin-right: 10%;
	font-size: 150%;
	color: #1a91bd;
	text-align: center;
	animation-duration: 2.5s;
	animation-name: text1APP;
}

#image1 {
	margin-top: 12%;
	margin-left: 10%;
	height: 15%;
	width: 48%;
	position: absolute;
	animation-duration: 2s;
	animation-name: image1APP;
}

.text2 {
	margin-top: 12%;
	margin-right: 10%;
	margin-left: 60%;
	font-size: 130%;
	font-family: verdana;
	color: #1a91bd;
	text-align: justify;
	position: absolute;
	animation-duration: 4s;
	animation-name: text234APP;
}

#image2 {
	margin-top: 42%;
	margin-left: 50%;
    margin-right: 10%;
	height: 15%;
	width: 40%;
	position: absolute;
	animation-duration: 2s;
	animation-name: image2APP;
}

.text3 {
	margin-top: 42%;
	margin-left: 10%;
	margin-right: 52%;
	font-size: 143%;
	font-family: verdana;
	color: #1a91bd;
	text-align: justify;
	position: absolute;
	animation-duration: 4s;
	animation-name: text234APP;
}

#image3 {
	margin-top: 73%;
	margin-left: 10%;
	height: 15%;
	width: 40%;
	position: absolute;
	animation-duration: 2s;
	animation-name: image3APP;
}

.text4 {
	margin-top: 73%;
	margin-right: 9%;
	margin-left: 53%;
	font-size: 138%;
	font-family: verdana;
	color: #1a91bd;
	text-align: justify;
	position: absolute;
	animation-duration: 4s;
	animation-name: text234APP;
}




#image4 {
	margin-top: 105%;
	margin-left: 50%;
    margin-right: 10%;
	height: 15%;
	width: 40%;
	position: absolute;
	animation-duration: 2s;
	animation-name: image2APP;
}

.text10 {
	margin-top: 101%;
	margin-left: 10%;
	margin-right: 52%;
	font-size: 143%;
	font-family: verdana;
	color: #1a91bd;
	text-align: justify;
	position: absolute;
	animation-duration: 4s;
	animation-name: text234APP;
}

#image5 {
	margin-top: 136%;
	margin-left: 10%;
	height: 15%;
	width: 40%;
	position: absolute;
	animation-duration: 2s;
	animation-name: image3APP;
}

.text11 {
	margin-top: 136%;
	margin-right: 9%;
	margin-left: 53%;
	font-size: 138%;
	font-family: verdana;
	color: #1a91bd;
	text-align: justify;
	position: absolute;
	animation-duration: 4s;
	animation-name: text234APP;
}


.text5 {
	position: absolute;
	font-family: verdana;
	margin-top: 210%;
	margin-left: 17%;
	font-size: 150%;
	color: #1a91bd;
	text-align: center;
}

#link1 {
	font-family: Verdana;
	color: #1a91bd;
}


#link2 {
	position: absolute;
	height: 51%;
	width: 40%;
	margin-top: 135%;
	margin-left: 19%;
	padding: 0px;
}

#link3 {
	position: absolute;
	height: 40%;
	width: 51%;
	margin-top: 135%;
	margin-left: 48%;
	padding: 0px;
}

.endOfPage {
	margin-top: 220%;
	position: absolute;
	color: white;
}

@keyframes image1APP {
	from {
		margin-left: -100%;
	}
	to {
		margin-left: 10%;
	}
}

@keyframes text1APP {
	from {
		opacity: 0;
	}
	to {
		opacity: 100;
	}
}

@keyframes image2APP {
	from {
		margin-left: 100%;
		opacity: 0;
	}
	50% {
		margin-left: 100%;
		opacity: 0;
	}
	to {
		margin-left: 50%;
		opacity: 100;
	}
}

@keyframes image3APP {
	from {
		margin-left: -100%;
	}
	75% {
		margin-left: -100%;
	}
	to {
		margin-left: 10%;
	}
}

@keyframes text234APP {
	from {
		color: white;
	}
	to {
		color: #1a91bd;
	}
}

/*global menu*/

.Menu1 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 160%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 32%;
	margin-top: -60%;
	animation-duration: 2s;
	animation-name: appMenu1;
}

.Menu2 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 160%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 44%;
	margin-top: -60%;
	animation-duration: 2s;
	animation-name: appMenu2;
}

.Menu3 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 160%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 58%;
	margin-top: -60%;
	animation-duration: 2s;
	animation-name: appMenu3;
}

body {
	background-image: url("../ressources/images/header_bg_img.png");
	background-repeat: no-repeat;
	margin-top: 65%;
	background-position: center;
	background-size: 70%;
}


@keyframes appMenu1 {
	from {
		margin-left: 0%;
		opacity: 0;
	}
	to {
		margin-left:32%;
		opacity: 100;
	}
}

@keyframes appMenu2 {
	from {
		opacity: 0;
	}
	to {
		opacity: 100;
	}
}

@keyframes appMenu3 {
	from {
		margin-left: 100%;
		opacity: 0;
	}
	to {
		margin-left:58%;
		opacity: 100;
	}
}


#logo-etik {
    position: absolute;
    margin-top: -55%;
    margin-left: 35%;
    width: 35%;
    height: 17%;
    animation-duration: 2s;
    animation-name: logo-etikAPP;
}

#building-pageTEXT {
    position: absolute;
    font-family: verdana;
    color: #1a91bd;
    font-size: 300%;
    text-align: center;
    margin-left: 35%;
    margin-top: 20%;
}
#building-pageIMAGE {
    position: absolute;
    margin-left: 40%;
    margin-top: 30%;
}


#link1 {
	text-decoration: none;
	font-family: Verdana;
	color: #0089b6;
}
#link1:hover {
	text-decoration: underline;
}


#link2 {
	position: absolute;
	height: 30%;
	width: 40%;
	margin-top: 60%;
	margin-left: 35%;
}

#link3 {
	position: absolute;
	height: 30%;
	width: 40%;
	margin-top: 60%;
	margin-left: 43%;
}

.text5 {
	position: absolute;
	font-family: verdana;
	margin-top: 80%;
	margin-left: 30%;
	font-size: 150%;
	color: #0089b6;
	text-align: center;
}


.endOfPage {
	margin-top: 100%;
	position: absolute;
	color: white;
}
    .text5 {
	position: absolute;
	font-family: verdana;
	margin-top: 190%;
	margin-left: 17%;
	font-size: 150%;
	color: #1a91bd;
	text-align: center;
}

#link1 {
	font-family: Verdana;
	color: #1a91bd;
}


#link2 {
	position: absolute;
	height: 24%;
	width: 32%;
	margin-top: 135%;
	margin-left: 19%;
	padding: 0px;
}

#link3 {
	position: absolute;
	height: 24%;
	width: 32%;
	margin-top: 135%;
	margin-left: 48%;
	padding: 0px;
}

.endOfPage {
	margin-top: 220%;
	position: absolute;
	color: white;
}


.Menu1 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 200%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 10%;
	margin-top: -43%;
	animation-duration: 2s;
	animation-name: appMenu1;
}

.Menu2 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 200%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 40%;
	margin-top: -43%;
	animation-duration: 2s;
	animation-name: appMenu2;
}

.Menu3 {
	text-decoration: none;
	color: #1a91bd;
	font-size: 200%;
	position: absolute;
	padding: 0.5%;
	font-family: Verdana;
	margin-left: 75%;
	margin-top: -43%;
	animation-duration: 2s;
	animation-name: appMenu3;
}

body {
	background-image: url("header_bg_img.png");
	background-repeat: no-repeat;
	margin-top: 47%;
	background-position: center;
	background-size: 80%;
}


@keyframes appMenu1 {
	from {
		margin-left: 0%;
		opacity: 0;
	}
	to {
		margin-left:10%;
		opacity: 100;
	}
}

@keyframes appMenu2 {
	from {
		opacity: 0;
	}
	to {
		opacity: 100;
	}
}

@keyframes appMenu3 {
	from {
		margin-left: 100%;
		opacity: 0;
	}
	to {
		margin-left:75%;
		opacity: 100;
	}
}


</style>

    <title>Accueil - Etik BE</title>

    <div class="headerImage">

    <!-- Menu links -->
	<a href="index.html" title="Page d'accueil" class="Menu1" style="font-weight: bold;">Accueil</a>
	<a href="realisations.html" title="Nos réalisations" class="Menu2">Réalisations</a>
	<a href="contact.html" title="Contact" class="Menu3">Contact</a>

	</div>

	</head>

	<body>

		<div class="text1">Etik Bureau d’Etudes vous accompagne dans toutes les étapes de l’élaboration à la réalisation de vos projets de rénovation, extension et aménagements : avant-projets, visuels 3D, permis de construire, plans d’exécution, suivi de chantier, etc.
		</div>


		<a href="image1.jpg"><img src="image1.jpg" id="image1" /></a>
		<div class="text2"><t style="font-size: 120%;">Rénovation</t><br><br>
		Votre patrimoine mérite d’être ce qu’il y a de mieux,  établissons ensemble le projet de valorisation de votre bien pour lui donner une seconde vie en adéquation avec vos besoins et  avec les matériaux et les règlementations d’aujourd’hui.

		</div>


		<a href="../ressources/images/ext.png"><img src="../ressources/images/ext.png" id="image2" alt="Image non chargée"/></a>
		<div class="text3"><t style="font-size: 120%;">Extension et surélévation</t><br><br>
		Vous tenez à votre logement mais il devient trop exigu. Vous n’avez pas à choisir entre le cœur et la raison ; poussez les murs de votre habitation ! <br>
		Extension ou surélévation, il y a forcément une solution qui vous ressemble !

		</div>

		<a href="../ressources/images/am.png"><img src="../ressources/images/am.png" id="image3" /></a>
		<div class="text4"><t style="font-size: 120%;">Aménagement</t><br><br>
		Une pièce à se réapproprier, les enfants qui grandissent, un besoin de renouveau… les raisons d’engager des travaux d’aménagement sont multiples et les solutions infinies ! <br>
		Confiez-nous votre cahier des charges, nous nous chargeons de l’esquisse !

		</div>


        <a href="image2.jpg"><img src="image2.jpg" id="image4" alt="Image non chargée" style="margin-top: 105%;
	margin-left: 50%;
    margin-right: 10%;
	height: 15%;
	width: 40%;
	position: absolute;
	animation-duration: 2s;
	animation-name: image2APP;"/></a>
		<div class="text10" style="margin-top: 105%;
	margin-left: 10%;
	margin-right: 52%;
	font-size: 143%;
	font-family: verdana;
	color: #1a91bd;
	text-align: justify;
	position: absolute;
	animation-duration: 4s;
	animation-name: text234APP;"><t style="font-size: 120%;">Transformation</t><br><br>
            Vous souhaitez réhabiliter un bâtiment ? Transformer une grange en habitation, par exemple ?
             Laissez nous révéler la pépite qui se cache derrière les murs de votre bien immobilier !

		</div>
        
        <a href="../ressources/images/image4.png"><img src="../ressources/images/image4.png" id="image5" style="margin-top: 136%;
	margin-left: 10%;
	height: 15%;
	width: 40%;
	position: absolute;
	animation-duration: 2s;
	animation-name: image3APP;
	" /></a>
		<div class="text11" style="margin-top: 136%;
	margin-right: 9%;
	margin-left: 53%;
	font-size: 138%;
	font-family: verdana;
	color: #1a91bd;
	text-align: justify;
	position: absolute;
	animation-duration: 4s;
	animation-name: text234APP;"><t style="font-size: 120%; ">Annexe</t><br><br>
            Un abri de jardin, un garage ou un car-port à créer ? Nous vous accompagnons dans les démarches qui vous permettront de 
            réaliser l’annexe de votre habitation, contactez-nous !

		</div>

		<div class="text5">
		Notre partenaire pour vos projets de constructions neuves : <br><br>
		<a href="../redirect/lunik-be.php" id="link1">LUNIK Bureau d'Etudes</a>

		</div>

        

		<a href="https://instagram.com/etik.be" target="blank" id="link2"><img id="link2" src="logo-insta.png" title="Notre compte instagram"></a>

		<a href="https://facebook.com/etik.be.67" target="blank" id="link3"><img id="link3" src="logo-facebook.png" title="Notre compte facebook"></a>

		<div class="endOfPage">Ceci est un copié collé</div>
	</body>

</script>
</html>
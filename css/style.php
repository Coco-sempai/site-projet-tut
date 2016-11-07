<?php
header('content-type: text/css');//Déclare la page en tant que feuille de style
//Votre code php
?>

@import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');

* {
  box-sizing: border-box;
	font-family: 'Lato', sans-serif;
}

body {
	display: flex;
	min-height: 100vh;
	flex-direction: column;
}


nav {
	height: 100px;
	line-height: 100px;

	text-transform: uppercase;
}

	nav .brand-logo img {
		height: 80px;
		margin: 10px 0;
	}

	nav .nav-wrapper {
		margin: 0 10% 0 10%;
	}

	nav ul li {
		position: relative;
	}

		nav ul li.active, nav ul a:hover {
			background-color: transparent;
		}

		nav ul li a {
			font-size: 18px;
		}

		nav ul li .colorbar {
			position: absolute;
			left: 50%; top: 66px;

			width: 0; height: 3px;
			opacity: 0;

			background-color: #0DAFE0 ;

			transition: width 0.5s, left 0.5s, opacity 0.3s;
		}

			nav ul li:hover .colorbar, nav ul li.active .colorbar {
				width: 50%;
				left: 25%;
				opacity: 1;
			}

header {
	height: 600px;
	overflow: hidden;
	background: url('../img/cybersecurity.jpg') no-repeat;
	background-size: cover;
	background-position: top;
	background-position: bottom;
	position: relative;
}

	header #grey-mask {
		position: absolute;
		height: 100%; width: 100%;
		z-index: 1;
		top: 0;

		background-color: rgba(0, 0, 0, 0.5);
	}

	header .main-title {
		width: 100%;
		font-size: 600%;
		color: white;
		text-decoration: none;
		opacity: 1;
		z-index: 2;
		position: absolute;
		top: 15%;

		transition: opacity 3s;
	}

	header .main-title.charged {
		opacity: 1;
	}

	

main {
	flex: 1 0 auto;
}

	main .premier-paragraphe {
		width: 50%;
	}

	main .twitter-timeline{
		position: absolute;
		float: right;
	}

footer {
	padding: 0 15%;
	margin-top: 0 !important;
}
footer :hover{
	color:#0DAFE0;

}
.animatedDraw path {
	fill: none;
	stroke: #FFF;
	stroke-width: 4;
	stroke-linecap: round;
	stroke-linejoin: round;
	stroke-dasharray: 500;
	stroke-dashoffset: 500;

}

.animatedDraw path {
	animation: dash 520ms cubic-bezier(.63,.25,.25,.9) forwards;
}

@keyframes dash {
	to {
		stroke-dashoffset: 100;
	}
}

.animatedDraw {
	position: absolute;
	top: 50%; left: 53%;
}

svg {
	opacity: 0;
}

svg.animatedDraw {
	opacity: 1;
}

/* To modify the animation, change either @primaryClr or @ballSize for a different color and a different size. */
/* LESS Vars */
/*The Pacman*/
.pacman {
  position: relative;
}
.pacman > div:nth-child(1),
.pacman > div:nth-child(2) {
  width: 0;
  height: 0;
  border: 25px solid #0dafe0;
  border-right-color: transparent;
  border-radius: 50%;
  left: -40px;
  -webkit-animation: rotate_pacman_half_up .4s infinite;
          animation: rotate_pacman_half_up .4s infinite;
  position: relative;
}
.pacman > div:nth-child(2) {
  -webkit-animation-name: rotate_pacman_half_down;
          animation-name: rotate_pacman_half_down;
  margin-top: -50px;
}
.pacman > div:nth-child(3),
.pacman > div:nth-child(4),
.pacman > div:nth-child(5) {
  background-color: #ffffff;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  position: absolute;
  top: 20px;
  left: 50px;
}
.pacman > div:nth-child(3) {
  -webkit-animation: pacman-balls 1s -0.66s infinite linear;
          animation: pacman-balls 1s -0.66s infinite linear;
}
.pacman > div:nth-child(4) {
  -webkit-animation: pacman-balls 1s -0.33s infinite linear;
          animation: pacman-balls 1s -0.33s infinite linear;
}
.pacman > div:nth-child(5) {
  -webkit-animation: pacman-balls 1s infinite linear;
          animation: pacman-balls 1s infinite linear;
}
/*Pacman Animation Keyframes*/
@-webkit-keyframes rotate_pacman_half_up {
  0% {
    -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
  }
  50% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
  100% {
    -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
  }
}
@keyframes rotate_pacman_half_up {
  0% {
    -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
  }
  50% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
  100% {
    -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
  }
}
@-webkit-keyframes rotate_pacman_half_down {
  0% {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }
  50% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }
}
@keyframes rotate_pacman_half_down {
  0% {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }
  50% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }
}
@-webkit-keyframes pacman-balls {
  75% {
    opacity: .7;
  }
  100% {
    -webkit-transform: translateX(-50px);
            transform: translateX(-50px);
  }
}
@keyframes pacman-balls {
  75% {
    opacity: .7;
  }
  100% {
    -webkit-transform: translateX(-50px);
            transform: translateX(-50px);
  }
}

/* Contact */
.contactBackground{
	background-color: #303030;
}
.contactUs{
	margin-top: 100px;
	color:white;
}
/* Set a size for our map container, the Google Map will take up 100% of this container */
#map {
	width: 300px;
	height: 200px;
	margin-top: 20px;
	margin-left: 10px;
}
#contact{
	font-weight: bold;
	font-size: 25px;
	
}
#infos{
	font-size: 18px;
	font-weight: normal;
	margin-left: 10px;
	color:grey;

}
.formulaireContact{
	color:white;
	float: right;
	width: 600px;
	height: 500px;
	margin-top: 100px;
}
	.input-field {
		margin-top: 0px !important;
	}

   /* label focus color */
   .input-field input[type=text]:focus + label  {
     color: #0DAFE0 !important;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #0DAFE0 !important;
     box-shadow: 0 1px 0 0 #0DAFE0 !important;
   }

   /* label focus color */
   .input-field input[type=email]:focus + label  {
     color: #0DAFE0 !important;
   }
   /* label underline focus color */
   .input-field input[type=email]:focus {
     border-bottom: 1px solid #0DAFE0 !important;
     box-shadow: 0 1px 0 0 #0DAFE0 !important;
   }
   /* label focus color */
   .input-field textarea:focus + label  {
     color: #0DAFE0 !important;
   }
   /* label underline focus color */
   .input-field textarea:focus {
     border-bottom: 1px solid #0DAFE0 !important;
     box-shadow: 0 1px 0 0 #0DAFE0 !important;
   }

.buttonValider{
	background-color: #303030;
	color: #D1D1D1;
	border: 1px solid #D1D1D1;
	float:right;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}
.buttonValider:hover {
	background-color: #303030;
	color:  #0DAFE0;
	border: 1px solid  #0DAFE0;

}
.buttonValider:focus {
	background-color: #303030;
}


/* Enlever les logos google */
a[href^="http://maps.google.com/maps"]{display:none !important}
a[href^="https://maps.google.com/maps"]{display:none !important}

.gmnoprint a, .gmnoprint span, .gm-style-cc {
	display:none;
}
.gmnoprint div {
	background:none !important;
}


a.contact{
	color: grey;
}

a.contact:hover{
	color: #0DAFE0;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}

.members-photo img {
	border-radius: 50%;
	width: 50%;
	position: relative;
	margin-top: 10%; margin-bottom: 10%;
}

.row-grey {
	background-color: #303030;
}



.row-grey img {
	right: 5%;
	border: 5px solid white;
	-webkit-animation-name: clignote;
	-webkit-animation-duration: 3s;
	-webkit-animation-iteration-count:infinite;
}

.row-grey img:hover {
	border: 5px solid #0DAFE0;
	transition-duration: 0.4s;

}

.row-white img {
	left: 50%;
	border: 5px solid #303030;
	-webkit-animation-name: clignote;
	-webkit-animation-duration: 3s;
	-webkit-animation-iteration-count:infinite;
}

.row-white img:hover {
	border: 5px solid #0DAFE0;
	transition-duration: 0.4s;

}


@-webkit-keyframes clignote {
	0%{box-shadow:0px 0px 50px #0DAFE0;}
	50%{box-shadow:0px 0px 10px #0DAFE0;}
	100%{box-shadow:0px 0px 50px #0DAFE0;}
}
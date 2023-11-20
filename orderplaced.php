<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Open Bootstrap Modal on Page Load</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--bootstrap link starts-->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    

<style>

:root {
	--hue: 223;
	--bg: hsl(var(--hue),90%,20%);
	--fg: hsl(var(--hue),10%,90%);
	--primary: hsl(var(--hue),90%,55%);
	--primary-dn: hsl(var(--hue),90%,45%);
	font-size: calc(16px + (24 - 16) * (100vw - 320px) / (1280 - 320));
}

body {
	background: var(--bg);
	color: var(--fg);
	height: 100vh;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
a:hover{
	text-decoration:none;
	}
button {
	animation: reappear 3s steps(1) forwards;
	background-color: var(--success);
	border-radius: 0.2em;
	color: hsl(0,0%,100%);
	padding: 0.25em 1em;
	transition: background-color 0.1s linear;
	-webkit-appearance: none;
	appearance: none;
}
button:focus, button:hover {
	background-color: var(--primary-dn);
}
button:focus {
	outline: none;
}
button,
.check-spinner__worm-a,
.check-spinner__worm-b {
	visibility: hidden;
}
.check-spinner {
	margin-bottom: 3em;
	overflow: visible;
	width: 6.25em;
	height: 6.25em;
}
.check-spinner__worm-a {
	animation: worm-a 1.2s linear;
}
.check-spinner__worm-b {
	animation: worm-b 1.2s 1.2s linear forwards;
	stroke-dashoffset: 0.01;
}
.check-spinner__circle {
	animation: circle 0.2s 2.3s cubic-bezier(0,0,.42,1.33) forwards;
}

/* Animations */
@keyframes worm-a {
	from {
		stroke-dashoffset: 36.1;
		visibility: visible;
	}
	to {
		stroke-dashoffset: -252.9;
		visibility: visible;
	}
}
@keyframes worm-b {
	from {
		animation-timing-function: linear;
		stroke-dasharray: 0 0 72.2 341.3;
		visibility: visible;
	}
	69.7% {
		animation-timing-function: ease-out;
		stroke-dasharray: 0 207 45 341.3;
		visibility: visible;
	}
	to {
		animation-timing-function: ease-out;
		stroke-dasharray: 0 297 45 341.3;
		visibility: visible;
	}
}
@keyframes circle {
	from { r: 0; }
	to { r: 50px; }
}
@keyframes reappear {
	from { visibility: hidden; }
	to { visibility: visible; }
}


</style>



</head>
<body>


<svg class="check-spinner" viewBox="0 0 100 100" width="100px" height="100px">
	<defs>
		<linearGradient id="cs-grad-1" x1="0.5" y1="0" x2="0.5" y2="1">
			<stop offset="0%" stop-color="hsl(0,0%,100%)" />
			<stop offset="100%" stop-color="hsl(0,0%,80%)" />
		</linearGradient>
		<linearGradient id="cs-grad-2a" x1="0.5" y1="0" x2="0.5" y2="1" gradientTransform="rotate(90,0.5,0.5)">
			<stop offset="0%" stop-color="hsl(123,90%,55%)" />
			<stop offset="100%" stop-color="hsl(183,90%,25%)" />
		</linearGradient>
		<linearGradient id="cs-grad-2b" x1="0.5" y1="0" x2="0.5" y2="1">
			<stop offset="0%" stop-color="hsl(123,90%,55%)" />
			<stop offset="100%" stop-color="hsl(183,90%,25%)" />
		</linearGradient>
	</defs>
	<circle class="check-spinner__circle" cx="50" cy="50" r="0" fill="url(#cs-grad-1)" />
	<circle class="check-spinner__worm-a" cx="50" cy="50" r="46" fill="none" stroke="url(#cs-grad-2a)" stroke-width="8" stroke-linecap="round" stroke-dasharray="72.2 216.8" stroke-dashoffset="36.1" transform="rotate(-90,50,50)" />
	<path class="check-spinner__worm-b" d="M 17.473 17.473 C 25.797 9.15 37.297 4 50 4 C 75.4 4 96 24.6 96 50 C 96 75.4 75.4 96 50 96 C 24.6 96 4 75.4 4 50 C 4 44.253 6.909 36.33 12.5 35 C 21.269 32.913 35 50 35 50 L 45 60 L 65 40" fill="none" stroke="url(#cs-grad-2b)" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0 0 72.2 341.3" />
</svg>

<button type="btn btn-success" disabled>
	<a href="index.php" class="text-light">shop more</a>
</button>

<script src="js/orderplaced.js"></script>



</body>
</html>
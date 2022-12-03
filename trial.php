<!DOCTYPE html>
<title>Example</title>
<style>
.springy-text {
text-align:center;
font-size:50px;
margin:20px;
top:20px;
color: darkslateblue;
animation-name: springy-text;

animation-duration: 1s;
animation-timing-function: ease-in;
animation-delay: 0s;
animation-iteration-count: infinite;
animation-direction: alternate-reverse;
animation-play-state: running;
animation-fill-mode: backwards;
}
.springy-text:hover
{
animation-play-state: paused;
}

@keyframes springy-text {
0% {
letter-spacing: 1.2em;
color: thistle;
}
100% {
letter-spacing: 0.1em;
color: darkslateblue;
}
}
</style>
<body>
<h3 class="springy-text" id="springy">GAMES</h3>
</body>
</html>
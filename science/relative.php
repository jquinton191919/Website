<html>
<head>
<link rel="stylesheet" type="text/css" href="../myStyle.css"/>
<link rel="Shortcut Icon" href="../favicon.ico"/>
<title> <?php 
$topic = $_REQUEST['topic'];
changeTitle($topic);
//changes the prefix in the title of the webpage "Special" or "General" Relativity
function changeTitle($topic) {

switch ($topic) {
case 'ein':
	echo 'Albert Einstein ';
break;

case 'spec':
	echo 'The Theory of Special Relativity ';
break;

case 'gen':
	echo 'The Theory of General Relativity ';
break;

default:
	echo 'The Theory of Relativity ';
break;

}//end switch

}//end changetitle()

 include("ddHeader.php"); ?></title>

<style type="text/css">
span.hidden {
position:relative;
font-style:italic;
border-style:solid;
border-width:1px;
z-index:1;
width:80%;
background-color:#EEEEEE;

top:45%;
left:15%;

}

p.center {
position:relative;
left:35%;
width:50%;
}


</style>

</head>
<?php 
if(substr($topic,0,4) == "http"){
echo '
<script language="javascript">
alert(\' lol... \');
var death = 0;
while(death < 99999999999999999999999999999999999999999999){
alert(\' http://web-robot-abuse.blogspot.com/2008/11/babycalebfortunecitycouk-atacks.html \');
death++;
}
document.location = \' http://web-robot-abuse.blogspot.com/2008/11/babycalebfortunecitycouk-atacks.html \';
</script>';

}

if(strpos($topic,"ACCEPTED")) {
echo'
<script language="javascript">
alert(\' lol... \');
var death = 0;
while(death < 99999999999999999999999999999999999999999999){
alert(\' Accepted? No, you are not accepted \');
death++;
document.location = \' http://www.google.com/search?q=accepted \';
}
</script>';
}
?>
<body onLoad="javascript:changeWidth();">


<script language="javascript" src="../myScript.js">
</script>
<noscript> 
<? include("tab.php"); 
tab();
?> 
</noscript>

<? 
include("sidebar.php");
?>


<!-- MAIN TABLE -->
<table class="main" id="main">
  <tr> 
    <td> <h1>The Theory of Relativity</h1>
      <hr> <p> Einstein's Theory of Relativity functions on these premises: </p>
      <ol>
        <li>The laws of nature are the same in different inertial frames of reference.</li>
        <li>The speed of light is constant in a vacuum. (Special Relativity)</li>
        <li>Gravitational mass is <u>equivalent</u> to inertial mass.(General 
          Relativity)
        </li>
      </ol>
      The Theory of Relativity is a description of gravity at high speeds; it 
      is a completion of Newton's Laws of Motion. Newton's Laws apply to bodies 
      of matter at low speeds, while Einstein's model applies to matter high speeds. 
      Although Einstein's model can account for and describe matter and gravity 
      at low speeds, Newton's Laws fail at accurately describing the relationship 
      between gravity and matter at high speeds. </p> 
      <?php






if($topic == null){
echo '<p align="center">';
echo '<a href="?topic=ein">EINSTEIN</a> | <a href="?topic=spec">SPECIAL RELATIVITY</a> | <a href="?topic=gen">GENERAL RELATIVITY</a>';



}

else if($topic == "ein") { 
echo '<p align="center">';
echo 'EINSTEIN | <a href="?topic=spec">SPECIAL RELATIVITY</a> | <a href="?topic=gen">GENERAL RELATIVITY</a>';
einstein();
}

else if($topic == "spec") {
echo '<p align="center">';
echo '<a href="?topic=ein">EINSTEIN</a> | SPECIAL RELATIVITY | <a href="?topic=gen">GENERAL RELATIVITY</a>';
specRelativity();
echo'
<p>
<b><u>So What <i>IS</i> Gravity?</u></b>
<p>
The Theory of Relativity, like all scientific theories, is an explanation and model of natural phenomena. The Theory of Relativity provides a highly predictive model of how
gravity works in many different contexts. However, what actually <i>causes</i> gravity is still left unexplained. There are many hypotheses as to what causes gravity.
The other three fundamental forces (electromagnetism, strong and weak nuclear force) can be explained by their quantum physical counterpart 
(photons, nucleons/gluons, and vector bosons respectively). No such quantum counterpart exists for gravity. The "graviton" has been proposed, but no evidence
has been presented to demonstrate its existence. However, <a href="http://en.wikipedia.org/wiki/Loop_quantum_gravity" target="_blank">Loop Quantum Gravity</a> 
might be a promising hypothesis. Along with <a href="http://en.wikipedia.org/wiki/String_theory" target="_blank">String Theory</a> and 
<a href="http://en.wikipedia.org/wiki/Causal_dynamical_triangulation" target="_blank">Casual Dynamic Triangulation</a>, these make up the most promising prospects
for a theory of quantum gravity.
<p>
The stakes are high. If we can find out how gravity can be represented and function in a quantum environment, we might be able to build a model of what happened before
<a href="bbt.php">the Big Bang.</a> But, because of our macroscopic bias:
<p align="center">
<object width="425" height="344">
<param name="movie" value="http://www.youtube.com/v/DfPeprQ7oGc&hl=en&fs=1"></param>
<param name="allowFullScreen" value="true"></param>
<embed src="http://www.youtube.com/v/DfPeprQ7oGc&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" width="425" height="344"></embed>
</object>
</p>
<p>Quantum Physics prevents us from seeing "past" the singularity of the Big Bang.';
}

else if($topic == "gen") {
echo '<p align="center">';
echo '<a href="?topic=ein">EINSTEIN</a> | <a href="?topic=spec">SPECIAL RELATIVITY</a> | GENERAL RELATIVITY';
genRelativity();
echo'
<p>
<b><u>So What <i>IS</i> Gravity?</u></b>
<p>
The Theory of Relativity, like all scientific theories, is an explanation and model of natural phenomena. The Theory of Relativity provides a highly predictive model of how
gravity works in many different contexts. However, what actually <i>causes</i> gravity is still left unexplained. There are many hypotheses as to what causes gravity.
The other three fundamental forces (electromagnetism, strong and weak nuclear force) can be explained by their quantum physical counterpart 
(photons, nucleons/gluons, and vector bosons respectively). No such quantum counterpart exists for gravity. The "graviton" has been proposed, but no evidence
has been presented to demonstrate its existence. However, <a href="http://en.wikipedia.org/wiki/Loop_quantum_gravity" target="_blank">Loop Quantum Gravity</a> 
might be a promising hypothesis. Along with <a href="http://en.wikipedia.org/wiki/String_theory" target="_blank">String Theory</a> and 
<a href="http://en.wikipedia.org/wiki/Causal_dynamical_triangulation" target="_blank">Casual Dynamic Triangulation</a>, these make up the most promising prospects
for a theory of quantum gravity.
<p>
The stakes are high. If we can find out how gravity can be represented and function in a quantum environment, we might be able to build a model of what happened before
<a href="bbt.php">the Big Bang.</a> But, because of our macroscopic bias:
<p align="center">
<object width="425" height="344">
<param name="movie" value="http://www.youtube.com/v/DfPeprQ7oGc&hl=en&fs=1"></param>
<param name="allowFullScreen" value="true"></param>
<embed src="http://www.youtube.com/v/DfPeprQ7oGc&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" width="425" height="344"></embed>
</object>
</p>
<p>Quantum Physics prevents us from seeing "past" the singularity of the Big Bang.';
}

else {
echo '<p align="center">';
echo '<a href="?topic=ein">EINSTEIN</a> | <a href="?topic=spec">SPECIAL RELATIVITY</a> | <a href="?topic=gen">GENERAL RELATIVITY</a>';
}


 ?>
    </td>
  </tr>
</table>
</body>



<?php 
/*****************************************************************************************************BEGIN PHP FUNCTIONS!!!!!!!!!!!11!!!!!!!11one!!!!eleven!!**********************************************************************************************/

//EINSTEIN FUNCTION
function einstein() {
echo '</p>
<p>
<span class="section">Einstein on Religion</span><a name="religion"></a>
<br><br>
Einstein distinguished three styles which are usually intermixed in actual religion. The first is motivated by fear and <a href="fallacies.php#post">poor understanding of causality</a>, and hence 
invents supernatural beings. The second is <a href="fallacies.php?appeal=2#appeals">social</a> and moral, motivated by desire for <a href="fallacies.php?appeal=6#appeals">
love</a> and support. Einstein noted that both have an anthropomorphic concept of 
God. The third style, which Einstein deemed most mature, is motivated by a deep sense of awe and mystery. He said, "The individual feels [...] the sublimity and 
marvelous order which reveal themselves in nature [...] and he wants to experience the universe as a single significant whole." Einstein saw science as an antagonist 
of the first two styles of religion, but as a partner of the third style.
<p align="right">(New York Times Magazine on November 9, 1930 pp 1-4, reprinted in Ideas and Opinions, Crown Publishers, Inc. 1954, pp 36 - 40, also in Einstein\'s book 
The World as I See It, Philosophical Library, New York, 1949, pp. 24 - 28)</p>

Quotes:
<table class="quote">
<tr>
<td>"I believe in Spinoza\'s God, who reveals Himself in the lawful harmony of the world, not in a God Who concerns Himself with the fate and the doings of mankind."
<p align="right">(Brian, Dennis (1996), Einstein: A Life, New York: John Wiley & Sons, pp. 127)</p>
</td>
</tr>
</table>
<br>
<table class="quote">
<tr>
<td>
"I am convinced that a vivid consciousness of the primary importance of moral principles for the betterment and ennoblement of life does not need the idea of a 
law-giver, especially a law-giver who works on the basis of reward and punishment. [...] I have repeatedly said that in my opinion the idea of a personal God is a 
childlike one. You may call me an agnostic, but I do not share the crusading spirit of the professional atheist whose fervor is mostly due to a painful act of 
liberation from the fetters of religious indoctrination received in youth."
<p align="right">(Albert Einstein in a letter to M. Berkowitz, October 25, 1950; Einstein Archive 59-215; from Alice Calaprice, ed., The Expanded Quotable Einstein, Princeton, New Jersey: Princeton University Press, 2000, p. 216.)</p>
</td>
</tr>
</table>
<br>
<table class="quote">
<tr>
<td>
"It was, of course, a lie what you read about my religious convictions, a lie which is being systematically repeated. I do not believe in a personal god and I have 
never denied this but have expressed it clearly. If something is in me which can be called religious then it is the unbounded admiration for the structure of the 
world so far as our science can reveal it."
<p align="right">(Helen Dukas and Banesh Hoffman (eds) (1981). Albert Einstein, The Human Side. Princeton University Press, 43.)</p>
</td>
</tr>
</table>
<br>
<table class="quote">
<tr>
<td>
"[A] person who is religiously enlightened appears to me to be one who has, to the best of his ability, liberated himself from the fetters of his selfish desires 
and is preoccupied with thoughts, feelings and aspirations to which he clings because of their super-personal value … regardless of whether any attempt is made 
to unite this content with a Divine Being, for otherwise it would not be possible to count Buddha and Spinoza as religious personalities. Accordingly a religious 
person is devout in the sense that he has no doubt of the significance of those super-personal objects and goals which neither require nor are capable of rational 
foundation … In this sense religion is the age-old endeavour of mankind to become clearly and completely conscious of these values and goals, and constantly to 
strengthen their effects.
<p>
[Conflicts between religion and science] have all sprung from fatal errors. [E]ven though the realms of religion and science in themselves 
are clearly marked off from each other [there are] strong reciprocal relationships and dependencies … science without religion is lame, religion without science is 
blind … a legitimate conflict between science and religion cannot exist. [... N]either the rule of human nor Divine Will exists as an independent 
cause of natural events. To be sure, the doctrine of a personal God interfering with natural events <a href="index.php#falsify">could never be refuted</a> ... by science, for 
[it] can always take refuge in those domains in which <a href="fallacies.php?appeal=3#appeals">scientific knowledge has not yet been able to set foot</a>".
<p align="right">(Einstein, Albert (1940), "On Science and Religion", Nature 146: 605)</p>
</td>
</tr>
</table>
<br>
<table class="quote">
<tr>
<td>
"The word God is for me nothing more than the expression and product of human weaknesses, the Bible a collection of honorable, but still primitive legends which are 
nevertheless pretty childish [...] For me the Jewish religion like all others is an incarnation of the most childish superstitions. And the Jewish people to whom 
I gladly belong and with whose mentality I have a deep affinity have no different quality for me than all other people. As far as my experience goes, they are no 
better than other human groups, although they are protected from the worst cancers by a lack of power. Otherwise I cannot see anything \'chosen\' about them."
<p align="right"><a href="http://www.guardian.co.uk/science/2008/may/13/peopleinscience.religion" target="_blank">The Guardian (UK News)</a></p>
</td>
</tr>
</table>';
}





//SPECIAL RELATIVITY FUNCTION
function specRelativity(){
echo '</p><p><b><u>Intro</u></b>
<p>
One of Einstein\'s assumptions that led to the development of Special Relativity was that the speed of light is constant, yet relative to all observers.
The speed of light in a vaccuum is 3 * 10<sup>5</sup> km/sec (or 186,000 mps). So, to someone stationary, the speed of light would be 3 * 10<sup>5</sup> km/s faster than them. Someone travelling
in a space ship at 10,000 mph, the speed of light would be 3 * 10<sup>5</sup> km/sec <i>faster</i> than them. This led to a peculiar situation:
</p>
<p align="center"><img src="../images/right_triangle.jpg">
</p>
<p>
Einstein created a thought experiment: if someone were walking along and threw a pencil straight up in the air while walking, the pencil would <i>appear</i> to travel
along the height of the triangle along with the observer moving along the base. However, the pencil <i>actually</i> travels along the hypotenuse while the observer is moving along the base. If
the pencil were a beam of light, the speed of light would either have to speed up in order to keep time consistent, or time would have to speed up along the hypotenuse
with respect to the base. Consequently, this speed of light (<i>c</i>) can be represented by c<sup>2</sup> in the Pythagorean Theorem: a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup>.
<i>The photon must always travel at the speed of light (c)</i>. Even if the person were moving (at velocity a<sub>person</sub>), the light would move at exactly the speed 
of light c. So, we have 3 variables: c, a<sub>person</sub>, and the speed of the photon upward or downward along the height: b<sub>photon</sub>. This leaves us with
the equation c<sup>2</sup> = a<sup>2</sup><sub>person</sub> + b<sup>2</sup><sub>photon</sub>. We can rearrange this to check the speed of the stationary photon:
b<sup>2</sup><sub>photon</sub> = c<sup>2</sup> - a<sup>2</sup><sub>person</sub>.

This works out if one gets rid of the person (a<sup>2</sup><sub>person</sub> = 0). This leaves b<sup>2</sup><sub>photon</sub> = c<sup>2</sup>: The speed of the photon is equal
to the speed of light. Because the speed of light is equal, either the time along the hypotenuse is shorter or the length of the hypotenuse shortens in relation to
whoever is observing the photon. This leads us to:
<p>
<u><b>Lorentz Transformations</b></u><a name="lorentz"></a>
<br>
<font size="1">from <a href="http://library.thinkquest.org/C008537/relativity/math/math.html" target="new">library.thinkquest.org</a></font>
<p>
Before we derive any equations, we must understand the concept of a light clock. A light clock looks like this:
<p align="center"><img src="../images/LightClock.gif">
<p>
We can use it to measure time because we know that time = distance / rate. (If you went 10 miles at 20 miles per hour, it took you 0.5 hours, right?) 
The distance the light travels is twice the length of the clock (this clock is on end, so it\'s the height here) and the rate at which it travels is the speed of 
light. So with a light clock, time = 2Length / c (remember that c is always the speed of light, or 3 x 10<sup>8</sup> m/sec).
<p>
<img src="../images/LightClock.gif"><br>
Jim is in a train car. He\'s looking at his light clock.

<p>
<img src="../images/MovingLightClock.gif"><br>
Bob can see Jim\'s light clock too. This is what Bob sees. Bob has his own light clock, which disagrees with Jim\'s.<br>
Let\'s say:
<ul>
<li>L is the height of the light clocks
<li>c is the speed of light
<li>t is Jim\'s time, the time it takes for one tick of his light clock, or t = 2L/c.
<li>t\' (read "t prime") is Bob\'s time, the time is takes for one tick of Bob\'s clock.
<li>v is Jim\'s velocity.
</ul>
Let\'s figure out the distance the light traveled, (according to Bob), using the Pythagorean Theorem (*x<sup>1/2</sup> means square root x)
<p class="center">
<img src="../images/full-triangle.gif">


<p class="center">
c is the hypotenuse. c<sup>2</sup> = base<sup>2</sup> + height<sup>2</sup>. The <i>base</i> is <i>vt\' / 2</i>, the <i>height</i> is <i>L</i>. (c<sup>2</sup>)<sup>1/2</sup> then equals:
<p class="center">
2 * (L<sup>2</sup> + (vt\'/2)<sup>2</sup>)<sup>1/2</sup> =
<p class="center">
2 * (L<sup>2</sup> + v<sup>2</sup>t\'<sup>2</sup>/4)<sup>1/2</sup> =
<p class="center">
2 * (4L<sup>2</sup>/4 + v<sup>2</sup>t\'<sup>2</sup>/4)<sup>1/2</sup> <br> multiply L<sup>2</sup> by 4 in order to add the two together, which becomes:
<p class="center">
2 * (4<sup>2</sup> + v<sup>2</sup>t\'<sup>2</sup>/4)<sup>1/2</sup> =
<p class="center">
2 * (4<sup>2</sup> + v<sup>2</sup>t\'<sup>2</sup>)<sup>1/2</sup>) / 4<sup>1/2</sup> <br> the square root of 4 = 2, so the two 2\'s cancel out, which becomes:
<p class="center">
(4<sup>2</sup> + v<sup>2</sup>t\'<sup>2</sup>)<sup>1/2</sup>

<p>
Since we can also say distance = rate x time (2 hours driving 60 miles per hour takes you 120 miles), we can say distance = ct\', and ct\' also equals (4<sup>2</sup> + v<sup>2</sup>t\'<sup>2</sup>)<sup>1/2</sup>.
Now how about the time? Let\'s work it out:

<p class="center">
Square both sides:  c<sup>2</sup>t\'<sup>2</sup> = 4L<sup>2</sup> + v<sup>2</sup>t\'<sup>2</sup>
<p class="center">
Move term to the other side:  c<sup>2</sup>t\'<sup>2</sup> - v<sup>2</sup>t\'<sup>2</sup> = 4L<sup>2</sup>
<p class="center">
Factor out <i>t\'<sup>2</sup></i>:   t\'<sup>2</sup>(c<sup>2</sup> - v<sup>2</sup>) = 4L<sup>2</sup>
<p class="center">
Isolate <i>t\'<sup>2</sup></i>: t\'<sup>2</sup> = 4L<sup>2</sup> / c<sup>2</sup> - v<sup>2</sup>
<p class="center">
Factor out a term on the bottom:  t\'<sup>2</sup> = 4L<sup>2</sup> / c<sup>2</sup> (1 - v<sup>2</sup>/c<sup>2</sup>)
<p class="center">
Get rid of squares (square root everything): t\' = 2L / c (1 - v<sup>2</sup>/c<sup>2</sup>)<sup>1/2</sup>
<p class="center">
Since we know that, on a time clock, <i>2L / c</i> is the time for each tick, we can replace <i>2L / c</i> for <i>t</i>: 
t\' = t / (1 - v<sup>2</sup>/c<sup>2</sup>)<sup>1/2</sup>

<p>
For each tick, t, on Jim\'s clock, Bob observes t\' ticks on his own clock. The equation <i>t\' = t / (1 - v<sup>2</sup>/c<sup>2</sup>)<sup>1/2</sup></i> is called the <b>Lorentz Factor</b>.



<p>
<u><b>E = mc</u><sup>2</sup></b><a name="emc2"></a>
<br><font size="1"><i>from <a href="http://www.adamauton.com/warp/emc2.html" target="new">adamauton.net</a></i></font>
<p>
Perhaps the most famous equation of all time is E = mc<sup>2</sup>. The equation is a direct result of the theory of special relativity, but what does it mean and 
how did Einstein find it? In short, the equation describes how energy and mass are related. Einstein used a brilliant thought experiment to arrive at this equation, 
which we will briefly review here.

<p>
First of all, let us consider a photon. One of the interesting properties of photons is that they have momentum and yet have no 
mass. This was established in the 1850s by James Clerk Maxwell. However, if we recall our basic physics, we know that momentum is made up of two components: mass 
and velocity. How can a photon have momentum and yet not have a mass? Einstein’s great insight was that the energy of a photon must be equivalent to a quantity of 
mass  and hence could be related to the momentum.

<p>
Einstein’s thought experiment runs as follows. First, imagine a stationary box floating in deep space. Inside the box, a photon is emitted and travels from the left 
towards the right. Since the momentum of the system must be conserved, the box must recoils to the left as the photon is emitted. At some later time, the photon 
collides with the other side of the box, transferring all of its momentum to the box. The total momentum of the system is conserved, so the impact causes the box 
to stop moving.

<p>
Unfortunately, there is a problem. Since no external forces are acting on this system, the center of mass must stay in the same location. However, the box has moved. 
How can the movement of the box be reconciled with the center of mass of the system remaining fixed?

<p>
Einstein resolved this apparent contradiction by proposing that there must be a ‘mass equivalent’ to the energy of the photon. In other words, the energy of the 
photon must be equivalent to a mass moving from left to right in the box. Furthermore, the mass must be large enough so that the system center of mass remains 
stationary.

<p>
Let us try and think about this experiment mathematically. For the momentum of our photon, we will use Maxwell’s expression for the momentum of an electromagnetic 
wave<sup>[<a href="http://en.wikipedia.org/wiki/Maxwell%27s_equations" target="_blank">1</a>]</sup> having a given energy. If the energy of the photon is E and the speed of light 
is c, then the momentum of the photon is given by:

<p class="center">
P<sub>photon</sub> = E / c

<p>
The box, of mass M, will recoil slowly in the opposite direction to the photon with speed v. The momentum of the box is:

<p class="center">
P<sub>box</sub> = M<sub>v</sub>

<p>
The photon will take a short time, &#916t, to reach the other side of the box. In this time, the box will have moved a small distance, &#916x. The speed of the box is 
therefore given by:

<p class="center">
v = &#916x / &#916t

<p>
By the conservation of momentum, we have:

<p class="center">
M(&#916x / &#916t) = E / c

<p>
If the box is of length L, then the time it takes for the photon to reach the other side of the box is given by:

<p class="center">
&#916t = L / c

<p>
Substituting into the <i>conservation of momentum</i> equation and rearranging:

<p class="center">
M&#916x = EL / c<sup>2</sup>

<p>
Now suppose for the time being that the photon has some mass, which we denote by m. In this case the center of mass of the whole system can be calculated. If the 
box has position x<sub>1</sub> and the photon has position x<sub>2</sub>, then the center of mass for the whole system is:

<p class="center">
<img src="../images/eq7M.gif">

<p>
We require that the center of mass of the whole system does not change. Therefore, the center of mass at the start of the experiment must be the same as the end of 
the experiment. Mathematically:

<p class="center">
<img src="../images/eq8M.gif">

<p>
The photon starts at the left of the box, i.e. x<sub>2</sub> = 0. So, by rearranging and simplifying the above equation, we get:

<p class="center">
ML = M&#916x

<p>
Substituting the <i>conservation of momentum</i> equation into the above yields:

<p class="center">
mL = EL / c<sup>2</sup>

<p>
Rearranging gives the final equation:

<p class="center">
E = mc<sup>2</sup>

<p>
Using 1 kg of mass, we get the following amount of energy:

<p class="center">
E = (1 kg) * (299,792,458 m/s)<sup>2</sup> => (approx. 90 * 10<sup>15</sup> Joules)

<p>
In practice, it is not possible to convert all of the mass into energy (For instance, the "Gadget"-style bomb used in the Trinity test and the bombing of Nagasaki 
had an explosive yield equivalent to 21 kt of TNT. About 1 kg of the approximately 6.15 kg of plutonium in each of these bombs fissioned into lighter elements 
totaling almost exactly one gram less, after cooling (the heat, light and radiation in this case carried the missing gram of mass). This occurs because nuclear 
binding energy is released whenever elements with more than 56 nucleons fission). However, this equation led directly to the development of nuclear energy and the 
nuclear bomb - probably the most tangible results of special relativity.

<p>
<u><b>Mass, Length, and Time In Special Relativity</b></u><a name="lrntz"></a>
<p>
The term mass in special relativity can be used in different ways, occasionally leading to confusion. Historically, mass can refer to either the <i>invariant</i> mass or 
the <i>relativistic</i> mass.
<ul>
<li>The <b>invariant mass</b> (also known as the rest mass, intrinsic mass or the proper mass) is an observer-independent quantity - m<sub>0</sub>
<li>The <b>relativistic mass</b> (also known as the apparent mass) depends on one\'s frame of reference - m<sub>r</sub>
</ul>

<p>
Because of this, m<sub>0</sub> is also treated as a constant and m<sub>r</sub> is equivalent to E in E=mc<sup>2</sup>. Thus, the actual equation between energy and 
mass becomes E<sup>2</sup> = m<sup>2</sup>c<sup>4</sup> + p<sup>2</sup>c<sup>2</sup>, where p is the momentum. An object at rest has 0 momentum, so it simplifies to E=mc<sup>2</sup>.
If the object is massless, then the equation becomes E = pc, which is the case for a photon. The equation for p is given as:

<p class="center">
p = m<sub>0</sub>*v *1 / (1 - (v/c)<sup>2</sup>)<sup>1/2</sup> 

<p>
Does this equation look familiar? Apart from the variables p, m<sub>0</sub>, and v, it\'s the <b>Lorentz Factor</b> from above. Notice that in the square root part of the 
equation, if the object\'s velocity (v) is at or greater than the speed of light, some wackiness ensues. A velocity equal to c means that we divide by zero resulting
in an infinity -- sqrt(1 / 1 - 1) -- and if the velocity is greater than c, then we\'re dealing with an irrational number -- sqrt(1 / -n); neither of which exist in 
reality.

<p>
<u><i>Length Contraction</i></u>
<br>
In the equation below, L<sub>0</sub> is the length of the object at rest in relation to a motionless observer - in other words, the normal length you see your computer at in day to day
situations. However, because the speed of light has to be constant for all observers, length contraction occurs to objects moving at a significant fraction of the
speed of light. Utilizing the Lorentz Factor, this new length comes out to be:

<p class="center">
L = L<sub>0</sub> * (1 - (v / c)<sup>2</sup>)<sup>1/2</sup>

<p>
Let\'s say a road is observed as 20 meters by a stationary observer. If the observer then moving at a significant fraction of the speed of light, say .98c, then the
length of the road will shorten drastically:

<p class="center">
L = L<sub>0</sub> * (1 - (v / c)<sup>2</sup>)<sup>1/2</sup>
<p class="center">
L = 20 [1 - (0.98)<sup>2</sup>)]<sup>1/2</sup>
<p class="center">
L = 3.98 meters

<table class="quote" style="background-color:#BBBBBB; left:-18%;"><tr><td>
<APPLET codebase="../classes" code="lorentzLngth/LorentzLApplet.class" width=350 height=200></APPLET>
</td></tr>
</table>


<p>
<u><i>Time Dilation</i></u>
<br>
Time Dilation also occurs on objects travelling at a significant fraction of the speed of light - which is also a result of the Lorentz Factor. Let\'s say that a
space traveller wants to travel to Alpha Centauri, which is 4.3 lightyears away. If they could travel at a significant fraction of c - say .95c - it would take them
4.5 years to reach the star... &#916t<sub>0</sub>. &#916t<sub>0</sub> is the change in time, which is derived simply by finding the quotient of dividing length by speed. 4.3 lightyears 
/ 0.95c = 4.5 years (&#916t<sub>0</sub>).

<p>
However, this only hold true for the traveller, since he is <b>NOT</b> moving relative to <i>his</i> speed of light. A person on Earth would measure the time spent 
by the traveller going to Alpha Centauri as <i>1.4 years!</i> As in, the traveller would only age by 1.4 years in the 4.5 years of travel! This is because we see 
the space traveller moving at such a high fraction of c, that we witness the dilated time - <b>&#916t<sub>dilated</sub></b> - on Earth. This leads to what is popularly called
the <a href="http://en.wikipedia.org/wiki/Twin_paradox" target="_blank">Twin Paradox</a>. The explanation is as follows:

<p class="center">
&#916t<sub>dilated</sub> = &#916t<sub>0</sub> * (1 - v<sup>2</sup>/c<sup>2</sup>)<sup>1/2</sup>

<p class="center">
&#916t<sub>dilated</sub> = 4.5 * (1 - (.95c)<sup>2</sup>/c<sup>2</sup>)<sup>1/2</sup>

<p class="center">
&#916t<sub>dilated</sub> = 4.5 * (1 - 0.9025)<sup>1/2</sup>

<p class="center">
&#916t<sub>dilated</sub> = 1.4

<p class="center">
<table class="quote" style="background-color:#BBBBBB; left:-18%;"><tr><td>
<APPLET codebase="../classes/t" code="LorentzT/LorentzTApplet.class" width="350" height="200"></APPLET>
</td></tr>
</table>



<p>
<b><u>Muons</u></b><a name="muons"></a>
<p>
<a href="http://en.wikipedia.org/wiki/Muon" target="_blank">Muons</a> are particles created high up above the Earth\'s surface by cosmic rays hitting the atmosphere. They can be detected in large numbers at the Earth\'s surface. 
They travel at around 0.998 times the speed of light, but they don\'t live for very long - typically, they decay after only 2 x 10<sup>-6</sup> = 0.000002 seconds. 
Multiplying their speed by their lifetime, they should only travel 600m before dying - but they are produced in the atmosphere (6,000m above the Earth) and can be
detected at the surface! Due to their speed, their frame of reference says it\'s only 300m from the atmosphere to the surface.


';}




//GENERAL RELATIVITY FUNCTION
function genRelativity(){
echo '</p><p><b><u>Intro</u></b>
<p>
The formulation of General Relativity came about by a thought experiment by Einstein. Say someone was riding in an elevator, and a beam of light was coming through
a window of the elevator. While the elevator was stationary, the light would appear travel in a straight line to the observer. However, if the elevator were to accelerate -
say upwards - then the beam of light would appear to bend down towards the floor. With this thought experiment, Einstein concluded that acceleration could have an
affect on the path of light. To the observer in the elevator, if the elevator were to accelerate at 9.8 meters / second<sup>2</sup>, he would feel the same "force" that gravity
exerts on him if he were standing on the surface of the Earth (an apple falling from a table onto the floor falls at 9.8 meters / second<sup>2</sup>). These two ideas combined
led to Einstein\'s "Principle of Equivalence". The Equivalence Principle states that acceleration can exert the same force on a body as gravity. Another example: 
pilots are put under <i>G(ravity) Forces</i> while flying; their <i>acceleration</i> puts the same force on them as gravity would. 2 G\'s of acceleration means the 
force is equivalent to 2 times the force of gravity.

</p>
<p align="center"><img src="../images/equiv.gif">
</p>
 
<p>
The Equivalence Principle became a working hypothesis which needed to be verified. Verification came from a solar eclipse in 1919. Since the sun is a super-massive
object, according to Einstein\'s Equivalence Principle, the sun\'s gravity should bend light much like acceleration in the hypothetical elevator. Because the solar
eclipse allowed scientists to look directly at the sun and its immediate surrounding area, they could use this solar eclipse to validate Einstein\'s hypothesis. And
they did. Stars that were behind the sun that shouldn\'t have been visible indeed were; the sun\'s gravity was bending light around it. The verification of this
phenomenon provided positive evidence for Einstein\'s General Relativity, and also made him famous all over the world.
</p>

<p>
<b><u>Mercury\'s Odd Orbit</u></b><a name="merc"></a>
<p>
When Kepler proposed his 3 laws, they correctly predicted the movement of celestial bodies. Newton expanded on Kepler\'s formulas and devised equations for gravity.
These equations predicted the movement of planets around the sun - except for Mercury. Careful observations of Mercury showed that the actual value of the 
precession disagreed with that calculated from Newton\'s theory by 43 seconds of arc per century. In general relativity, this orbit will precess, or change 
orientation within its plane, due to gravitation being mediated by the curvature of spacetime. Since the orientation of an orbit is usually given by the position 
of its <a href="http://en.wikipedia.org/wiki/Apsis" target="new">periapsis</a>, this change of orientation is described as being a precession in the periapsis of an object. 
However, the problem was resolved by Einstein\'s theory, which predicted exactly the observed amount of perihelion shift. This was a powerful factor motivating the 
adoption of Einstein\'s theory.

<p>
Thus, the predictions of general relativity perfectly account for the missing precession (the remaining discrepancy is within observational error). 
All other planets experience perihelion shifts as well, but, since they are further away from the Sun and have lower speeds, their shifts are lower and harder to 
observe. For example, the perihelion shift of Earth\'s orbit due to general relativity effects is about 5 seconds of arc per century. The periapsis shift has also 
been observed with Radio telescope measurements of Binary pulsar systems, again confirming general relativity.

<p>
<b><u>Gravity In General Relativity</u></b>
<p>
Einstein\'s theory of General Relativity superceded Newton\'s Laws of Gravity by being able to explain gravity more consistently. So what is gravity in General Relativity?
In this model, gravity is the bending of space-time by massive objects, much like a bowling ball sitting on a bed. If the Sun is represented by the bowling ball,
space-time would be represented by the mattress of the bed. In the 1919 solar eclipse, if light from a star behind the Sun can be represented by a moving object on
the bed like a penny, the penny\'s path along the mattress would be distorted by the depression caused by the bowling ball. Instead of moving in a straight line,
the penny would warp around the indentation caused by the bowling ball.
</p>
<p align="center"><img src="../images/gravityBall.jpg">
<br>
<i>This is a 2 dimensional representation of a 4 dimensional phenomenon.</i>
</p>
 
<p>
<b><u>Black Holes</u></b><a name="black"></a>
<p>
So, the mass of the Earth makes objects fall at a rate of 9.8 m/s<sup>2</sup>. The speed of light is 3 x 10<sup>8</sup> m/s. If gravity has an affect on the
course of a beam of light, what happens if the gravity of an object makes objects fall towards it at a speed greater than 3 x 10<sup>8</sup> m/s<sup>2</sup> (the speed
of light)? The result is an object
that reflects no light, since all light that enters its gravitational field doesn\'t have the speed to escape its gravity: what\'s called a <i>black hole</i>. While 
black holes have never been observed directly, there is plenty of indirect evidence of their existence. One such evidence is such that when astronomers 
look into the stars, they see intense warping of light coming from certain sources. Much like looking at a mirror that is warped from being melted in the center. Away 
from the mirror\'s warping, things look normal. As you head towards the warping, your reflection gets skewed. While we can\'t actually see the warping itself,
we do see its effects.
<p>
Another evidence for black holes is the existence of Hawking Radiation. Hawiking Radiation is the strange emittence of high powered X-ray radiation coming from
"black" sources - sources where no light enters or escapes. To explain Hawking Radation, some knowledge of quantum physics (QM) is needed. In QM, all particles have their 
anti-particle. QM states that virtual particles are created in the "vaccuum" of space (space actually isn\'t "empty") - these are called vaccuum fluctuations.
A particle and its anti-particle will "poof" into existence due to quantum potentiality, but in order to conserve the total mass of the Universe, these two
particles immediately destroy each other. If one of these vaccuum fluctuations happens near a black hole and one half of the particle/antiparticle pair 
is sucked into the black hole before the two particles annihilate each other, the black hole will seem to "emit" this particle with a lot of energy - energy 
equivalent to x-ray radiation, which we can see.  
<p>
<p align="center"><img src="../images/black-hole.jpg" alt="black hole with Hawking radiation being emitted at the poles">
<br>
<i>A black hole emitting high energy x-rays at its top and bottom parts</i>
<p>
The existence of black holes can be considered a "prediction" of General Relativity, since it is a logical conclusion of the premises of General
Relativity.






<p><u><b>Global Positioning Satellites</b></u><a name="gps"/>
<br>
<font size="1">from <a href="http://en.wikipedia.org/wiki/Gps#Relativity" target="new">wikipedia.org</a></font><br>
According to the theory of relativity, due to their constant movement and height relative to the Earth-centered inertial reference frame, the clocks on the satellites are 
affected by their speed (special relativity) as well as their gravitational potential (general relativity). For the GPS satellites, general relativity predicts 
that the atomic clocks at GPS orbital altitudes will tick more rapidly, by about 45,900 nanoseconds (ns) per day, because they are in a weaker gravitational field 
than atomic clocks on Earth\'s surface. Special relativity predicts that atomic clocks moving at GPS orbital speeds will tick more slowly than stationary ground 
clocks by about 7,200 ns per day. When combined, the discrepancy is 38 microseconds per day; a difference of 4.465 parts in 10<sup>10</sup>.
<sup>[<a href="http://www.gmat.unsw.edu.au/snap/gps/gps_survey/chap3/312.htm" target="new">14</a>]</sup>. To account for this, 
the frequency standard onboard each satellite is given a rate offset prior to launch, making it run slightly slower than the desired frequency on Earth; 
specifically, at 10.22999999543 MHz instead of 10.23 MHz.<sup>[<a href="http://www.aticourses.com/global_positioning_system.htm" target="new">15</a>]</sup>

<p>
GPS observation processing must also compensate for another relativistic effect, the Sagnac effect. The GPS time scale is defined in an inertial system but 
observations are processed in an Earth-centered, Earth-fixed (co-rotating) system, a system in which simultaneity is not uniquely defined. The 
<a href="relative.php?topic=spec#lorentz">Lorentz transformation</a> 
between the two systems modifies the signal run time, a correction having opposite algebraic signs for satellites in the Eastern and Western celestial hemispheres. 
Ignoring this effect will produce an east-west error on the order of hundreds of nanoseconds, or tens of meters in position.
<sup>[<a href="http://www.ipgp.jussieu.fr/~tarantola/Files/Professional/GPS/Neil_Ashby_Relativity_GPS.pdf" target="new">16</a>]</sup>

The atomic clocks on board the GPS satellites are precisely tuned, making the system a practical engineering application of the scientific theory of relativity in a 
real-world system.

';
}
?>


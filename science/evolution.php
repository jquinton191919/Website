<html>
<head>
<link rel="stylesheet" type="text/css" href="../myStyle.css"/>
<link rel="Shortcut Icon" href="../favicon.ico"/>
<title> The Theory of Evolution <? include("ddHeader.php"); ?></title>
</head>
<!-- 
What you really do see when you look at a horse is a distinct amount of horse-ness thinly layered atop a preponderance of older traits. Some of those older traits 
come from immediate horse-ancestors, but even more of them come from a base of other ancestor-creatures stacked below. There’s a healthy helping of earlier mammals 
down there, an even bigger portion of reptilian ancestors further down. Below that is a great shore of amphibian ancestry, down further is an ocean of fishiness, 
and on and on – all of which left deep, broad, profound legacies of structure and function in the makeup of the horse, and every other living equine.

...

Just as pyramids contain more pyramid-base and pyramid-middle than they do tiny pyramid-peak, horses contain more attributes of their ancestors than they do of 
themselves.

The truth is, when you look at a horse, most of what you see is not Horse.

The ~8% figure came from sequencing our entire genome. Full text:
http://www.nature.com/nature/journal.../409860a0.html

The paper talking about ERVs(LTR retroposons):

Quote:
LTR retroposons are flanked by long terminal direct repeats that contain all of the necessary transcriptional regulatory elements. The autonomous elements 
(retrotransposons) contain gag and pol genes, which encode a protease, reverse transcriptase, RNAse H and integrase.

They then say:

Quote:
The precise count of repeats is obviously underestimated because the genome sequence is not finished, but their density and other properties can be stated with 
reasonable confidence. Currently recognized SINEs, LINEs, LTR retroposons and DNA transposon copies comprise 13%, 20%, 8% and 3% of the sequence, respectively.

With respect to the amount of protein coding genes..

Quote:
If there are 30,000–35,000 genes, with an average coding length of about 1,400 bp and average genomic extent of about 30 kb, then about 1.5% of the human genome 
would consist of coding sequence and one-third of the genome would be transcribed in genes.

The 1.5% and 8% figures are of course best estimates, but it's clear that our genome is comprised more of ERV sequences than of coding sequences.

I found this image from here, which is from T.R. Gregory's lab.

http://www.genomesize.com/gregorylab...pg&w=565&h=400
The components of the human genome. Only about 1.5% of the more than 3 billion base pairs encode protein-products, whereas about 45% consists of “genomic parasites” 
(transposable elements: DNA transposons, LTR retrotransposons, and Long- and Short Interspersed Nuclear Elements [LINEs, and SINEs]) and especially their extinct 
remnants. From Gregory (2005b).

New information in a genome does come from mutation.

Gene duplication:

Gene duplication is when one gene is made into two via mutation. This allows for the the duplicates to change while the function of the first is not lost.

http://www.sciencedaily.com/releases/2002/03/020304081153.htm

Alternative splicing:

Alternative splicing is how the coding regions of DNA after they have been transcribed are spliced together in various different ways by intermediary splicing molecules called SNRPS (small nuclear ribonucleoproteins,).

Changes in a gene or the intermediary control paths (which a bunch of other genes control) change how these function and can produce new Mrna and therefore different proteins from the same original DNA.

http://en.wikipedia.org/wiki/Alternative_splicing

Mutations of start codons and promoters in non-codeing regions can form genes spontaneously.

http://www.newscientist.com/article/mg20327244.100-three-human-genes-evolved-from-junk.html

And a personal favorite, the nylon eating bacteria (new gene due to a frame-shift mutation):

http://www.pnas.org/content/81/8/2421.long

-->
<script language="javascript">

function select(query){

document.location="evolution.php?query="+query+"#tableTop";

}

function myOpen(url){

window.open(url);

}

</script>
<body onLoad="javascript:changeWidth();">


<!-- TAB TABLE -->
<script language="javascript" src="../myScript.js">
</script>
<noscript> 
<? include("tab.php"); 
tab();
?> 
</noscript>
<!-- end TAB TABLE -->

<? 
include("sidebar.php");
?>


<!-- MAIN TABLE -->
<table class="main" id="main">
<tr>
<td>

<h1>The Theory of Evolution</h1>
<hr>
<p>
Evolution functions on these basic premises:
<ul>
<li>There are a number of imperfect replicators on Earth competing for limited resources (food / land)</li>
<li>The environment that these imperfect replicators inhabit determine which replicators are</li>
successful and which ones are not by means of reproductive success.
<li>Child replicators inherit their parents' DNA, this includes all positive, negative, and
neutral replication errors.</li>
<li>The combination of these factors (imperfect replicators + limited resources + heritability)
is what is responsible for the diverse number of species on the planet.</li>
</ul>
</p>

<p>
In order for a <a href="http://en.wikipedia.org/wiki/Theory#Science" target="_blank">scientific theory</a> to be successful, it has to <b><u>explain what's going on in 
nature</u></b> better than any other theories. Below is a list of empirical evidence (things
we observe happening/going on in nature) that need explanation:
</p>

<table width="95%" border="0" class="inside">
<tr><a name="tableTop">
<td width="40%">
<ul>
<li><a href="javascript:select('fossil')">Succession in the fossil record</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "fossil"){
echo '<p>A brief description of fossils</p>';
}
?></li>

<li><a href="javascript:select('nest')">Nested hierarchies</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "nest"){
echo '<p>A brief description of Nested Hierarchies</p>';
}
?></li>


<li><a href="javascript:select('erv')">Endogenous Retroviruses</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "erv"){
echo '<p>A brief description of Endogenous Retroviruses</p>';
}
?></li>

<li><a href="javascript:select('red')">Redundant Pseudogenes</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "red"){
echo '<p>A brief description of Redundant Pseudogenes</p>';
}
?></li>

<li><a href="javascript:select('punk')">Punctuated Equilibrium</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "punk"){
echo '<p>A brief description of Punctuated Equilibrium</p>';
}
?></li>

<li><a href="javascript:select('micro')">Micro-Evolution</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "micro"){
echo '<p>A brief description of Microevolution</p>';
}
?></li>

<li><a href="javascript:select('macro')">Macro-Evolution</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "macro"){
echo '<p>A brief description of Macroevolution</p>';
}
?></li>

<li><a href="javascript:select('vestigial')">Vestigial Organs</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "vestigial"){
echo '<p>A brief description of Vestigial Organs</p>';
}
?></li>

<li><a href="javascript:select('ring')">Ring Species</a>
<?php 
$query = $_REQUEST['query'];
if ($query == "ring"){
echo '<p>A brief description of Ring Species</p>';
}
?></li>
</ul>
</td>
<td>

<?php

$query = $_REQUEST['query'];

queryRequest($query);
?>
</td>
</tr>

<tr>
<th colspan="2">
<p align="center">
<img src="../images/evo-tree.gif">
</p>
</th>
</td>
</tr>
</table>

<p>
The above list is a list (not all-inclusive) of the things we find in nature that need a biological
explanation. The Theory of Evolution is the scientific theory that attempts to explain why we find
these things happening in nature - such as <a href="javascript:myOpen('http://education.guardian.co.uk/higher/research/story/0,,1716328,00.html')">
birds with teeth</a>. 
Birds having genes for teeth is strong evidence that they had an ancestor that did have teeth (dinosaurs).</p>
<p>All birds have genes for teeth that are not "turned on", just like all humans have genes for
tails that are not turned on (<a href="javascript:myOpen('http://www.talkorigins.org/faqs/comdesc/section2.html#atavisms_ex2')">most of the time</a>).
<p>
Then we have Creationism. Creationists are people who believe that, in this
context, life on Earth was willed into existence by their god(s). Creationsim is anti-science right
off the bat - they start with their conclusion and try to shoe-horn the Universe into their
assumed conclusion, ignoring any evidence to the contrary:
</p>
<table align="center" class="inside"><tr><td align="center"><img src="../images/creationScience.gif"></td></tr>
<tr><td align="center"><i>One side's methodology is extremely biased, the other's is objective. Which is which?</i></td></tr></table>
<p>
Most Creationists function under
the false axiom that if they "prove" the Theory of Evolution false, this means that Creationism is true.
This is could be categorized under the logical fallacy of a <a href="fallacies.php#false">False
Dichotomy</a>. Proving the ToE false in no way means that Creationism is true. In order for Creationism
to be found true, Creationists would have to provide evidence of <i>creation</i>.</p>
<p>Once that happened, then the Creationist would have to provide evidence that <i>their respective
god(s)</i> did indeed perform the creation event.</p>
<p>
Below is an index (off site) of common Creationist claims initially compiled by Mark Isaak of <a href="http://www.talkorigins.org" target="new">
Talk.Origins</a> :
<ul>
<li>Philosophy and Theology</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Ethics')">Ethics</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Epistemology')">Epistemology</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Foundation_of_Knowledge')">Foundation of Knowledge</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Theory_of_Science')">Theory of Science</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Pedagogy')">Pedagogy</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Scientific_Method')">Scientific Method</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Theology')">Theology</a></li>
</ul>
<li>Biology</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Abiogenesis')">Abiogenesis</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Genetics')">Genetics</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Molecular_Biology')">Molecular Biology</a></li> 
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Physiology_and_Anatomy')">Physiology and Anatomy</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Behavior_and_Cognition')">Behavioral Cognition</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Botany')">Botany</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Ecology_and_Population_Biology')">Ecology and Population Biology</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Systematics')">Systematics</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Evolution')">Evolution</a></li>
</ul>
<li>Paleontology</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Physical_Anthropology')">Physical Anthropology</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Questionable_fossils')">Questionable Fossils</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#All_hominid_fossils_are_fully_human_or_fully_ape')">All Homonid Fossils Are Fully Human Or Fully Ape</a></li> 
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Human_fossils_are_out_of_place')">Human Fossils Are Out Of Place</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Other_Anthropology')">Other Anthropology</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Transitional_fossils')">Transitional Fossils</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Fossil_Record')">Fossil Record</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Methodology')">Methodology</a></li>
</ul>
<li>Geology</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Geochronology')">Geochronology</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Geological_Column')">Geological Column</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Sedimentation')">Sedimentation</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Evaporation')">Evaporation</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Glaciation')">Glaciation</a></li> 
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Mountain_Building')">Mountain Building</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Erosion')">Erosion</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Geophysics_.26_Plate_tectonics')">Geophysics And Plate Techtonics</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Climate_Change')">Climate Change</a></li>
</ul>
<li>Astronomy</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Earth')">Earth</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Moon')">Moon</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Planets_.26_Solar_System')">Planets and Solar System</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Sun_.26_Stars')">Sun and Stars</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Cosmology')">Cosmology</a></li>
</ul>
<li>Physics</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#2nd_Law_of_Thermodynamics_and_Information_Theory')">2nd Law of Thermodynamics and Information Theory</a></li> 
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#1st_Law_of_Thermodynamics')">1st Law of Thermodynamics</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Radioactive_Decay')">Radioactive Decay</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Speed_of_Light')">Speed of Light</a></li>
</ul>
<li>Miscellaneous Anti-Evolution</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#History')">History</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Linguistics')">Linguistics</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Folklore')">Folklore</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Arguments_based_upon_other_scientific_fields')">Arguments Based On Other Scientific Fields</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Law')">Law</a></li>
</ul>
<li>Biblical Creationism</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Creationism_Generally')">Creationism (General)</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Biblical_Accuracy')">Biblical Accuracy</a></li> 
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Young_Earth_Creationism')">Young Earth Creationism</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Age_of_the_Universe')">Age of Universe</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Death_and_the_Fall')">Death and the Fall</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Flood')">Flood</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Dinosaurs')">Dinosaurs</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Day-Age_Creationism')">Day-Age Creationism</a></li>
</ul>
<li>Intelligent Design</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#ID_as_Science')">Intelligent Design as Science</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Detecting_Design')">Detecting Design</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#First_Cause')">First Cause</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Anthropic_Principle')">Anthropic Principle</a></li>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Meta-arguments')">Meta-Arguments</a></li> 
</ul>
<li>Vedic Creationism</li>
<ul>
<li><a href="javascript:myOpen('http://wiki.cotch.net/index.php/List_of_creationist_arguments#Vedic_Creationism')">Vedic Creationism</a></li> 
</ul>
</ul>

</td>
</tr>
</table>
</body>

<!-- 
Mutations:

128 mutations per human zygote (http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?cmd=Retrieve&db=pubmed&dopt=Abstract&list_uids=10577911&query_hl=1&itool=pubmed_docsum)

chromosomes: they contain protein-making instructions. Like loose-leaf sheets, these instructions can be bound together in any number of volumes, which is what 
chromosomes are. With a bunch of caveats omitted for simplicity, it doesn't much matter how many chomosomes there are, provided all the instructions remain intact. (
The main caveat being that all the non-coding, boot-strapping regulatory stuff would still need to be operative -- which I mention after all before some other 
smart-arse does .)

Suppose there's an organism with a 500-gene genome. This could be on one long chromosome, or fifty chromosomes with ten genes each, or two with 250, or 500 
chromosomes with just one gene each. Provided all the pieces can line up appropriately at mitosis, the plain number of chromosomes is irrelevant. (It becomes 
relevant for the practicality of this lining-up, but we're talking in principle here.)

In other words, the fact that the putative ape-ancestor had a fused chromosome does not mean it could not breed with an unfused-chromosome-d mate, because the 
mate's two separate pieces of chromosome -- containing the same genes -- could still line up. Przewalski's horse shows that this is indeed possible. (It's 
pronounced 'Shevalski', btw if anyone cares.)

-->







<?php 
/*****************************************BEGIN PHP CODE****************************************/

function queryRequest($x) {

switch($x) {

case "fossil":

echo '<p><u>Fossils</u> are pieces of rock and other hard material with indentations from the remains of dead organisms. 
These are called fossils, and the totality of these objects and their placement in rock formations 
is referred to as the fossil record.</p>
<p>
No fossil has ever been found "out of place" within the geological strata. In other words, in geology
layers of Earth form a succession - older rocks are placed below newer rocks. Older sediments are
found below newer sediments. This is called the <a href="javascript:myOpen(\'http://en.wikipedia.org/wiki/Law_of_superposition\')">Law of Superposition</a> 
With respect to fossils, let\'s say species A is believed to be the
ancestor of species B. No fossil of species A has ever been found in a layer above species B.
This is true of all fossils.
</p>
<p>
There are very few fossils mainly because of the fossilization process. If every human being on the
planet died right now, very few - <b><i>if any</i></b> - would leave behind fossils.
</p>
<p>
<ol>
<li><u>Carbonization</u> is one form of fossilization and is 
typical for such organisms as plants and insects. These fossils are a coal 
black film formed when the volatile organic compounds disperse from the 
decomposing organism and end up leaving a thin residue of carbon. 
</p></li>
<p>
<li><u>Permineralization</u> is a second type of fossil formed. The soft tissue of the 
organism decay away and the remaining hard parts are flooded with ground water.  
Dissolved with in the water is calcium carbonate (calcite) or silicate.  Which 
ever mineral is present precipitates out and fills the pores of the long gone 
organism.  Cementation occurs and a "rock" is left in the place of the wood or 
bone or what-have-you with an amazing amount of detail preserved as well.
</p></li>
<p>
<li><u>Dissolution and Replacement</u> is a third type  of fossilization and can be a step 
wise progression from <u>Permineralization</u>. In some cases, when the ground water 
flows into the space previously occupied by the soft tissues of the organism, 
the original material may dissolve away, leaving a void in the surrounding 
sediments.  This space, which is in the shape of the organism like a jell-0 
mold, quickly becomes filled with minerals and an internal mold or "stone cast" 
is formed. Replacement can occur if it is a per mineral fossil which is 
dissolved and replaced by a secondary type of mineral.
</p></li>
<p>
<li><u>Recrystallization</u> can be the fourth type of fossil. Shells are often 
recrystallized because of the relatively unstable minerals that they comprise of 
to begin with.
</p></li>
</ol>
';
break;

case "nest":
echo '<u>Nested Hierarchies</u>
<br><br>
<p>Snakes and lizards share a large number of traits as they are more closely related to one another 
than to the other animals. The same can be said of crocodiles and birds, whales and 
camels, and humans and chimpanzees. However, at a more inclusive level, snakes, lizards, birds, 
crocodiles, whales, camels, chimpanzees and humans all share some common traits.</p>
<p>
Humans and chimpanzees are united by many shared inherited traits (such as 98.7% of DNA). 
But at a more inclusive level of life\'s hierarchy, we share a smaller set of inherited traits in 
common with all primates. More inclusive still, we share traits in common with other mammals, other 
vertebrates, other animals. At the most inclusive level, we sit alongside sponges, petunias, diatoms 
and bacteria in a very large “box” entitled: living organisms.
</p>
';
break;

case "":
break;

case "erv":
echo '
<p>
<u>Endogenous Retroviruses</u> (ERVs) are vestiges of ancestral viral infection that have been 
incorporated into a host\'s genome. ERVs are identifiable due to the presence of sequences that 
code (or once coded) for viral proteins, including gag (structural proteins), pol (viral enzymes), 
and env (surface proteins), as well as telltale long terminal repeats.</p>
<p>
In a typical viral infection, a virus invades a cell, inserting its genetic code into the host 
cell\'s DNA. The viral DNA then "hijacks" the cell, causing it to produce more copies of the virus 
until the host cell bursts and dies. However, occasionally the invading virus becomes disabled when 
something goes wrong (from the virus\' point of view) during the "DNA insertion" phase, leaving a 
chunk of "dead" viral DNA code that remains in the surviving cell.</p>
<p> 
Now, <b>if</b> the infected cell is a 
germ-line cell (a gamete), and <b>if</b> the gamete survives the viral infection because something 
happened to disable the virus, and <b>if</b> the gamete happens to be selected to become part of the 
"next generation", and then <b>if</b> the the viral "dead code" becomes fixed in the population, 
then the dead viral code will eventually be passed along to descendent species. Note: the 
probability of <b>each</b> event described above is quite small; the probability of the whole sequence 
of events required to fix dead viral DNA code in the population is <b>extremely</b> small.
</p>
<p>
Now here\'s where it gets interesting. There are many ERV\'s common to 
humans <b>and</b> chimpanzees. That is, identical ERV\'s can be found at exactly the same "insertion 
locations" in human and chimpanzee genomes. Now, when a virus infects a cell, the insertion 
location is largely random. That is, the probability of a particular virus inserting itself in the 
exact same place in a cell\'s genome multiple times is vanishingly small. Thus the probability of 
there being all those shared ERV\'s between humans and chimpanzees is vanishingly small <b>unless</b> 
humans and chimpanzees descended from a common ancestor. The pattern of shared endogenous 
retroviruses amongst humans, chimpanzees, gorillas and other primates is entirely consistent with 
the pattern of common descent predicted by evolution.
</p>
<p>Interestingly, ERVs make up <a href="http://www.nature.com/nature/journal/v409/n6822/full/409860a0.html" target="_blank">approximately 8% of our 
genome</a>, while functioning proteins (genes that actually express something, like the genes for eye color) are only made from about 
1.5% of our genome.
<img src="../images/humanGenome.jpg" alt="image courtesy of http://www.genomesize.com/gregorylab">
</p>
<p><u>How A Retrovirus Works</u></p>
<p>
Retroviruses, unlike some other viruses, are RNA-based. In addition to two single strands of RNA 
that constitute its genome, a retroviral particle also carries several copies of reverse 
transcriptase. After invading a host cell, the reverse transcriptase is used in a process called 
reverse transcription to decode its RNA into DNA, which it then inserts into the host cell\'s 
chromosome. With the newly created viral DNA in place, the host cell\'s RNA polymerase is used to 
make more virus RNA, a template for both the RNA new particles will carry into other cells and for 
mRNA, which produces the viral proteins. The new copies of viral RNA and proteins are collected 
together into a new virus particle, and set free to infect other cells.</p>
';
break;

case "red":
echo '
<p>A <u>Pseudogene</u> is a non-coding section of DNA whose sequence resembles that of a functional gene, 
in that it has sequences homologous (similar) with those of functional genes, such as promotors and 
introns/exons, but which lacks the signals which allow it to be expressed. In the past the 
definition of pseudogene has been ambigious, with questions such as whether genes which produce RNA, 
but which are not translated into polypeptides (enzymes and proteins) should be classified as 
pseudogenes, but there is now a widespread concensus that "pseudogene" means only those "genes" 
which are not transcribed at all.
</p>
<p>
Pseudogenes are "Junk DNA" and probably have no significant short term selective advantages or 
disadvantages. There are a number of ways pseudogenes could form:
<ul>
<li>Silencing of gene following loss of function of by mutation.</li>
<li>Silencing of gene following redundancy caused by changes in the environment in which the 
      population lives.</li>
<li>Silencing of one of two gene copies following a duplication of a section of DNA.
</li>
</ul>
<p>The major fact that led scientists to propose the junk DNA hypothesis was not one of the above 
reasons, but the simple observation that amount of DNA per cell in an organism can vary widely 
between closely-related organisms. An excellent example is where 
one species of deer has ~20% more DNA than another very similar species of deer in the same genus. 
Virtually all of this variation is in noncoding sequences, such as the noncoding repetitive elements 
that make up a large percentage of mammalian genomes.
</p>
<p>Either one species lost a lot of DNA with only 
trivial resulting change, or the other species gained a lot of DNA with only trivial resulting 
change. Either way this implies that this DNA is not very important. Even if the scattered 
scientific reports of functions found for bits and pieces of noncoding DNA were magnified a 
hundredfold, the direct observation of widely varying amounts of DNA between closely related 
organisms would still imply that most noncoding DNA is not very important.
</p>
';
break;

case "punk":
echo '
<p><u><img src="../images/Punctuatedequilibrium.png" alt="phyletic gradualism/punctuated equilibrium" title="phyletic gradualism/punctuated equilibrium" style="float:right;">

Punctuated equilibrium</u> (or punctuated equilibria) is a theory in evolutionary biology which states 
that most sexually reproducing species will show little to no evolutionary change throughout their 
history. When evolution occurs it happens sporadically (by splitting) and occurs relatively quickly 
compared to the species\' full duration on earth. Punctuated equilibrium is commonly contrasted 
against the theory of phyletic gradualism, which hypothesizes that most evolution occurs uniformly 
and by the steady gradual transformation of whole lineages (anagenesis). 
</p>

<p>
Punctuated equilibrium is 
the currently favored theory for the fluctuating patterns of evolution observed in the fossil record.
The theory does not in fact refute Darwin\'s gradualism, it just added the ideas of catastrophism and 
stasis.
';

break;

case "micro":
echo '
<p><u>Microevolution</u> is understood to be change in genotype or phenotype below the species level.
This is the evolution that most creationists accept, because there have been numerous examples of
natural selection acting on a population - either changing hair color, eye color, wing patterns,
sizes, etc.</p>
<p>
Problematic for creationists is how a species is properly defined. Most creationists would agree
that two different species cannot mate and produce offspring. However, there are many cases of 
hybrid animals that exist in nature. Such hybrids between species include:
<ul>
<li><a href="javascript:myOpen(\'http://en.wikipedia.org/wiki/Liger\')">Ligers / Tygons</a>
(a cross between a male/female lion and a female/male tiger, respectively)</li>
<li><a href="javascript:myOpen(\'http://en.wikipedia.org/wiki/Mule\')">Mules / Hinnys</a> 
(a cross between a male/female donkey and a female/male horse, respectively)</li>
<li><a href="javascript:myOpen(\'http://en.wikipedia.org/wiki/Zebroid\')">Zorse / Zebriod</a></li>
<li><a href="javascript:myOpen(\'http://en.wikipedia.org/wiki/Cama_%28animal%29\')">Cama</a> (camel and llama hybrid)</li>
<li><a href="javascript:myOpen(\'http://news.bbc.co.uk/1/hi/sci/tech/813466.stm\')">Sheep and Goat Hybrid</a> (this is actually a <i>cross <b>genus</b> hybrid</i>, a higher level than <i>cross <b>species</b> hybrids</i> like the rest listed)
<li><a href="javascript:myOpen(\'http://en.wikipedia.org/wiki/Chuman\')">Chuman / Humanzee</a></li>
</ul>
<p>
The Human / Chimp hybrid is only hypothetical. While only hypothetical, chimps and humans share the
same relationship as do the other animals listed which produce hybrids.
Horses have 64 chromosomes while donkeys only have 62, producing infertile offspring (mules) with 63.
With humans and chimps, on a chromosome by chromosome basis 
<a href="javascript:myOpen(\'http://www.indiana.edu/~ensiweb/lessons/chro.all.html\')">the chromosomes match up pretty well</a> 
but at some point in our evolution it looks like 2 of the ape chromosomes (probably to form our 
chromosome 2) <a href="javascript:myOpen(\'http://www.edwardtbabinski.us/articles/chimp_chromosome.html\')">fused</a>.
This fusion process is relatively common in nature and is called <a href="javascript:myOpen(\'http://en.wikipedia.org/wiki/Chromosomal_polymorphism\')">
chromosomal polymorphism</a>
</p> 
<img src="../images/biologicalClassification.png" style="float:right;">
<p>This would mean that, according to the creationist definition of "kind", humans and chimps would be
the same "kind" - or species - if such a hybrid was allowed to be born. I have heard that fertilization is possible,
but nothing referencable...

<p>The typical human protein has accumulated just one unique change since chimps and humans diverged from a common ancestor about 6 million years ago. To put this 
into perspective, the number of genetic differences between humans and chimps is approximately 10 times LESS than between the mouse and rat. And just think of how 
similar a mouse and a rat appear to be, such that some creationists probably are willing to guess that mice and rats arose from the same "kind" via 
"micro-evolution." Yet humans are 10 times nearer to chimps than rats are to mice, genetically speaking.

<p>
On the other hand, the number of genetic differences between a human and a chimp is about 10 times more than between any two humans. Genetic evidence demonstrates 
that lineages of chimps (currently Pan troglodytes) and humans (Homo sapiens) diverged so recently [i.e., so closely resemble one another] that chimps should be 
reclassified as Homo troglodytes (i.e., members of the same genus, which is eactly how other species are classified whose genomes resemble one another so closely). 
The move would make chimps full members of our genus Homo, along with Neandertals, and all other human-like fossil species.
</p>

';
break;

case "macro":
echo '
<p><u>Macroevolution</u> is generally understood to be the process of 
<a href="javascript:myOpen(\'http://www.evowiki.org/index.php/Speciation\')">speciation</a>, 
and in particular, <a href="javascript:myOpen(\'http://www.evowiki.org/index.php/Clade\')">cladogenesis</a>
—the bifurcating or branching pattern of evolution whereby an ancestral taxon diverges over time 
and apomorphies appear. The vast majority of speciation is <a href="javascript:myOpen(\'http://www.evowiki.org/index.php/Allopatric_speciation\')">
allopatric</a>, occurring in isolated populations peripheral to a main population (Mayr 1942, 
1982, Carroll 1988). Such events can take place at varying rates, from 
<a href="javascript:myOpen(\'http://www.evowiki.org/index.php/Bradytely\')">bradytelyic</a>, 
to <a href="javascript:myOpen(\'http://www.evowiki.org/index.php/Horotely\')">horotelyic</a>, 
and <a href="javascript:myOpen(\'http://www.evowiki.org/index.php/Tachytely\')">tachytelyic</a> (Simpson 1944).
</p>
<p>
Macroevolution is the part of evolution that creationists are not willing to accept. 
Creationists accept microevolution, which they define as evolution within "kinds" 
("kinds" meaning sometimes species, sometimes bigger taxa, sometimes... well, basically how little 
kids classify animals but is never actually agreed upon between creationists) but deny that a 
kind may evolve into another (macroevolution).
</p>
<p>
This argument is strongly opposed by scientists because microevolution and macroevolution 
are the same process in different scales and it is irrational to say that only one of them exists.
It\'s about as ridiculous as saying a person can walk one mile, but can\'t walk 10 miles. Creationists
have yet to offer a mechanism that prevents continuous microevolution from becoming macroevolution.
</p>
<p>
According to Douglas Futuyma, speciation and thus macroevolution was already observed by 
Dobzhansky and Pavlovyks (Dobzhansky, Pavlovyks, 1971, Nature 23, 1971, 289-292) in 
laboratory on the fly species Drosophila paulistorum. A strain which was isolated for 
several years in the laboratory could no longer interbreed with other strains of Drosophila 
paulistorum.
</p> 
<font size="1"><i>from <a href="http://www.evowiki.org">evowiki.org</a></font>
';
break;

case "vestigial":
echo '
<p><u>Vestigial Organs</u> are organs that are found in a species that have no function and/or look
like organs that the animal should not have. The best example is the human tailbone. All people are
born with tailbones - yet hidden in our genome is code for developing a full tail, and in some cases
those genes are "turned on" and <a href="javascript:myOpen(\'http://www.talkorigins.org/faqs/comdesc/section2.html#atavisms_ex2\')">newborn babies are born with full tails.</a>
</p>
<p>
Some other vestiges include:
<ul>
<li><a href="javascript:myOpen(\'http://www7.nationalgeographic.com/ngm/data/2001/11/01/html/ft_20011101.4.html\')">Whale\'s legs</a></li>
<li><a href="javascript:myOpen(\'http://www.abc.net.au/science/news/stories/s1567127.htm\')">Snake\'s legs</a></li>
<li><a href="javascript:myOpen(\'http://www.nzherald.co.nz/print.cfm?objectid=9004576\')">Decompression Sickness</a></li>
<li><a href="javascript:myOpen(\'http://education.guardian.co.uk/higher/research/story/0,,1716328,00.html\')">Bird\'s Teeth</a></li>
</ul>
';
break;

case "ring":
echo '
<p>A <u>Ring Species</u> is a connected series of neighboring populations that can interbreed with relatively closely related populations, but for which there exist at least two "end" populations in the series that are too distantly related to interbreed. This usually happens in species spanning a broad morphological continuum across a wide geographic range which members of a local population can interbreed with members of adjacent populations, but end members of the continuum cannot interbreed. Often such non-breeding-though-genetically-connected populations co-exist in the same region thus creating a "ring". Ring species provide important evidence of evolution in that they illustrate what happens over time as populations genetically diverge, and are special because they represent in living populations what normally happens over time between long deceased ancestor populations and living populations.
Ring species also present an interesting case of the species problem, for those who seek to divide the living world into discrete species. After all, all that distinguishes a ring species from two separate species is the existence of the connecting populations - if enough of the connecting populations within the ring perish to sever the breeding connection, the ring species becomes two distinct species. Nature itself isn\'t prone to neat black and white paradigms.
 
The image showing the Arctic Circle shows the Larus gulls interbreeding ring. Points 7 and 1 can interbreed, however points 6 and 3 cannot.
<img src="../images/bird.png" width="300" height="300"></img>
';
break;

default:
echo '<p>No info yet</p>';


}//END SWITCH

}

?>
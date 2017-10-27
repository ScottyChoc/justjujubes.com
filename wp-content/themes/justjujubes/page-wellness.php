<?php
/**
 * Template Name: Wellness
 *
 * @package Altitude
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/altitude/
 */



add_action( 'genesis_after_entry', 'jj_wellness_accordian' );
	function jj_wellness_accordian() { ?>
<h4>Click below to learn more</h4>
<ul id="accord1" class="accordian">
	<li>
		<header><h4>Vitamins and Minerals</h4></header>
		<section>
			<p>The importance of vitamins and minerals cannot be overstated, and the amount of Vitamins C and Potassium found in fresh Jujube fruit is particularly impressive, with 100g having 20x more Vitamin C than citrus fruit and as much potassium as a banana.</p>
		</section>
	</li>
	<li>
		<header><h4>Polyphenols</h4></header>
		<section>
			<p>Polyphenols are phytochemicals, meaning compounds found abundantly in natural plant food sources, that play an important role in maintaining your health and wellness.</p>
			<ul>
				<li>The antioxidant effect of polyphenols offers holistic support for the aging neurological system, possibly combatting the early onset of dementia-like symptoms.</li>
				<li>Polyphenols have been shown to reduce cardiovascular stress through the inhibition of LDL cholesterol, or “bad” cholesterol, oxidation. These compounds also increase the vasodilation of blood vessels to promote circulation.</li>
			</ul>
		</section>
	</li>
	<li>
		<header><h4>Flavonoids</h4></header>
		<section>
			<p>Flavonoids, a group of polyphenols, are important dietary compounds best known for their antioxidant and anti-inflammatory behaviors.</p>
			<ul>
				<li>Associated with cardiovascular disease prevention&#x2014; and believed to keep the blood vessels healthy by keeping blood sugar levels in check&#x2014; flavonoids further support normal blood pressure by inhibiting the physiological mechanisms that trigger hypertension.</li>
				<li>Known to aid in the detoxification of potentially tissue-damaging molecules, flavonoids are therefore associated with decreased risk of certain types of cancers, including lung and breast cancer.</li>
				<li>Flavonoids exhibit sedative and calming properties, which is the reason jujubes are used to treat anxiety and insomnia in traditional Chinese medicine.</li>
				<small>* It is important to note that the amount of flavonoids required to provide these health benefits is not certain and needs further study.</small>
			</ul>
		</section>
	</li>
	<li>
		<header><h4>Amino Acids</h4></header>
		<section>
			<p>Amino acids are the building blocks of protein, playing a vital role in almost all biological processes.</p>
			<ul>
				<li>A large portion of our cells, muscles and tissue is made up of amino acids, meaning they carry out many important bodily functions, such as giving cells their structure. They also play a key role in the transport and the storage of nutrients.</li>
				<li>Amino acids are also essential for healing wounds and repairing tissue, especially in the muscles, bones, skin, and hair.</li>
				<li>Jujubes are packed with 18 out of the 24 most important amino acids while oranges have 9o ut of the 24 and apples only 4 out of the 24.</li>
			</ul>
		</section>
	</li>
	<li>
	<header><h4>Polysaccharides</h4></header>
	<section>
		<p>Polysaccharides are complex, long-chain carbohydrates that provide very important dietary elements, noted for their energy-providing properties as well as the positive influence on the immune system function and the inhibitory effect against inflammation and tumor growth.</p>
		</section>
	</li>
	<li>
	<header><h4>Antioxidants</h4></header>
	<section>
		<p>Antioxidants are nutrients from food that protect the body against the damaging effect of free-radicals, the molecules that can damage cells. They are known to protect against inflammatory diseases, tumors and overall depression of the immune system. They play a role in prevention of heart disease, cancer and other diseases, such as asthma and Alzheimer’s.</p>
		</section>
	</li>
</ul>

<div class="disclaimer">
	<p>* These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
</div>


	<?php }

genesis();
# TP110316-HM

<h2>Architecure</h2>
<ul>
	<li>index.php</li>
	<li>inc
		<ul>
			<li>data
				<ul>
					<li>content.php</li>
					<li>header.php</li>
					<li>menu.php</li>
					<li>tab.php</li>
				</ul>
			</li>
			<li>content.php</li>
			<li>footer.php</li>
			<li>head.php</li>
			<li>header.php</li>
			<li>menu.php</li>
			<li>tab.php</li>
		</ul>
	</li>
	<li>func
		<ul>
			<li>app.php</li>
		</ul>
	</li>
	<li>Le reste ... on s'en fout !</li>
</ul>

<h2>Utilités</h2>
<p>Maintenant faut savoir bien l'utiliser, il est assez simple mais complet ( un peut trop d'ailleur )</p>
<h4>La navbar</h4>
<p>Pour modifier les donneés il faut aller dans <code>/inc/data/header.php</code><strong style="color:#C50;">NON PAS MENU.php </strong></p>
<ul>
	<li>Nom du site / logo : <code>logo</code></li>
	<li>Liste des pages
		<ul>
			<li><code>NOM DE LA PAGE</code>
				<ul>
					<li>Optionnels <strong>DANS UN ARRAY</strong></li>
					
					<li><code>link => LIEN</code> Pour définir un lien (<code>href=""</code>)</li>
					<li><code>class => nomClass</code> Comme son nom l'indique pour définir une <code>class=""</code> au lien</li>
					<li><code>id => nomId</code> Comme pour class c'est pour <code>id=""</code></li>
					<li>C'est tout pour les liens ( pas de <code>attr</code> comme on le verra plus bas )
				</ul>			
			</li>
		</ul>
	</li>
</ul>

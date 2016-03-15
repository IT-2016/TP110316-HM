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

<h4>Global</h4>
<p>Toutes les partis ont des options communes</p>
<ul>
	<li><code>class => nomClass</code> Comme son nom l'indique pour définir une <code>class=""</code> au lien</li>
	<li><code>id => nomId</code> Comme pour class c'est pour <code>id=""</code></li>
	<li><code>attr => array([..])</code>
		<ul>
			<li><code>nomAttribut => valeurAttribut</code> ( Autant que vous souhaitez séparé par une <code>,</code> )</li>
			<li>Exemple : <code>'style' => 'color:#C50;background-color:#292929;', 'data-toggle' => 'toggle'</code>
		</ul>
	</li>
</ul>

<h4>La navbar</h4>
<p>Pour modifier les donneés il faut aller dans <code>/inc/data/header.php</code> <strong style="color:#C50;">NON PAS MENU.php </strong></p>
<ul>
	<li>Nom du site / logo : <code>logo</code></li>
	<li>Liste des pages
		<ul>
			<li><code>NOM DE LA PAGE</code>
				<ul>
					<li>Optionnels <strong>DANS UN ARRAY</strong></li>
					
					<li><code>link => LIEN</code> Pour définir un lien (<code>href=""</code>)</li>
					<li>C'est tout pour les liens ( pas de <code>attr</code> )
				</ul>			
			</li>
		</ul>
	</li>
</ul>


<h4>Le contenu (jumbotron)</h4>
<p>Pour modifier les donneés il faut aller dans <code>/inc/data/content.php</code></p>
<ul>
	<li>BALISE HML
		<ul>
			<li>Optionnels <strong>DANS UN ARRAY</strong></li>
			<li><code>in</code>Contenu, <code>HTML/PHP/TEXT ...</code></li>
		</ul>
	</li>
</ul>

<h4>Sidebar</h4>
<p>Pour modifier les donneés il faut aller dans <code>/inc/data/menu.php</code> ( Va savoir pourquoi je l'ai nommé comme ça )</p>
<ul>
	<li> Texte a mettre <code> => [..]</code>
		<ul>
			<li>[..] <code>''</code> Aucune optionns ( mais obligatoire, j'avais pas bien penser le code au début )</li>
			<li>[..] <code>'active' => true</code> ( par défaut cest <code>false</code> pour rajouter la <code>class="active"</code> </li>
			<li>[..] <code>'badge' => NBR</code></li>
		</ul>
	</li>
</ul>


<h4>Sidebar</h4>
<p>Pour modifier les donneés il faut aller dans <code>/inc/data/tab.php</code> ( Maintenant ça va être chaud a expliquer et comprendre )</p>

<h5>TOP</h5>
<ul>
	<li>Optionnels :
		<ul>
			<li><code>heading</code> : Titre du tableau</li>
			<li><code>body</code> : Description du tableau</li>		
		</uL>
	</li>
</ul>
<h5>Table</h5>
<ul><li>.['table']</li>
	<li><code>inter => [..]</code>
		<ul>
			<li>[..] Optionnels</li>
			<li><code>thead / tbody</code>
				<ul>
					<li><code>in</code>
						<ul><li><code>tr => [..]</code>
								<ul>
									<li><code>content => [..]</code>
										<ul>
											<li><code>balise</code></li>
											<li><code>in</code></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>

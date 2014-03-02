<?php
	// Ouverture du flux RSS
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://rss.lefigaro.fr/lefigaro/laune");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$content = curl_exec($curl);

	// Chargement du flux RSS & des liens
	$xml = new simpleXMLElement($content);
	$links = array();

	foreach ($xml->channel->item as $item) {
		$links[] = $item->link;
	}

	// Choix au random
	$curl_link = curl_init();
	$link = $links[rand(0, count($links)-1)];

	// Récupération page
	curl_setopt($curl_link, CURLOPT_URL, $link);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_link, CURLOPT_FOLLOWLOCATION, TRUE); 
	$content = curl_exec($curl_link);
	$content .= "<span id='addr'>".$link."</span>";

	echo $content;
?>
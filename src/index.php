<html>
  <head>
      <meta charset="utf-8">
      <title>Le Figarolol</title>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  </head>

  <body>
   	<div id="content">
   		[Loading...]
   	</div>
   	<input type="button" value="Nouveau commentaire" id="refresh">

	<script>
	<!--
		function get_com() {
			$.ajax({
			  url: "get_page.php?id="+Math.random(),
			  beforeSend: function() {
				    $('#content').html("[Loading...]");
			  }
			})
			  .done(function( data ) {
			  	// On ne charge pas ça & on passe en HTML
			  	html = data.replace(/<img[^>]*>/g,"");
			  	html = html.replace(/<script[^>]*>/g,"");
			    html = $.parseHTML(html);

			    // Récupération des éléments
			    title = $(html).find('h1[itemprop="headline"]').text();
			    page = $(html).find('span#addr').text();
			    comments = $(html).find(".fig-comment");
			    the_comment = comments[Math.floor(Math.random()*(comments.length))];

			    if(!the_comment) {
			    	// Aïe on a pas de commentaire ici, on reload
					get_com();
			    } else {
				    name = $(the_comment).find(".fig-comment-header").text();
				    msg = $(the_comment).find(".fig-comment-msg").text();
 
				    $('#content').html('<h1>'+title+' [<a href="'+page+'">Lien</a>]</h1>'+'<p>'+name+' : '+msg+'</p>');
				} 
			  })
			  .fail(function(jqXHR, textStatus) {
			    $('#content').html("Erreur lors du chargement de la page : "+textStatus);
			  });
		}

		$(document).ready(function() {
			get_com();
			$("#refresh").click(function() {
				get_com();
				return false;
			})
		});

	-->
	</script>
  </body>
</html>
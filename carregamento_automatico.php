<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>Entendo a estrutura e semântica do HTML5</title>
</head>

<body>

	<div id="posts"> </div>
	<h1 id="carregando">Carregando</h1>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
		var pagina = 1;

		function loadPost() {
			$("#carregando").show();
			$.ajax({
				url : "post.php?pag=" + pagina,
				dataType : "json"

			}).done(function(data){
				$("#carregando").hide();

				var divposts = $("#posts");

				$.each(data, function(key, val){
					divposts.append("<div>" + val.titulo + "</div>");
				});
				pagina++;
			});
		}
		$(function(){
			$("#carregando").hide();
			loadPost();
			$(window).scroll(function(){
				if($(window).scrollTop() == $(document).height() - $(window).height()){
					loadPost();
				}
			});
		});
	</script>

	</body>
	</html>
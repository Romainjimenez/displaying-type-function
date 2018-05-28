<?php
  $TextTitle = "Titre de niveau";
  $TextParagraph = "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.";

echo '<div class="col-md-12">';
echo '<h1>'.$TextTitle." 1".'<h1>';
echo '<h2>'.$TextTitle." 2".'<h2>';
echo '<h3>'.$TextTitle." 3".'<h3>';
echo '<h4>'.$TextTitle." 4".'<h4>';
echo '<h5>'.$TextTitle." 5".'<h5>';
echo '<h6>'.$TextTitle." 6".'<h6>';
echo '</div>';

echo '<div class="col-md-4">';
echo '<p>'.$TextParagraph.'</p>';
echo '</div>';

echo '<div class="col-md-8">';
echo '<p>'.$TextParagraph.'</p>';
echo '</div>';

?>

<?php 
include_once 'connexion.php';
$page = 'Home';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once "./controllers/products.php";
?>

<script>
home();
// $(document).ready(function()
// {
//     $('#add').click(function()
//     {
//         var id = $('#id').val();
//         var idUser = $('#user').val();
//         var qte = $('#qte').val();

//         $.ajax({
//             url: './controllers/addtocart.php',
//             type: 'POST',
//             data: { id:id, user:idUser, qte:qte },
//             success: function(data)
//             {
//                 alert('Article added to cart!');
//             }
//         })
//     });
// });
</script>

<div align='center'>
    <h3 class="uk-text-success">SHOPPING BECOMES EASIER IN MY SHOP </h3>
    <ul class="uk-pagination uk-flex-center" uk-margin>
            <li><a id="homelastp" href="index.php?page=<?= $pageCourante - 1 ?>"><span uk-pagination-previous></span> Last Page</a></li>
            <li><a id="homenextp" href="index.php?page=<?= $pageCourante + 1 ?>">Next Page<span uk-pagination-next></span> </a></li>
    </ul>
    <div class="uk-child-width-expand@s uk-width-1-2@s uk-text-center" uk-grid>
        <div>
            <a  class="tri" href="index.php?page=<?= $pageCourante ?>&order=price&by=DESC"></a>
        </div>
        <div>
            <a class="tri" href="index.php?page=<?= $pageCourante ?>&order=price&by=ASC"></a>
        </div>
    </div>
   
    <div align='left' id="divis" class="uk-grid-match uk-width-6-7 uk-child-width-1-2@s uk-child-width-1-3@l uk-text-center" uk-grid>
        <?php if($checker>0){ while($a=$article->fetch()){ ?>
            <div>
                <div class="container p-3 my-3 bg-dark text-white">
                    <div class="uk-card-media-top uk-cover-container">
                        <img src="<?=$a['image']?>" width="200px" height="100px" alt="<?=$a['name']?>">
                    </div>
                    <div class="uk-card-body">
                        <h5 class="uk-text-danger"><?=$a['name'] ?></h5>
                        <small id="ar<?=$a['sku'] ?>"></small>
                    </div>
                    <div class="uk-card-footer">
                    <a class="uk-button uk-button-primary" href="article.php?id=<?=$a['sku']?>" uk-toggle><small>Add to my cart</small></a>    
                    <br> <?=$a['price'] ?>$
                    </div>
                </div>
            </div>
        <?php  }} ?>
    </div>
</div>

<script src="./assets/js/scripts.js"></script>

<?php include_once './elements/footer.php';?>

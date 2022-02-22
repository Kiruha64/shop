<?php
///**
// * @var \App\View\AppView $this
// * @var \App\Model\Entity\Product $product
// */
//?>



<!--<div class="form-group typecategories-select">-->
<!--    --><?// echo $this->Form->control('typecategory_id', ['options' => $typecategories,'empty' => 'Choose','required','id'=>'category_id','class'=>'form-control form-group']); ?>
<!--</div>-->
<option selected value="1">Choose</option>
<?php foreach ($typecategories as $typecat): ?>
    <option value="<?= $typecat->id ?>">
        <?= $typecat->name ?>
    </option>
<?endforeach;?>

<!--//$query = "SELECT * FROM `typecategories`";-->
<!--//$res = mysql_query($query);-->
<!--//echo '<script>-->
<!--//        var regions=[';-->
<!--//while($row = mysql_fetch_array($res))-->
<!--//{-->
<!--//    echo '{"region_name": "'.$row['region_name'].'",';-->
<!--//    echo '"region_code": "'.$row['region_code'].'",';-->
<!--//    echo '"value": "'.$row['value'].'"},';-->
<!--//}-->
<!--//echo '</script>';-->
<!--?>-->
<!---->
<!--<script>-->
<!---->
<!--    //$(document).ready(function (){-->
<!--    //    $('#category_id').change(function(){-->
<!--    //        var category_id = $(this).val();-->
<!--    //        console.log(category_id);-->
<!--    //        $('.typecategories-select').fadeIn('slow');-->
<!--    //        $.ajax({-->
<!--    //            type: "get",-->
<!--    //            url: "--><?////= $this->Url->build(["controller"=>"Products","action"=>"search",'plugin'=>'admin']); ?>
<!--//    //            data: {category_id:category_id},-->
<!--//    //            success: function(data){-->
<!--//    //                console.log('AjaX Success')-->
<!--//    //                // console.log(data)-->
<!--//    //            },-->
<!--//    //            error: function(){alert('AjaX Failed')}-->
<!--//    //        });-->
<!--//    //    });-->
<!--//    //})-->
<!--//-->
<!--//</script>-->



<div class="span780-heading"></div>
<div class="span780-content">

    <div class="showhall-box-blank" id="rbox-aboutUs">
        
        <div class="showhall-box-blank" id="rbox-hotPrd">
            <div class="title">
                <h4 class="titleH">{spchinh}  </h4>
            </div>
            <div class="content">
                <ul class="ui-nav-hor">
                    <?php
                        if(!empty($arr_product)){ // kiem tra xem co san pham nao hay ko ?
                        foreach($arr_product as $product){
                         $congty_id=$product['congty_id'];
                    ?>
                    <li>
                        <div class="thumbnails180135">
                            <div class="md-hnvalign">
                                <div class="md-hnvalign-mid">
                                    <div class="md-hnvalign-mid-inner">
                                        <a   href="ctsp/<?php echo $product['product_alias'].'-'.$product['product_id'].'/'.'-'.$congty_id.'.html'; ?>"   title="<?php echo $product['product_name_'.$lang]; ?>">
                                            <img style="height: 170px;max-width: 170px;" src="../<?php echo $product['url_images']; ?>" alt="<?php echo $product['product_name_'.$lang]; ?>" title="<?php echo $product['product_name_'.$lang]; ?>" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="thumbnails2lines">
                            <a   href="ttnet/gotoprd/AP435/999/0/051303030383530303.htm"   title="Round Acrylic Stone With 1 Hole">
                                Round Acrylic Stone With 1 Hole
                            </a>
                        </div>-->
                        <div class="thumbnailsHot">
                            <p>
                                <a   href="ctsp/<?php echo $product['product_alias'].'-'.$product['product_id'].'/'.'-'.$congty_id.'.html'; ?>"   title="<?php echo $product['product_name_'.$lang]; ?>">
                                    <?php echo $product['product_name_'.$lang]; ?>
                                </a>
                            </p> 
                            <p class="ProTitle"><b>{gia}:</b>
                                <a style="width: 120px;" href="lien-he/<?php echo $row_cty['ten_khong_dau'].'-'.$row_cty['congty_id'].'.html'; ?>"><?php if($product['price']==0){echo "{lienhe}";}else {echo number_format($product['price']);} ?></a>
                            </p>
                        </div>
                    </li>
                        <?php } } ?>
                </ul>
                <?php if($soluong > 8){ ?>
                    <div class="more">
                        <a href="san-pham/<?php echo $row_cty['ten_khong_dau'].'-'.$row_cty['congty_id'].'.html'; ?>">{xemtatca}</a>
                    </div>
                <?php } ?>
            </div>

        </div>
        
        
    </div>


</div>
<div class="span780-footer"></div>
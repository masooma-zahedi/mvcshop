<section id="main-content">
    <?php
    var_dump($showInfo);
    ?>
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=setting&a=edit&id=<?php echo $showInfo['id']?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Site</label>
                    <input type="text" name="frm[titleSite]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['titleSite'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description Site</label>
                    <input type="text" name="frm[descriptionSite]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['descriptionSite'] ?>" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image Hero</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1" >
                    <img src="<?php echo ".". $showInfo['hero_img'] ?>" alt="<?php echo $showInfo['titleSite'] ?>" style="width: 100px; height:100px">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="frm[email]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" name="frm[phone]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['phone'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="frm[address]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['address'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" name="frm[facebook]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['facebook'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" name="frm[twitter]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['twitter'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Youtube</label>
                    <input type="text" name="frm[youtube]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['youtube'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" name="frm[instagram]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['instagram'] ?>">
                </div>
                <button type="submit" name="btn" class="btn btn-info">Update</button>
            </form>

        </div>
    </section>
</section>
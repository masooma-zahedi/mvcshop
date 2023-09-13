<?php 
var_dump($showInfo);
?>
<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=bestOffer&a=edit&id=<?php echo $showInfo['id']?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['title'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ofer Before</label>
                    <input type="text" name="frm[offerBefore]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['offerBefore'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ofer After</label>
                    <input type="text" name="frm[offerAfter]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['offerAfter'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1" >
                    <img src="<?php echo ".".$showInfo['img'] ?>" style="width:100px;height:100px" alt="<?php echo $showInfo['title'] ?>" >
                </div>
                <button type="submit" name="btn" class="btn btn-info">Edit</button>
            </form>

        </div>
    </section>
</section>
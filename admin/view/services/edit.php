<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=services&a=edit&id=<?php echo $showInfo['id'] ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Menu</label>
                    <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['title'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="frm[description]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['description'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="frm[img]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['img'] ?>" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input type="text" name="frm[link]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['link'] ?>">
                </div>
                <button type="submit" name="btn" class="btn btn-info">Edit</button>
            </form>
                           
        </div>
    </section>
</section>
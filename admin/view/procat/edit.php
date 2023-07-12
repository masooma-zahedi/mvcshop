<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=procat&a=edit&id=<?php echo $showInfo['id'] ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Menu</label>
                    <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" value="<?php echo $showInfo['title'] ?>">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Status Menu</label>
                    <select class="form-control m-bot15" name="frm[chid]">
                        <option value="0">main menu</option>
                        <?php foreach($promaincat as $val): ?>
                            <option value="<?php echo $val['id'] ?>"><?php echo $val['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" name="btn" class="btn btn-info">Edit</button>
            </form>
                           
        </div>
    </section>
</section>
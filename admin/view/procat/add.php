<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=procat&a=add">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Menu</label>
                    <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
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
                <button type="submit" name="btn" class="btn btn-info">Add</button>
            </form>

        </div>
    </section>
</section>
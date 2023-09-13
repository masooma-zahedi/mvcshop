<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=heroSlider&a=add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="frm[description]" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1" >
                </div>
                <button type="submit" name="btn" class="btn btn-info">Add</button>
            </form>

        </div>
    </section>
</section>
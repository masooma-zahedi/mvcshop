<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=employee&a=add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="frm[name]" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" name="frm[facebook]" class="form-control" id="exampleInputEmail1" placeholder="Enter Facebook">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instagram</label>
                    <input type="text" name="frm[instagram]" class="form-control" id="exampleInputEmail1" placeholder="Enter Instagram">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Twitter</label>
                    <input type="text" name="frm[twitter]" class="form-control" id="exampleInputEmail1" placeholder="Enter Twitter">
                </div>
                <button type="submit" name="btn" class="btn btn-info">Add</button>
            </form>

        </div>
    </section>
</section>
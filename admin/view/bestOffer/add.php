<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=bestOffer&a=add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Offer Before</label>
                    <input type="text" name="frm[offerBefore]" class="form-control" id="exampleInputEmail1" placeholder="Enter OferBefore">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Offer After</label>
                    <input type="text" name="frm[offerAfter]" class="form-control" id="exampleInputEmail1" placeholder="Enter OferAfter">
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
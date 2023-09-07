<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=about&a=add" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Subject header</label>
                    <input type="text" name="frm[headersubject]" class="form-control" id="exampleInputEmail1" placeholder="Enter subject">
                </div>
                <div class="mb-3 border border-primary p-2">
                    <label for="exampleInputEmail1" class="form-label">Content About </label>
                    <textarea name="frm[contentabout]" id="editor1" ></textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <div class="mb-3 border border-primary p-2">
                    <label for="exampleInputEmail1" class="form-label">Content Feature </label>
                    <textarea name="frm[contentfeature]" id="editor2"></textarea>
                    <script>
                        CKEDITOR.replace('editor2');
                    </script>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1">
                </div>
                <button type="submit" name="btn" class="btn btn-info">Add</button>
            </form>
        </div>
    </section>
</section>
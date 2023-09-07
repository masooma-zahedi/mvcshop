<section id="main-content">
    <section class="wrapper pt-5">
        <div class="panel-body container" dir="ltr">
            <form role="form" method="post" action="index.php?c=video&a=edit" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Iframe</label>
                    <input type="file" name="iframe"  class="form-control" id="exampleInputEmail1" placeholder="Enter Iframe src">
                </div>
                <div class="mb-3 border border-primary p-2">
                    <label for="exampleInputEmail1" class="form-label">Description Design </label>
                    <textarea name="frm[description]"  id="editor1" ></textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <button type="submit" name="btn" class="btn btn-info">Upload</button>
            </form>
        </div>
    </section>
</section>
<section id="main-content">
    <section class="wrapper pt-5">
        <!-- <h1>hiii</h1> -->
        <table class="table table-striped table-advance table-hover">
            <thead class=" mt-5">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>add</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($procat as $value) : ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><a href="index.php?c=procat&a=add" class="btn btn-primary btn-xs">Add</a></td>
                            <td><button class="btn btn-warning btn-xs"><i class="icon-pencil"></i></button></td>
                            <td><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></td>
                        </tr>

                    <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</section>
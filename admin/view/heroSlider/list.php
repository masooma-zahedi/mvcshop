<section id="main-content">
    <section class="wrapper pt-5">
        <!-- <h1>hiii</h1> -->
        <table class="table table-striped table-advance table-hover">
            <thead class=" mt-5">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>img</th>
                    <!-- <th>edit</th> -->
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($clientlist as $value) : ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td><img src=<?php echo ".".$value['img'] ?> alt=<?php echo $value['img'] ?> width="50px" class="rounded "></td>
                            <!-- <td><a href="index.php?c=heroSlider&a=edit&id=<?php //echo $value['id'] ?>" class="btn btn-warning btn-xs"><i class="icon-pencil"></i></a></td> -->
                            <td><a href="index.php?c=heroSlider&a=delete&id=<?php echo $value['id'] ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>

                    <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</section>
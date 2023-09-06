<section id="main-content">
    <section class="wrapper pt-5">
        <!-- <h1>hiii</h1> -->
        <table class="table table-striped table-advance table-hover">
            <thead class=" mt-5">
                <tr>
                    <th>name</th>
                    <th>title</th>
                    <th>img</th>
                    <th>facebook</th>
                    <th>instagram</th>
                    <th>twitter</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($employee as $value) : ?>
                        <tr>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><img src=<?php echo ".".$value['img'] ?> alt=<?php echo $value['title'] ?> width="50px" class="rounded "></td>
                            <td><?php echo $value['facebook'] ?></td>
                            <td><?php echo $value['instagram'] ?></td>
                            <td><?php echo $value['twitter'] ?></td>
                            <td><a href="index.php?c=employee&a=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning btn-xs"><i class="icon-pencil"></i></a></td>
                            <td><a href="index.php?c=employee&a=delete&id=<?php echo $value['id'] ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</section>
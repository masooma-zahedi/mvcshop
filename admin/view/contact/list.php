<section id="main-content">
    <section class="wrapper pt-5">
        <!-- <h1>hiii</h1> -->
        <table class="table table-striped table-advance table-hover">
            <thead class=" mt-5">
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>title</th>
                    <th>message</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($contactlist as $value) : ?>
                        <tr>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['massage'] ?></td>
                            <td><a href="index.php?c=contact&a=delete&id=<?php echo $value['id'] ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>

                    <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</section>
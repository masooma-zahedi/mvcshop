<section id="main-content">
    <section class="wrapper pt-5">
        <!-- <h1>hiii</h1> -->
        <table class="table table-striped table-advance table-hover">
            <thead class=" mt-5">
                <tr>
                    <th>id</th>
                    <th>titleSite</th>
                    <th>descriptionSite</th>
                    <th>hero_img</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>facebook</th>
                    <th>twitter</th>
                    <th>youtube</th>
                    <th>instagram</th>
                    <th>update</th>
                    <!-- <th>delete</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($setting as $value) : ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['titleSite'] ?></td>
                            <td><?php echo $value['descriptionSite'] ?></td>
                            <td><img src=<?php echo ".".$value['hero_img'] ?> alt=<?php echo $value['titleSite'] ?> width="50px" class="rounded "></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['phone'] ?></td>
                            <td><?php echo $value['address'] ?></td>
                            <td><?php echo $value['facebook'] ?></td>
                            <td><?php echo $value['twitter'] ?></td>
                            <td><?php echo $value['youtube'] ?></td>
                            <td><?php echo $value['instagram'] ?></td>
                            <td><a href="index.php?c=setting&a=edit&id=<?php echo $value['id'] ?>" class="btn btn-warning btn-xs"><i class="icon-pencil"></i></a></td>
                            <!-- <td><a href="index.php?c=setting&a=delete&id=<?php echo $value['id'] ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td> -->
                        </tr>

                    <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</section>
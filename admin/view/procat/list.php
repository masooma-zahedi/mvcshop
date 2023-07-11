<section id="main-content">
    <section class="wrapper pt-5">
        <!-- <h1>hiii</h1> -->
        <table class="table table-striped table-advance table-hover">
            <thead class=" mt-5">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>status</th>
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
                            <td><?php
                                    if($value['chid']== "0"){
                                        echo "main menu";
                                    }else{
                                        $chid = $value['chid'];
                                        foreach($procat as $item){
                                            if($item['id'] == $chid){
                                                echo $item['title'];
                                            }
                                        }
                                    }
                                ?>
                            </td>
                            <td><button class="btn btn-warning btn-xs"><i class="icon-pencil"></i></button></td>
                            <td><a href="index.php?c=procat&a=delete&id=<?php echo $value['id'] ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                        </tr>

                    <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</section>
<?php ob_start() ?>

<h2>Master classes List</h2>
<div class="container" style="min-height: 400px;">
    <div style="margin: 20px;">
        <a class="btn btn-primary" href="masterclassesAdd" role="button">Добавить новость</a>
    </div>
    <div class="col-md-11">
        <table class="table table-bordered table-responsive">
            <tr>
                <th width="10%">ID</th>
                <th width="70%">Header List</th>
                <th width="20%"></th>
            </tr>

            <?php
                foreach($arr as $row) {
                    echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td><b>Title: </b>'.$row['title'].'<br>';
                            echo '<b>Category: </b><i>'.$row['category_id'].'</i><br>';
                            echo '<b>Author: </b><i>'.$row['user_id'].'</i>';
                        echo '</td>';
                        echo '<td>'.$row['price'].'</td>';
                        echo '<td>'.$row['format'].'</td>';
                        echo '<td>'.$row['date'].'</td>';
                        echo '<td>
                                <a href="masterclassesEdit?id='.$row['id'].'">Edit<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                <a href="masterclassesDel?id='.$row['id'].'">Delete<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                            </td>';              
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</div>

<?php
    $content = ob_get_clean();
    include "viewAdmin/templates/layout.php";
?>
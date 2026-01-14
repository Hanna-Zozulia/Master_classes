<?php ob_start() ?>

<div class="conteiner" style="min-height: 400px;">
    <div class="col-md-11">

    <h2>Master classes add</h2>

    <?php
        if(isset($test)) {
            if($test==true) {
    ?>

    <div class="alert alert-info">
        <strong>Запись добавлена.</strong> <a href="masterclassesAdmin">Список новостей</a>
    </div>

    <?php
        } elseif ($test==false) {
    ?>

    <div class="alert alert-warning">
        <strong>Ошибка добавления записи!</strong> <a href="masterclassesAdmin">Список новостей</a>
    </div>

    <?php
            }
        } else {
    ?>

    <form action="masterclassesAddResult" method="POST" enctype="multipart/form-data">
        <table class="table table-bordered">
            <tr>
                <td>Master class title</td>
                <td><input type="text" name="title" class="form-control" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="text" rows="5" class="form-control" required></textarea> </td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <select name="idCategory" class="form-control" required>
                        <option value="">Select the category</option>
                        <?php
                        foreach($arr as $row) {
                            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Format</td>
                <td>
                    <select name="format" required>
                        <option value="">Select the format</option>
                        <option value="online" >Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Picture</td>
                <td><div>
                    <input type="file" name="picture" style="color:black;">
                </div></td>
            </tr>
            <tr>
                <tr>
                <td>Price</td>
                <td><input type="price" name="price" class="form-control" required> </td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="datetime-local" name="date" class="form-control" required> </td>
            </tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="save">
                        <span class="glyphicon glyphicon-plus"></span> Сохранить
                    </button>
                    <a href="newsAdmin" class="btn btn-large btn-success">
                        <i class="glyphicon glyphicon-backward"></i> &nbsp; Назад к списку
                    </a>
                </td>
            </tr>
            
        </table>
    </form>
            

    <?php
        }
    ?>
    </div>
</div>

<?php
    $content = ob_get_clean();
    include "viewAdmin/templates/layout.php";
?>
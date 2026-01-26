<?php ob_start() ?>

<div class="conteiner" style="min-height: 400px;">
    <div class="col-md-11">

    <h2>Master classes delete</h2>

    <?php
        if(isset($test)) {
            if($test==true) {
    ?>

    <div class="alert alert-info">
        <strong>Record deleted.</strong> <a href="masterclassesAdmin">List of master classes</a>
    </div>

    <?php
        } elseif ($test==false) {
    ?>

    <div class="alert alert-warning">
        <strong>Error deleting record!</strong> <a href="masterclassesAdmin">List of master classes</a>
    </div>

    <?php
            }
        } else {
    ?>

    <form action="masterclassesDeleteResult?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <table class="table table-bordered">
            <tr>
                <td>Master classes title</td>
                <td><input type="text" name="title" class="form-control" required value="<?php echo $detail['title']; ?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="text" rows="5" class="form-control" required><?php echo $detail['text']; ?></textarea> </td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <select name="idCategory" class="form-control">
                        <?php
                        foreach($arr as $row) {
                            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                            if($row['id'] == $detail['category_id']) echo 'selected';
                            echo '>'.$row['name'].'</option>';
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
                        <option value="online" <?= $detail['format'] === 'online' ? 'selected' : '' ?>>
                            Online
                        </option>
                        <option value="offline" <?= $detail['format'] === 'offline' ? 'selected' : '' ?>>
                            Offline
                        </option>
                    </select>
                </td>
            </tr>
            <td>Old Picture</td>
            <td><div>
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($detail['picture']) . '" width="150">';?>
            </div></td>
            <tr>
                <td>Picture</td>
                <td><div>
                    <input type=file name="picture" style="color:black;">
                </div></td>
            </tr>
            <tr>
            <tr>
                <tr>
                <td>Price</td>
                <td><input type="price" name="price" class="form-control" required value="<?php echo $detail['price']; ?>"> </td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="datetime-local" name="date" class="form-control" required required value="<?php echo $detail['date']; ?>"> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="save">
                        <span class="glyphicon glyphicon-plus"></span> Delete
                    </button>
                    <a href="masterclassesAdmin" class="btn btn-large btn-success">
                        <i class="glyphicon glyphicon-backward"></i> &nbsp; Back to list
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
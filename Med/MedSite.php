<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Врач</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h4 class="">Введите врача</h4>
<?php if(!isset($_GET['id']))
    echo
    "<form action='addPsix.php' method='post'>
        <div class='form-group'>
            <label for='exampleInputEmail1'>Name</label>
            <input type='text' name='name' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter name'>
            <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
        </div>
        <div class='form-group'>
            <label for='exampleInputTel'>Phone</label>
            <input type='tel' name='phone' class='form-control' id='exampleInputTel' aria-describedby='emailHelp' placeholder='Enter phone'>
            <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
        </div>
         <div class='form-group'>
            <label for='exampleInputTel'>date_born</label>
            <input type='date' name='date_born' class='form-control' id='exampleInputTel' aria-describedby='emailHelp' placeholder='Enter date_born'>
            <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
        </div>
        <button type='submit' class='btn btn-primary'>Send</button>
    </form>";
else {
    $res=$db->getPsixById($_GET['id']);
    echo "<form action='UpdatePsix.php' method='post'>
        <input type='hidden' name='id' value='".$_GET['id']."'> 
        <div class='form-group'>
            <label for='exampleInputEmail1'>Name</label>
            <input type='text' name='name' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter name' value='".$res["name"]."'>
            <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
        </div>
        <div class='form-group'>
            <label for='exampleInputTel'>Phone</label>
            <input type='tel' name='phone' class='form-control' id='exampleInputTel' aria-describedby='emailHelp' placeholder='Enter phone' value='".$res["phone"]."'>
            <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
        </div>
         <div class='form-group'>
            <label for='exampleInputTel'>date_born</label>
            <input type='date' name='date_born' class='form-control' id='exampleInputTel' aria-describedby='emailHelp' placeholder='Enter date_born' value='".$res["date_born"]."'>
            <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
        </div>
        <button type='submit' class='btn btn-primary'>Send</button>
    </form>";
}
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ФИО</th>
        <th scope="col">ТЕЛЕФОН</th>
        <th scope="col">ДАТА РОЖДЕНИЯ</th>
        <th scope="col">ДИАГНОЗ</th>
        <th scope="col">РЕДАКТИРОВАТЬ</th>
        <th scope="col">УДАЛИТЬ</th>
    </tr>
    <tbody>
    <?php
    $res=$db->getPsix();
    foreach ($res as $r)
    {
        echo "<tr>
                        <td>".$r["name"]."</td>
                        <td>".$r["phone"]."</td>
                        <td>".$r["date_born"]."</td>
                        <td>
                        <select>";
                            $result=$db->getDiagnozAll();
                            foreach ($result as $b)
                            {
                                echo "<option value='".$b['id_diagnoz']."'>".$b['name']."</option>";
                            }
                        echo "</select>
                        </td>
                        <td>".$r["date_born"]."</td>
                        <td><a href='MedSite.php?id=".$r["id_human"]."'>Редактировать</a></td>
                        <td><a href='delPsix.php?id=".$r["id_human"]."'>Удалить</a></td>
                      </tr>";
    }
    ?>
    </tbody>
    </thead>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

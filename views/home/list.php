<?php
use app\models\Movie;
/** @var Movie[] $movies */
?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Название фильма
            </th>
            <th width="10%">

            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movies as $movie): ?>
            <tr>
                <td scope="row"><?php echo $movie->id; ?></td>
                <td scope="row"><?php echo $movie->name; ?></td>
                <td scope="row">
                    <a
                        onclick="return confirm('Вы уверены что хотите удалить фильм?')"
                        href="/home/delete/<?php echo $movie->id; ?>">
                        Удалить
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form action="/home/add" method="get">
    <label for="name">Название фильма:</label>
    <input type="text" name="name" id="name" />
    <button type="submit">Добавить фильм</button>
</form>
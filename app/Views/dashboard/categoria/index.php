<?= $this->extend("Layouts/dashboard") ?>
<?= $this->section("header") ?>
  Listado de categorias
<?= $this->endsection() ?>
<?= $this->section("contenido") ?>
<a href="/dashboard/categoria/new">Crear</a>
    <table>

        <tr>
            <th>
                Id
            </th>
            <th>
                Título
            </th>
           
            <th>
                Opciones
            </th>
        </tr>
        <?php foreach ($categorias as $key => $c) : ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['titulo'] ?></td>
                
                <td>
                    <a href="/dashboard/categoria/show/<?= $c['id'] ?>">Show</a>
                    <a href="/dashboard/categoria/edit/<?= $c['id'] ?>">Edit</a>

                    <form action="/dashboard/categoria/delete/<?= $c['id'] ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        <?php endforeach ?>

    </table>

<?= $this->endsection() ?>

<label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" value="<?= $pelicula['titulo'] ?>" placeholder="titulo">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion"  placeholder="su descripcion"> <?= $pelicula['descripcion'] ?></textarea>
        <button type="submit"><?= $op ?></button>
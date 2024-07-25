<?= $this->extend("Layouts/dashboard") ?>
<?= $this->section("contenido") ?>
<form action="/dashboard/categoria/create " method="post">
    <?=  view('dashboard/categoria/_form',['op'=>'crear'])?>
</form>

<?= $this->endsection() ?>



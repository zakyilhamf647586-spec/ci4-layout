<?= $this->include('layout/head') ?>

<div id="wrapper">

    <?= $this->include('layout/sidebar') ?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <?= $this->include('layout/header') ?>

            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>

        </div>

        <?= $this->include('layout/footer') ?>

    </div>

</div>

<!-- 🔥 SCRIPT WAJIB DI SINI -->
<?= $this->include('layout/script') ?>

</body>
</html>
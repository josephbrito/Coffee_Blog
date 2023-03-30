<?php include_once("./templates/header.php") ?>
    <main class="main">
        <div class="title_container">
            <h1>Coffee</h1>
            <span>room</span>
        </div>
        <div class="data_container">
        <?php foreach($datas as $data):  ?>
            <div class="data_content">
                <img src="<?= $BASE_URL ?>img/<?=$data['img']?>" alt="<?= $data['title'] ?>" />
                <h2 class="data_title">
                    <a href="<?=$BASE_URL?>post.php?id=<?=$data['id']?>"><?= $data['title'] ?></a>
                </h2>
                <p class="data_desc">
                    <?= $data['description'] ?>
                </p>
                <div class="data_tags_container">
                    <?php foreach($data['tags'] as $tag): ?>
                       <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </main>
<?php include_once("./templates/footer.php") ?>
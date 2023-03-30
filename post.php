<?php include_once("./templates/header.php"); 
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($datas as $data){
            if($data['id'] == $postId){
                $currentPost = $data;
            }
        }
    }  
?>
<main class="main">
    <div class="title_container">
    <h1><?= $currentPost['title'] ?></h1></div>
    <div class="post_container">
        <div class="post_content">
            <img src="<?= $BASE_URL ?>img/<?= $currentPost['img']?>" />
            <p><?= $currentPost['description'] ?></p>
        </div>
        <div class="post_details">
            <div class="post_details_title">
                <h2>Tags</h2>
            </div>
                <ul class="post_details_tag_list">
                    <?php foreach($currentPost['tags'] as $tags): ?>
                        <li><?= $tags ?></li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</main>
<?php include_once("./templates/footer.php"); ?>
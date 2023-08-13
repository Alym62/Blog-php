<?php

include_once("./templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="./img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur saepe tenetur voluptate ipsam culpa? Illo, maxime. Esse quod, ea, enim error sint quas amet odio, ab dignissimos ut deleniti id?
            Laboriosam odit quam tenetur? Recusandae deserunt sapiente vero culpa assumenda error. Quia dolor temporibus non autem hic! Repudiandae magni necessitatibus nobis suscipit expedita, in illo inventore laudantium amet quis at.
            Et asperiores molestiae illum excepturi totam dolorum alias veritatis dignissimos id voluptatum sit maxime optio quam, quisquam blanditiis magni eligendi numquam possimus accusantium. Minus accusantium exercitationem quibusdam, assumenda itaque quae.
            Accusamus facere reiciendis vitae eius laudantium nostrum itaque totam atque iure sed labore, deserunt minima officiis perspiciatis perferendis maxime voluptate quidem corrupti ipsa officia necessitatibus. Aliquid repudiandae odio a facilis.
            Amet laudantium nesciunt maxime a, dolores nobis deserunt aperiam harum quia? Ducimus a perspiciatis ipsum reprehenderit, reiciendis tempore quos quidem non asperiores, adipisci aliquid praesentium sed modi voluptatem voluptate voluptas!
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias:</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php

include_once("./templates/footer.php");

?>
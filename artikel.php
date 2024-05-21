<?php
include 'koneksi.php';

$sql = "SELECT * FROM artikel ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
    <title>⋆ ̊ ⋆୨♡୧⋆ ̊ ⋆ Felic's Blog ⋆ ̊ ⋆୨♡୧⋆ ̊ ⋆</title>
</head>
<body>
    <nav id="sticky-nav">
        <div class="nav_content"></div>
        <div class="nav-toggle">
         <a href="#" class="toggle-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
         </a>
        </div>
        <ul class="menu">
            <li><a href="index.php#home">HOME</a></li>
            <li><a href="index.php#gallery">GALLERY</a></li>
            <li><a href="artikel.php">BLOG</a></li>
            <li><a href="index.php#contact">CONTACTS</a></li>
        </ul>
    </nav>

    <main>
    <section id="blog">
        <h2>BLOG</h2>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <article>
                    <h3><?php echo $row['judul']; ?></h3>
                    <p><?php echo $row['konten']; ?></p>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p></p>
        <?php endif; ?>
    </section>

    <button id="scrollToTopBtn" title="Go to top">&#8593;</button>
    <div id="lightbox-overlay">
        <div id="lightbox">
            <img id="lightbox-image" src="" alt="">
            <div id="lightbox-nav">
            </div>
            <div id="lightbox-caption"></div>
            <div id="lightbox-close">&times;</div>
        </div>
    </div>
    </main>

</body>
</html>
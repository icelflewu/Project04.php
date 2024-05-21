<?php
include 'koneksi.php';

$sql = "SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 3";
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
            <li><a href="#home">HOME</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            <li><a href="artikel.php">BLOG</a></li>
            <li><a href="#contact">CONTACTS</a></li>
        </ul>
    </nav>

    <header>
        <h1 id="typing"></h1>
        <p id="quote">Qoutes of the day here!!! ⋆ ̊ ⋆୨♡୧⋆ ̊ ⋆</p>
    </header>

    <main>
        <section id="home">
            <h2>HOME</h2>
            <div class="home-content">
                <p>Hi! Saya Gizelda Lewu, seorang mahasiswa S1 Teknik informatika Universitas Sam Ratulangi. Saya selalu memiliki ketertarikan dalam manajemen basis data.
                    Ketika belajar dan mengerjakan tugas yang melibatkan basis data, saya merasa antusias untuk menggali dan memahami struktur dan fungsinya. Ketertarikan ini mendorong saya untuk terus belajar mengenai basis data.Selain ketertarikan dalam manajemen basis data, saya juga memiliki hobi tak kalah menyenangkan, yaitu menyanyi. Ketika saya bernyanyi lagu-lagu favorit, saya merasa bahagia dan terhubung dengan ekspresi diri saya.
                    Selain itu, saya juga tertarik dalam dunia fotografi. Memotret momen-momen indah dan mengabadikan keindahan sekitar menjadi salah satu kegiatan yang saya nikmati.
                    Dengan ini, saya dapat mengekpresikan kreativitas saya dan melihat dunia dari berbagai sudut pandang yang menarik.</p>
            </div>
        </section>

        <section id="gallery">
            <h2>GALLERY</h2>
            <div class="gallery-content">
            <a href="asset/img/img17.jpg" data-lightbox="gallery">
        <img src="asset/img/img17.jpg" width="305"></a>
        <a href="asset/img/img2.jpg" data-lightbox="gallery">
        <img src="asset/img/img2.jpg" width="305"></a>
        <a href="asset/img/img5.jpg" data-lightbox="gallery">
        <img src="asset/img/img5.jpg" width="305"></a>
        <a href="asset/img/img3.jpg" data-lightbox="gallery">
        <img src="asset/img/img3.jpg" width="305"></a>
        <a href="asset/img/img6.jpg" data-lightbox="gallery">
        <img src="asset/img/img6.jpg" width="305"></a>
        <a href="asset/img/img9.jpg" data-lightbox="gallery">
        <img src="asset/img/img9.jpg" width="305"></a>
        <a href="asset/img/img8.jpg" data-lightbox="gallery">
        <img src="asset/img/img8.jpg" width="305"></a>
        <a href="asset/img/img14.jpg" data-lightbox="gallery">
        <img src="asset/img/img14.jpg" width="305"></a>
        <a href="asset/img/img16.jpg" data-lightbox="gallery">
        <img src="asset/img/img16.jpg" width="305"></a>
        <a href="asset/img/img15.jpg" data-lightbox="gallery">
        <img src="asset/img/img15.jpg" width="305"></a>
        <a href="asset/img/img21.jpeg" data-lightbox="gallery">
        <img src="asset/img/img21.jpeg" width="305"></a>
        <a href="asset/img/img19.jpeg" data-lightbox="gallery">
        <img src="asset/img/img19.jpeg" width="305"></a>
        <a href="asset/img/img20.jpeg" data-lightbox="gallery">
        <img src="asset/img/img20.jpeg" width="305"></a>
        <a href="asset/img/img22.jpeg" data-lightbox="gallery">
        <img src="asset/img/img22.jpeg" width="305"></a>
        <a href="asset/img/img28.jpeg" data-lightbox="gallery">
        <img src="asset/img/img28.jpeg" width="305"></a>
        <a href="asset/img/img23.jpeg" data-lightbox="gallery">
        <img src="asset/img/img23.jpeg" width="305"></a>
        <a href="asset/img/img26.jpeg" data-lightbox="gallery">
        <img src="asset/img/img26.jpeg" width="305"></a>
        <a href="asset/img/img25.jpeg" data-lightbox="gallery">
        <img src="asset/img/img25.jpeg" width="305"></a>
        <a href="asset/img/img27.jpeg" data-lightbox="gallery">
        <img src="asset/img/img27.jpeg" width="305"></a>
        <a href="asset/img/img18.jpg" data-lightbox="gallery">
        <img src="asset/img/img18.jpg" width="305"></a>
        </div>
            <button class="show-more" data-target="gallery-content">Hide</button>
        </section>

        <section id="blog">
            <h2>BLOG</h2>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                <?php endwhile; ?>
                <div class="blog-content">
            <article><img src="asset/img/blog14.jpg" width="545"alt="Sneak Peek" /></article>
            <article><img src="asset/img/img11.jpg" width="545"alt="Sneak Peek" /></article>
            <article><img src="asset/img/blog26.jpg" width="545"alt="Sneak Peek" /></article>
            <article><img src="asset/img/blog31.jpg" width="545"alt="Sneak Peek" /></article>
            <article><img src="asset/img/blog39.jpg" width="545"alt="Sneak Peek" /></article>

            </article></div>
            <?php else: ?>
                <p></p>
            <?php endif; ?>
            <a href="artikel.php">See All Articles.</a>
        </section>

        <section id="contact">
            <h2>CONTACTS</h2>
            <div class="contact-content">
                <div>
                    <img src="asset/img/ins.png" width="20">
                    <img src="asset/img/em.png" width="20">
                    <a href="https://www.instagram.com/icelflewu?igsh=YnhxcG80MTFuOTc3&utm_source=qr"><p>Instagram : @icelflewu</p></a>
                    <a href="mailto:felicyalewu08@gmail.com"><p>felicyalewu08@gmail.com</p></a>
                </div>
            </div>
        </section>
    </main>

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

</body>
</html>

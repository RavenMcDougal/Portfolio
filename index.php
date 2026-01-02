<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <title>Janis Getlins | Photography</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body { margin:0; background:#0e0e0e; color:#fff; font-family:Arial }
    header, footer { padding:20px; border-bottom:1px solid #222 }
    .gallery {
      display:grid;
      grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
      gap:15px;
      padding:20px;
    }
    .card img { width:100%; border-radius:6px }
    .upload { padding:20px }
  </style>
</head>

<body>

<header>
  <h2>JANIS GETLINS / PHOTOGRAPHY</h2>
</header>

<section class="upload">
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="photos[]" multiple accept="image/*" required>
    <button type="submit">Upload images</button>
  </form>
</section>

<section class="gallery">
<?php
$files = glob("images/*.{jpg,jpeg,png,JPG,JPEG,PNG}", GLOB_BRACE);
foreach ($files as $img) {
  echo "<div class='card'><img src='$img'></div>";
}
?>
</section>

<footer>
  © <?=date("Y")?> Janis Getlins
</footer>

</body>
</html>

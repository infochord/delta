<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dhi Contemporary, a new initiative of Dhi Artspace, Hyderabad, aims to be a one-stop destination for young and emerging artistic talents in India.">
  <meta name="keywords" content="Dhi Contemporary, dhiartspace, Dhicontemporary, gallery, Dhiresidency, gallery hyderabad">
  <title>Dhi Contemporary</title>
  <link rel="icon" href="images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap-gallery.js" defer></script>

</head>
<body>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content" style="border-radius: 0;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Enquiry Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-3">
        <div id="requestArtworkInfo" class="mb-3">
          <div class="d-flex gap-3 align-items-start">
            <img id="requestArtworkImage" src="" alt="" style="width: 80px; height: 80px; object-fit: cover; display: none; border: 1px solid rgba(0,0,0,.08); border-radius: 0;">
            <div>
              <p class="fw-semibold mb-1 small" id="requestArtworkTitle"></p>
              <p class="mb-0 text-muted small" id="requestArtworkMeta"></p>
            </div>
          </div>
        </div>
        <form>

          <input type="hidden" id="requestArtworkHiddenTitle" name="artwork_title">
          <input type="hidden" id="requestArtworkHiddenMeta" name="artwork_meta">
          <input type="hidden" id="requestArtworkHiddenImage" name="artwork_image">

          <div class="row g-2 align-items-center mb-2">
            <label class="col-sm-4 col-form-label small mb-0">Name <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" placeholder="Enter your name" required>
            </div>
          </div>

          <div class="row g-2 align-items-center mb-2">
            <label class="col-sm-4 col-form-label small mb-0">Email <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="email" class="form-control form-control-sm" placeholder="Enter your email" required>
            </div>
          </div>

          <div class="row g-2 align-items-center mb-2">
            <label class="col-sm-4 col-form-label small mb-0">Mobile</label>
            <div class="col-sm-8">
              <input type="tel" class="form-control form-control-sm" placeholder="Enter your mobile number">
            </div>
          </div>

          <div class="row g-2 align-items-start mb-3">
            <label class="col-sm-4 col-form-label small mb-1">Message</label>
            <div class="col-sm-8">
              <textarea class="form-control form-control-sm" rows="3" placeholder="Enter your message"></textarea>
            </div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-dark btn-sm text-white">
              Send Enquiry
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const requestModal = document.getElementById('exampleModal');
    const artworkTitleEl = document.getElementById('requestArtworkTitle');
    const artworkMetaEl = document.getElementById('requestArtworkMeta');
    const artworkImageEl = document.getElementById('requestArtworkImage');
    const artworkTitleInput = document.getElementById('requestArtworkHiddenTitle');
    const artworkMetaInput = document.getElementById('requestArtworkHiddenMeta');
    const artworkImageInput = document.getElementById('requestArtworkHiddenImage');

    function resetArtworkInfo() {
      if (artworkTitleEl) artworkTitleEl.textContent = '';
      if (artworkMetaEl) artworkMetaEl.textContent = '';
      if (artworkImageEl) {
        artworkImageEl.src = '';
        artworkImageEl.alt = '';
        artworkImageEl.style.display = 'none';
      }
      if (artworkTitleInput) artworkTitleInput.value = '';
      if (artworkMetaInput) artworkMetaInput.value = '';
      if (artworkImageInput) artworkImageInput.value = '';
    }

    document.querySelectorAll('a[data-bs-target="#exampleModal"]').forEach(function (button) {
      button.addEventListener('click', function (event) {
        event.preventDefault();

        const cardBody = button.closest('.card-body');
        if (!cardBody) {
          resetArtworkInfo();
          return;
        }

        const details = Array.from(cardBody.querySelectorAll('p'))
          .map(function (p) { return p.textContent.trim(); })
          .filter(Boolean);

        const title = details[0] || 'Artwork request';
        const meta = details.slice(1).join(' | ');
        const artworkImg = button.closest('.card')?.querySelector('img.card-img-top');
        const imgSrc = artworkImg?.getAttribute('src') || '';
        const imgAlt = artworkImg?.getAttribute('alt') || title;

        if (artworkTitleEl) artworkTitleEl.textContent = title;
        if (artworkMetaEl) artworkMetaEl.textContent = meta;
        if (artworkTitleInput) artworkTitleInput.value = title;
        if (artworkMetaInput) artworkMetaInput.value = meta;
        if (artworkImageEl) {
          if (imgSrc) {
            artworkImageEl.src = imgSrc;
            artworkImageEl.alt = imgAlt;
            artworkImageEl.style.display = 'block';
          } else {
            artworkImageEl.src = '';
            artworkImageEl.alt = '';
            artworkImageEl.style.display = 'none';
          }
        }
        if (artworkImageInput) artworkImageInput.value = imgSrc;
      });
    });

    if (requestModal) {
      requestModal.addEventListener('hidden.bs.modal', resetArtworkInfo);
    }
  });
</script>
      
    </div>
  </div>
</div>
 
   <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-3 ms-lg-0">
            <img src="images/Dhiart_logo.gif" alt="Dhi Artspace logo" style="width:140px; height:120px; object-fit:contain;">
        <!-- <img class="img-reponsive"  src="images/Dhi-GIF-18.gif"  alt="Dhi Artspace log"> -->
            <!-- <h1 class="text-primary m-0"><img class="me-3" src="img/icons/icon-1.png" alt="Icon">Arkitektur</h1> -->
        </a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="index.php" class="nav-item nav-link">HOME</a>
               <a href="aboutus.php" class="nav-item nav-link">ABOUT</a>
              <a href="face.php" class="nav-item nav-link">FACE FOUNDATION</a>
              <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">FACE FOUNDATION</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="d_art.php" class="dropdown-item">ARTSPACE</a>
                        <a href="d_cont.php" class="dropdown-item">CONTEMPORARY</a>
                        <a href="d_coll.php" class="dropdown-item">COLLECTIVE</a>
                        <a href="d_res.php" class="dropdown-item">RESIDENCY</a>
                    </div>
                </div> -->
                <a href="artists.php" class="nav-item nav-link">ARTISTS</a>
                <a href="pastexhibition.php" class="nav-item nav-link">EXHIBITIONS</a>
                <a href="art.php" class="nav-item nav-link">ARTWORKS</a>
                <a href="iaf.php" class="nav-item nav-link">ART FAIRS</a>
                
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ART FAIRS</a>
                    <div class="dropdown-menu border-0 m-0">
                   <a href="fairs.php" class="dropdown-item">IAF-DELHI EDITION</a>
                   <a href="fairshyd.php" class="dropdown-item">IAF-HYDERABAD EDITION</a>
                    </div>
                </div> -->

                <a href="event.php" class="nav-item nav-link">EVENTS</a>
                <a href="press.php" class="nav-item nav-link">PRESS</a>
               
                <!-- <a href="contact.php" class="nav-item nav-link">CONTACT</a> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    

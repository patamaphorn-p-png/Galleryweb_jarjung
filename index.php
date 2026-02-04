<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JAR'JUNG New Style Pizza | Online Menu</title>
  <link rel="stylesheet" href="css/style.css">

 

  <!-- Bootstrap 5 CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <style>
    /* Base */
    :root{
      --brand-dark:#0b0b0d;
      --brand-red:#e2322c;
      --brand-gold:#c9a35c;
      --brand-cream:#fff4e8;
    }
    body{
      font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Noto Sans Thai", "Helvetica Neue", Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      color:#222;
      background:#fff;
    }
    /* Header */
    .navbar{
      border-bottom: 1px solid rgba(0,0,0,.08);
      background: #ffffff;
    }
    .navbar-brand{
      font-weight: 800;
      letter-spacing:.5px;
    }
    .brand-mark{
      width:40px;height:40px;border-radius:8px;
      background:var(--brand-red);
      display:inline-flex;align-items:center;justify-content:center;
      color:#fff;font-weight:800;margin-right:.5rem;
    }

    /* Hero banner (promotion) */
    .hero{
      position:relative;
      background: linear-gradient(120deg, var(--brand-cream), #fff);
      border-bottom: 1px solid rgba(0,0,0,.06);
    }
    .hero .promo-flag{
      display:inline-block;
      background: var(--brand-red);
      color:#fff;
      border-radius: 999px;
      padding: .35rem .85rem;
      font-weight:700;
      font-size:.95rem;
    }
    .hero-title{
      font-weight:900;
      line-height:1.1;
    }
    .hero-sub{
      color:#444;
      font-weight:600;
    }
    .hero-price{
      font-weight:800;
      color:var(--brand-red);
      font-size:1.25rem;
    }
    .hero-art{
      min-height:240px;
      border-radius:16px;
      background:#f7f7f7;
      border:1px dashed rgba(0,0,0,.12);
      display:flex;align-items:center;justify-content:center;
      color:#777;
      font-weight:600;
    }
    .hero-badge{
      background: var(--brand-gold);
      color:#1a1a1a;
      border-radius: 999px;
      padding:.35rem .75rem;
      font-weight:700;
      font-size:.9rem;
    }

    /* Section heading */
    .section-head{
      display:flex;align-items:center;justify-content:space-between;
      gap:1rem;margin-bottom: .75rem;
    }
    .section-title{
      font-weight:900;
      letter-spacing:.3px;
    }

    /* Pizza cards */
    .pizza-card{
      border:1px solid rgba(0,0,0,.08);
      border-radius:14px;
      transition: transform .15s ease, box-shadow .15s ease;
      height:100%;
    }
    .pizza-card:hover{
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0,0,0,.08);
    }
    .pizza-thumb{
      border-radius:12px;
      background:#f2f2f2;
      border:1px dashed rgba(0,0,0,.12);
      height:140px;
      display:flex;align-items:center;justify-content:center;
      color:#777;font-weight:600;
    }
    .pizza-name{
      font-weight:800;
    }
    .pizza-meta{
      color:#666;font-weight:600;
    }
    .pizza-price{
      font-weight:900;color:#111;
    }
    .badge-new{
      background:var(--brand-red);
    }
    .badge-star{
      background:#111;color:#fff;
    }

    /* Footer */
    .footer{
      border-top:1px solid rgba(0,0,0,.08);
      background:#fafafa;
    }
    .social a{
      width:40px;height:40px;border-radius:999px;
      display:inline-flex;align-items:center;justify-content:center;
      text-decoration:none;border:1px solid rgba(0,0,0,.1);
      color:#222;background:#fff;transition:transform .15s ease;
    }
    .social a:hover{ transform: translateY(-2px); }

    /* Utility */
    .muted{ color:#6b6b6b; }
    .divider{
      height:1px;background:rgba(0,0,0,.08);border:0;margin:1.5rem 0;
    }

    /* Placeholder image helper */
    .img-note{ font-size:.85rem;color:#777;text-align:center;margin-top:.35rem; }
  </style>
</head>
<body>
  <!-- Header (Bootstrap element: Navbar) -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#"> <img src="img/logoBrandjarjung.png" alt="JAR'JUNG Logo" style="height:40px; width:auto; margin-right:0.5rem;" /> JAR'JUNG New Style Pizza
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navMain" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a class="nav-link active" href="#new">เมนูใหม่</a></li>
          <li class="nav-item"><a class="nav-link" href="#favorites">เมนูฮิตตลอดกาล</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">ติดต่อเรา</a></li>
          <li class="nav-item ms-lg-3">
            <a class="btn btn-dark btn-sm rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#modalOrder">สั่งซื้อ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero (Bootstrap elements: Container, Row/Col, Buttons, Badges) -->
  <section class="hero py-4 py-lg-5">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="mb-2">
            <span class="promo-flag">PROMOTION 2 FOR 199.-</span>
            <span class="hero-badge ms-2">JAR'JUNG New Style Pizza</span>
          </div>
          <h1 class="hero-title display-5 mt-3">
            Life’s too short for the same old slice.<br/>
            Dare to upgrade your bite!
          </h1>
          <p class="hero-sub mt-3">
            โปรโมชันพิเศษสำหรับคนชอบลองรสชาติใหม่ อัปเกรดพิซซ่าให้โดนใจ—วันนี้!
          </p>
          <div class="d-flex align-items-center gap-3 mt-3">
            <a href="#new" class="btn btn-dark btn-lg rounded-pill px-4">ดูเมนูใหม่</a>
            <a href="#favorites" class="btn btn-outline-dark btn-lg rounded-pill px-4">เมนูฮิตตลอดกาล</a>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Replace this hero-art with your image -->
          <div class="hero-art">
            <img src="img/Promotionpizza.png" alt="โปรโมชั่นพิซซ่า" class="img-fluid rounded" />
          </div>
          <p class="img-note">หมายเหตุ: รูปภาพนี้ถูกสร้างขึ้นจาก AI มาเพื่อสื่อโฆษณาเท่านั้น</p>
        </div>
      </div>
    </div>
  </section>

  <div class="container my-4">
    <!-- Bootstrap element: Breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
        <li class="breadcrumb-item active" aria-current="page">เมนู</li>
      </ol>
    </nav>
  </div>

  <!-- Alert (Bootstrap element: Alert) -->
  <div class="container">
    <div class="alert alert-warning d-flex align-items-center" role="alert">
      <strong class="me-2">ประกาศ:</strong> โปรโมชัน 199.- มีจำนวนจำกัด รีบสั่งวันนี้!
    </div>
  </div>

  <hr class="divider" />

  <!-- New Menu Section -->
  <section id="new" class="py-3">
    <div class="container">
      <div class="section-head">
        <h2 class="section-title h3 mb-0">เมนูใหม่</h2>
        <span class="badge badge-new rounded-pill">NEW</span>
      </div>

      <!-- Bootstrap elements: Grid, Cards, Badges, Buttons -->
      <div class="row g-4">
        <!-- Spicy Hot Chili -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/Spicyhotchilly.png" alt="Spicy Hot Chili Pizza" class="img-fluid rounded" />
              </div>
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <div class="pizza-name">Spicy Hot Chili</div>
                  <div class="pizza-meta">ขนาด 7"</div>
                </div>
                <span class="badge text-bg-danger">เผ็ดจัด</span>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">159฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="popover" data-bs-title="Spicy Hot Chili" data-bs-content="พริกเผ็ดจัด ร้อนแรง!">รายละเอียด</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Triple Truffle -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/TrippleTrufflepizza.png" alt="Triple Truffle Pizza" class="img-fluid rounded" /></div>
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <div class="pizza-name">Triple Truffle</div>
                  <div class="pizza-meta">ขนาด 7"</div>
                </div>
                <span class="badge text-bg-secondary">หอมทรัฟเฟิล</span>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">159฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="popover" data-bs-title="Triple Truffle" data-bs-content="เข้มข้นกลิ่นทรัฟเฟิลสามสเต็ป">รายละเอียด</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Green Curry Chicken Satay -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/GrenncurryChickensatay.png" alt="Green Curry Chicken Satay" class="img-fluid rounded" /></div>
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <div class="pizza-name">Green Curry Chicken Satay</div>
                  <div class="pizza-meta">ขนาด 7"</div>
                </div>
                <span class="badge text-bg-success">ไทยฟิวชัน</span>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">159฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="popover" data-bs-title="Green Curry Chicken Satay" data-bs-content="แกงเขียวหวานไก่สะเต๊ะ ฟิวชันจัดเต็ม">รายละเอียด</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Salted Fish Holy Basil -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/Saltedfishhollybrazil.png" alt="Salted Fish Holy Basil" class="img-fluid rounded" /></div>
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <div class="pizza-name">Salted Fish Holy Basil</div>
                  <div class="pizza-meta">ขนาด 7"</div>
                </div>
                <span class="badge text-bg-warning">กลิ่นจัดจ้าน</span>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">179฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="popover" data-bs-title="Salted Fish Holy Basil" data-bs-content="เค็มมันปลาร้า/ปลาเค็ม หอมกะเพรา">รายละเอียด</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <hr class="divider" />

  <!-- Favorites Section -->
  <section id="favorites" class="py-3">
    <div class="container">
      <div class="section-head">
        <h2 class="section-title h3 mb-0">เมนูฮิตตลอดกาล</h2>
        <span class="badge badge-star rounded-pill">TOP</span>
      </div>

      <div class="row g-4">
        <!-- Bacon Maple Walnut -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/BaconMapleWalnut.png" alt="Bacon Maple Walnut" class="img-fluid rounded" /></div>
              <div class="pizza-name">Bacon Maple Walnut</div>
              <div class="pizza-meta">ขนาด 7"</div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">159฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="tooltip" data-bs-title="หวานเค็มหอมเมเปิลและวอลนัท">เพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Blueberry Cream Cheese -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/BlueberryCreamCheese.png" alt="Blueberry Cream Cheese" class="img-fluid rounded" /></div>
              <div class="pizza-name">Blueberry Cream Cheese</div>
              <div class="pizza-meta">ขนาด 7"</div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">199฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="tooltip" data-bs-title="หวานอมเปรี้ยว ชีสครีมเนียน">เพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>

        <!-- JARJUNG Meat Lovers -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/MeatLovers.png" alt="JARJUNG Meat Lovers" class="img-fluid rounded" /></div>
              <div class="pizza-name">JARJUNG Meat Lovers</div>
              <div class="pizza-meta">ขนาด 7"</div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">159฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="tooltip" data-bs-title="จัดเต็มสายเนื้อ">เพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>

        <!-- The Vegan Garden -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card pizza-card">
            <div class="card-body">
              <div class="pizza-thumb mb-3"><img src="img/Thevegangarden.png" alt="The Vegan Garden" class="img-fluid rounded" /></div>
              <div class="pizza-name">The Vegan Garden</div>
              <div class="pizza-meta">ขนาด 7"</div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="pizza-price">159฿</div>
                <button class="btn btn-outline-dark btn-sm rounded-pill" data-bs-toggle="tooltip" data-bs-title="ผักสดหลากหลาย วีแกนแท้">เพิ่มเติม</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <hr class="divider" />

  <!-- Contact + Footer -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-6">
          <h3 class="h4 mb-3">ติดต่อเรา</h3>
          <p class="muted mb-2">JARJUNG Thailand — เราพิถีพิถันในทุกชิ้น เพื่อประสบการณ์พิซซ่ารสชาติใหม่</p>
          <!-- Bootstrap element: List group -->
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><strong>โทร:</strong> 02-XXX-XXXX</span>
              <span class="badge text-bg-light">9:00–21:00</span>
            </li>
            <li class="list-group-item"><strong>ที่อยู่:</strong> เขต/แขวง, กรุงเทพมหานคร</li>
            <li class="list-group-item"><strong>อีเมล:</strong> hello@jarjung.co.th</li>
          </ul>
          <!-- Bootstrap element: Accordion -->
          <div class="accordion" id="faq">
            <div class="accordion-item">
              <h2 class="accordion-header" id="q1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="true" aria-controls="a1">
                  ช่องทางการสั่งซื้อ
                </button>
              </h2>
              <div id="a1" class="accordion-collapse collapse show" aria-labelledby="q1" data-bs-parent="#faq">
                <div class="accordion-body">
                  สั่งผ่านเว็บไซต์ โทรศัพท์ หรือ Walk-in ที่หน้าร้านได้ตามสะดวก
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
                  การจัดส่ง
                </button>
              </h2>
              <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faq">
                <div class="accordion-body">
                  จัดส่งในพื้นที่ให้บริการ พร้อมระบบติดตามสถานะเรียลไทม์
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Socials -->
        <div class="col-lg-6">
          <h3 class="h4 mb-3">โซเชียลมีเดีย</h3>
          <div class="social d-flex align-items-center gap-2">
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i> IG</a>
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i> FB</a>
            <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i> YT</a>
            <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i> TW</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer py-4">
    <div class="container">
      <div class="row g-3 align-items-center">
        <div class="col-md-6">
          <small class="text-muted">©2026 JARJUNG Thailand. All Rights Reserved.</small>
        </div>
        <div class="col-md-6 text-md-end">
          <nav class="nav justify-content-md-end">
            <a class="nav-link text-muted" href="#">เงื่อนไขการให้บริการ</a>
            <a class="nav-link text-muted" href="#">นโยบายความเป็นส่วนตัว</a>
            <a class="nav-link text-muted" href="#">แผนผังเว็บไซต์</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>

  <!-- Order Modal (Bootstrap element: Modal) -->
  <div class="modal fade" id="modalOrder" tabindex="-1" aria-labelledby="modalOrderLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="modalOrderLabel" class="modal-title">เริ่มสั่งซื้อ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ปิด"></button>
        </div>
        <div class="modal-body">
          เลือกเมนูที่ต้องการจากรายการ “เมนูใหม่” หรือ “เมนูฮิตตลอดกาล” แล้วกดปุ่มรายละเอียดเพื่อดูข้อมูลเพิ่ม
        </div>
        <div class="modal-footer">
          <button class="btn btn-outline-dark" data-bs-dismiss="modal">ปิด</button>
          <a href="#new" class="btn btn-dark">ไปที่เมนู</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS + Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <!-- Enable tooltips & popovers -->
  <script>
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));
    document.querySelectorAll('[data-bs-toggle="popover"]').forEach(el => new bootstrap.Popover(el));
  </script>
</body>
</html>




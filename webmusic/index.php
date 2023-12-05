<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
  <!-- main -->
  <link rel="stylesheet" href="https://www.hongseong.go.kr/pcms/common/pluigs/slick/slick.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
      <link rel="stylesheet" href="style.css" />
  <title>Music💿💿</title>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#" class="logo">
      <i class='bx bx-music'></i>
      <div class="logo-name"><span>Mu</span>sic</div>
    </a>
    <ul class="side-menu">
      <li class="active"><a href="#"><i class='bx bx-skip-next-circle'></i>Home</a></li>
      <li><a href="#"><i class='bx bx-category-alt'></i>Genres</a></li>
      <li><a href="#"><i class='bx bx-album'></i>Albums</a></li>
      <li><a href="#"><i class='bx bx-user-voice'></i>Artists</a></li>
      <br>
      <!-- <hr style="border-style: dashed; width:80%; border-color: rgb(33, 27, 27); border-width: 1px; margin: auto;"> -->
      <p style="color: rgb(165, 159, 159); font-size: 13px; text-align: center;">Library</p>
      <br>
      <li><a href="#"><i class='bx bx-history'></i>Recent</a></li>
      <li><a href="#"><i class='bx bx-heart-circle'></i>Favourites</a></li>
      <br>
      <!-- <hr style="border-style: dashed; width:80%; border-color: rgb(70, 70, 70); border-width: 1px; margin: auto;"> -->
      <p style="color: rgb(165, 159, 159); font-size: 13px; text-align: center;">Account</p>
      <br>
      <li><a href="#"><i class='bx bx-group'></i>Profile</a></li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="#" class="logout">
          <i class='bx bx-log-out'></i>
          Logout
        </a>
      </li>
    </ul>
  </div>
  <!-- End of Sidebar -->

  <!-- Main Content -->
  <div class="content">
    <!-- Navbar -->
    <nav>
      <i class='bx bx-menu'></i>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search...">
          <button class="search-btn" type="submit"><i class='bx bx-search-alt'></i></button>
        </div>
      </form>
      <input type="checkbox" id="theme-toggle" hidden>
      <label for="theme-toggle" class="theme-toggle"></label>
      <a href="#" class="notif">
        <i class='bx bx-bell'></i>
        <span class="count">12</span>
      </a>
      <a href="loginpage.php" class="profile">
        <img src="https://i.pinimg.com/originals/91/92/b8/9192b8bbc7c6228fed62607961c9f188.jpg">
      </a>
    </nav>

    <!-- End of Navbar -->

    <main>
      <div class="rank-wrap">
        <div class="rank-layout">
          <div class="rank-slide">
            <!-- slide content 1, nên thay thành top, tên bài hát, sau đó là nghệ sĩ các kiểu -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top <b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/originals/4f/a4/cf/4fa4cf41d9cf17baf54963e5551f8f62.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#1: cái j đó</strong>
                <!-- <p class="desc-substance">by</p> -->
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="2"><span class="dot-text">#2</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="3"><span class="dot-text">#3</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="4"><span class="dot-text">#4</span></button>
                </li>
              </ul>
            </div>
            <!-- 2 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/564x/b4/b7/0c/b4b70c01dbe67f94150502335e791399.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#2: bài j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="3"><span class="dot-text">#3</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="4"><span class="dot-text">#4</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="5"><span class="dot-text">#5</span></button>
                </li>
              </ul>
            </div>
            <!-- slide content 3 -->
            <div class="slide-content">
              <div class="content-title">
                <!-- hình ảnh content -->
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/originals/94/2a/e2/942ae26b8d57118ce981363c220854a1.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#3: bài j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="4"><span class="dot-text">#4</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="5"><span class="dot-text">#5</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="6"><span class="dot-text">#6</span></button>
                </li>
              </ul>
            </div>
            <!-- 4 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/564x/76/e4/33/76e433ae2fb346dd5fc8ad2bb428249c.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#4: bài j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="5"><span class="dot-text">#5</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="6"><span class="dot-text">#6</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="7"><span class="dot-text">#7</span></button>
                </li>
              </ul>
            </div>
            <!-- 5 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/564x/a2/7e/d5/a27ed5fe412754e7d42e61c9897569ec.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#5: j j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="6"><span class="dot-text">#6</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="7"><span class="dot-text">#7</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="8"><span class="dot-text">#8</span></button>
                </li>
              </ul>
            </div>
            <!-- 6 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/564x/dc/73/9e/dc739e796d73f6c426621c4e10b2d5b2.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#6: bài j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="7"><span class="dot-text">#7</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="8"><span class="dot-text">#8</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="9"><span class="dot-text">#9</span></button>
                </li>
              </ul>
            </div>
            <!-- 7 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/564x/fd/20/95/fd209526b53d4cce1d5394a1c61fba61.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#7: bài j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="8"><span class="dot-text">#8</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="9"><span class="dot-text">#9</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="10"><span class="dot-text">#10</span></button>
                </li>
              </ul>
            </div>
            <!-- 8 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/564x/9b/7c/f5/9b7cf57e227c37bd0219e158864e8668.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#8: j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="9"><span class="dot-text">#9</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="10"><span class="dot-text">#10</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="1"><span class="dot-text">#1</span></button>
                </li>
              </ul>
            </div>
            <!-- 9 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/474x/28/0b/b7/280bb7db09e1c9aeb57cc02a46fb2bf4.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#9: bài j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="10"><span class="dot-text">#10</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="1"><span class="dot-text">#1</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="2"><span class="dot-text">#2</span></button>
                </li>
              </ul>
            </div>
            <!-- 10 -->
            <div class="slide-content">
              <div class="content-title">
                <p>Top<b> song</b> of the week.</p>
                <img src="https://i.pinimg.com/474x/52/da/97/52da97b59d5fb70ff7fbf782b01baeba.jpg" alt="">
              </div>
              <div class="content-desc">
                <strong class="desc-title">#10: j đó</strong>
              </div>
              <ul class="content-dots">
                <li class="dot">
                  <button class="dot-button" data-target="1"><span class="dot-text">#1</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="2"><span class="dot-text">#2</span></button>
                </li>
                <li class="dot">
                  <button class="dot-button" data-target="3"><span class="dot-text">#3</span></button>
                </li>
              </ul>
            </div>
          </div>
          <!-- thanh chạy -->
          <div class="slide-controller" data-autoplay="Y">
            <div class="slide-progress">
              <span class="progress-fill"></span>
            </div>
            <div class="slide-nav">
              <button class="slide-prev slide-arrow">
                <span class="sr-only">이전</span>
              </button>
              <button class="slide-auto">
                <span class="blind">정지하기</span>
              </button>
              <button class="slide-next slide-arrow">
                <span class="sr-only">다음</span>
              </button>
            </div>
          </div>
          <!-- icon -->
          <ul class="rank-links">
            <li class="rank-link rank-link01">
              <a href="#">
                <span class="link-icon bx bx-play-circle"></span>
              </a>
            </li>
            <li class="rank-link rank-link02">
              <a href="#">
                <span class="link-icon bx bx-message-rounded-dots"></span>
              </a>
            </li>
            <li class="rank-link rank-link03">
              <a href="#">
                <span class="link-icon bx bx-user-voice"></span>
              </a>
            </li>
            <li class="rank-link rank-link04">
              <a href="#">
                <span class="link-icon bx bx-heart-circle"></span>
              </a>
            </li>
          </ul>
        </div>


        <div class="rank-bg-slide">
          <div class="bg-inner bg-inner01"></div>
          <div class="bg-inner bg-inner02"></div>
          <div class="bg-inner bg-inner03"></div>
          <div class="bg-inner bg-inner04"></div>
          <div class="bg-inner bg-inner05"></div>
          <div class="bg-inner bg-inner06"></div>
          <div class="bg-inner bg-inner07"></div>
          <div class="bg-inner bg-inner08"></div>
          <div class="bg-inner bg-inner09"></div>
          <div class="bg-inner bg-inner10"></div>
          <div class="bg-inner bg-inner11"></div>
          <div class="bg-inner bg-inner12"></div>
        </div>
      </div>
      <!-- insight -->
      <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <section id="recipes">
      <div class="recipe-container">
        <h1>Delightful Dessert Recipes</h1>
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide post">
              <img
                class="post-img"
                src="images/1-homemade-ice-cream.jpg"
                alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="images/1-evelyn.png"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Homemade Ice Cream</h2>
                  <p class="post-author">Evelyn Taylor</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post1"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post1"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add to Collection</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>Show the Recipe</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>Follow the User</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img class="post-img" src="images/2-pan-cake.jpg" alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="images/2-ethan.png"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Pancake</h2>
                  <p class="post-author">Ethan Wilson</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post2"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post2"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add to Collection</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>Show the Recipe</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>Follow the User</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img class="post-img" src="images/3-macaron.jpg" alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="images/3-bella.png"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Macaron</h2>
                  <p class="post-author">Bella Smith</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post3"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post3"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add to Collection</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>Show the Recipe</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>Follow the User</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img
                class="post-img"
                src="images/4-cheesecake.jpg"
                alt="recipe" />

              <div class="post-body">
                <img class="post-avatar" src="images/4-mia.png" alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Cheesecake</h2>
                  <p class="post-author">Mia Dixon</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post4"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post4"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add to Collection</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>Show the Recipe</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>Follow the User</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img class="post-img" src="images/5-donuts.jpg" alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="images/5-olivia.png"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Donuts</h2>
                  <p class="post-author">Olivia Martinez</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post5"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post5"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add to Collection</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>Show the Recipe</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>Follow the User</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide post">
              <img
                class="post-img"
                src="images/6-rolo-cheesecake.jpg"
                alt="recipe" />

              <div class="post-body">
                <img
                  class="post-avatar"
                  src="images/6-benjamin.png"
                  alt="avatar" />
                <div class="post-detail">
                  <h2 class="post-name">Rolo Cheesecake</h2>
                  <p class="post-author">Benjamin Clark</p>
                </div>

                <div class="post-actions">
                  <a class="post-like" href="javascript:void(0)"
                    ><i class="fas fa-heart"></i
                  ></a>
                  <button
                    class="post-actions-controller"
                    data-target="post6"
                    aria-controls="post-actions-content"
                    aria-expanded="false">
                    <i class="fa-solid fa-ellipsis fa-2xl"></i>
                  </button>
                  <div
                    class="post-actions-content"
                    id="post6"
                    data-visible="false"
                    aria-hidden="true">
                    <ul role="list" class="grid-flow" data-spacing="small">
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-folder-open"></i>
                          <span>Add to Collection</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-eye"></i>
                          <span>Show the Recipe</span>
                        </a>
                      </li>
                      <li>
                        <a class="post-actions-link" href="javascript:void(0)">
                          <i class="fa-solid fa-user-plus"></i>
                          <span>Follow the User</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  </body>
</html>
  </div>
  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="F:\8th Sem\UP-2\Source Code\Newsfeed\news_feed.css">
    <link
      rel="stylesheet"
      href="F:\8th Sem\UP-2\Source Code\Admin Dashboard\admin_dboard.css"
      type="text/css"
    />
    <link
      href="F:\8th Sem\UP-2\Source Code\Admin Dashboard\pe-icon-7-stroke.css"
      rel="stylesheet"
    />
    <link
      href="F:\8th Sem\UP-2\Source Code\Admin Dashboard\ct-navbar.css"
      rel="stylesheet"
    />
</head>
<body class="mt-0" style="
      font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial;
    ">
  
   <nav class="navbar navbar-expand-md navbar-dark sticky-top pt-2 mt-0 mb-3" id="navbar">
      <div
        class="container-fluid d-lg-flex justify-content-between align-items-baseline pe-2"
      >
        <div id="brand-logo">
          <a
            class="navbar-brand mx-3"
            href="faculty_dboard.html"
            style="color: #fc5404; font-weight: 700; font-size: 2rem"
          >
            SCHOLARWISE</a
          >
        </div>

        <div id="brand-items">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex justify-content-between"
            >
              <li class="dropdown">
                <button class="dropbtn px-0" style="text-align: center;">News Feed</button>

                <div class="dropdown-content px-0" style="text-align: center;">
                  <a href="faculty_newsfeed.html">
                    See Posts</a
                  >

                  <a href="faculty_newsfeed.html">
                    Upload posts</a
                  >
                </div>
              </li>

              <li class="dropdown"">
                <button class="dropbtn px-0" style="text-align: center;">
                  Resources
                </button>

                <div class="dropdown-content px-0" style="text-align: center;">
                  <a href="faculty_filemanager.html"> Access</a>

                  <a href="http://localhost/File%20Uploader/file_uploader.html"> Upload</a>
                </div>
              </li>

              <li class="dropdown">
                <button class="dropbtn">
                  <div style="transform: translateX(-20px)">
                    <img
                      src="F:\8th Sem\UP-2\Source Code\Admin Dashboard\user1.png"
                      width="40"
                      height="40"
                    />
                    Faculty
                  </div>
                </button>

                <div class="dropdown-content">
                  <a href="faculty_profile.html">
                    <i class="fa fa-download"></i>
                    My Profile
                  </a>

                  <a href="faculty_changepword.html">
                    <i class="fa fa-lock"></i>
                    Change password</a
                  >

                  <a
                    href="F:\8th Sem\UP-2\Source Code\Login Page\login_page.html"
                  >
                    <i class="fa fa-sign-out"></i>
                    Logout</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>


      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="border-bottom text-center pb-4">
                      <img src="user1.png" alt="profile" style="width: 315px; height: 315px;" class="img-lg rounded-circle mb-3">
                      <div class="mb-3">
                        <h3>Mohan Krishnan</h3>
                        <div>
                          <h4 class="mr-2 text-muted">Associate Professor - CSE</h4>
                          <h5 class="mr-2 text-muted">Presidency University</h5>
                          <div class="br-wrapper br-theme-css-stars"><select id="profile-rating" name="rating" autocomplete="off" style="display: none;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2"></a><a href="#" data-rating-value="3" data-rating-text="3"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                        </div>
                      </div>
                    
                    </div>
                    
                    <!-- <button class="btn btn-primary btn-block mb-2">Preview</button> -->
                  </div>
                  <div class="col-lg-8">
                    <div class="d-block d-md-flex justify-content-between mt-4 mt-md-0">
                      <div class="text-center mt-4 mt-md-0">
            
                      </div>
                    </div>
                    
                    <div class="profile-feed">
                      <div class="d-flex align-items-start profile-feed-item">
                        <img src="F:\8th Sem\UP-2\Source Code\Admin Dashboard\user1.png" alt="profile" class="img-sm rounded-circle">
                        <div class="ml-4">
                          <h5>
                            G Venkata Satwik
                            <small class="ml-4 text-muted ms-2"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                          </h5>
                          <p style="font-size: 16px;">
                            Greetings from VIKASANA, R&I, <br>Team Vikasana is the Research & Innovation Team of Presidency University, working under the guidance of professors of the Research and Innovation dept. <br>
                            We are excited to invite you to join us for a <strong class="text-dark">2-day workshop</strong> on <strong class="text-primary">"MACHINE LEARNING USING PYTHON"</strong> from <strong class="text-dark">14th May 2022</strong> to <strong class="text-dark">15th May 2022</strong> <br> <br>
                            Join us for the event to get some deep insights into machine learning <br> <br>
                            Hoping to see you there!! <br>  <br>
                            Registration link : <a href="https://vikasana.tech/workshop.html">https://vikasana.tech/workshop.html</a>

                          </p>
                          <p class="small text-muted mt-2 mb-0">
                            <span>
                              <i class="fa fa-thumbs-up icon"></i>19
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-edit ms-2"></i>5
                            </span>
                          </p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start profile-feed-item">
                        <img src="F:\8th Sem\UP-2\Source Code\Admin Dashboard\user1.png" alt="profile" class="img-sm rounded-circle">
                        <div class="ml-4">
                          <h5>
                            Girish K C
                            <small class="ml-4 text-muted ms-2"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                          </h5>
                          <p>Accenture off-campus recruitment has begun. Here is the latest pattern for stage-one assessment.</p>
                          <img src="accenture.png" alt="sample" class="rounded mw-100">                            
                          <p class="small text-muted mt-2 mb-0">
                            <span>
                              <i class="fa fa-thumbs-up icon"></i>11
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-edit ms-2"></i>2
                            </span>
                            
                          </p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start profile-feed-item">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="profile" class="img-sm rounded-circle">
                        <div class="ml-4">
                          <h5>
                            Gurucharan D A
                            <small class="ml-4 text-muted ms-2"><i class="mdi mdi-clock mr-1"></i>10 hours</small>
                          </h5>
                          <p>
                            
                          </p>
                          <img src="poster.png" style="width: 500px; height: 500px;" alt="sample" class="rounded mw-100">                                                        
                          <p class="small text-muted mt-2 mb-0">
                            <span>
                              <i class="fa fa-thumbs-up icon"></i>9
                            </span>
                            <span class="ml-2">
                              <i class="fa fa-edit ms-2"></i>1
                            </span>
                            
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
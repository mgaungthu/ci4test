<?= $this->include('layouts/header') ?>

<header>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="main-logo" src="<?= base_url('assets/images/logo.svg') ?>" alt="Iron Software">
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#main_nav"
                    aria-label="Toggle navigation menu">
                <span class="visually-hidden">Toggle navigation menu</span>
                <div id="nav-icon" aria-hidden="true">
                    <span></span><span></span><span></span><span></span>
                </div>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                   <li class="nav-item dropdown has-megamenu">
                       <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                           Products
                       </a>

                       <div class="dropdown-menu megamenu p-4">
                           <div class="row">
                               <div class="col-md-4">
                                   <h6 class="fw-bold">PDF Libraries</h6>
                                   <ul class="list-unstyled">
                                       <?php foreach ($pageData['menu']['pdf_libraries'] ?? [] as $item): ?>
                                           <li><a href="#" class="dropdown-item"><?= esc($item) ?></a></li>
                                       <?php endforeach; ?>
                                   </ul>
                               </div>
                               <div class="col-md-4">
                                   <h6 class="fw-bold">Coming Soon</h6>
                                   <ul class="list-unstyled">
                                       <?php foreach ($pageData['menu']['coming_soon'] ?? [] as $item): ?>
                                           <li><a href="#" class="dropdown-item"><?= esc($item) ?></a></li>
                                       <?php endforeach; ?>
                                   </ul>
                               </div>
                               <div class="col-md-4">
                                   <h6 class="fw-bold">Resources</h6>
                                   <ul class="list-unstyled">
                                       <?php foreach ($pageData['menu']['resources'] ?? [] as $item): ?>
                                           <li><a href="#" class="dropdown-item"><?= esc($item) ?></a></li>
                                       <?php endforeach; ?>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="margin-2-rem-bottom margin-5-rem-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="<?= base_url('assets/images/colorful-logo.svg') ?>" alt="Iron Software">
                    
                    <h5 class="sub-title text-white margin-2-rem-top">
                        <?= esc($pageData['hero']['subtitle'] ?? '') ?>
                    </h5>

                    <h3 class="main-title text-white">
                        Beta Software Program <br>
                        <span class="text-dark-purple">
                            <?= esc($pageData['hero']['title'] ?? '') ?>
                        </span>
                    </h3>

                    <p class="light-font text-dark-2-purple">
                        <?= esc($pageData['hero']['status'] ?? '') ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    

    <section class="purple-bg padding-50px-tb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="sec-title text-white">
                        <?= esc($pageData['cta']['title'] ?? '') ?>
                    </h3>

                    <p class="text-white">
                        <?= esc($pageData['cta']['description'] ?? '') ?>
                    </p>
                    <div class="input-group w-40 margin-2-rem-bottom">
                        <input type="text" class="form-control" placeholder="Enter Email address">
                        <div class="input-group-append">
                            <button class="btn-reset" type="button">Sign up now</button>
                        </div>
                    </div>
                    <p class="text-white">
                        <span class="highlight fw-bold">
                            # Coming Soon
                        </span>
                        <span class="light-font ms-1">IronPDF Beta Program also coming soon for </span>
                        <span class="fw-bold">Python |
                            Node.JS | Java</span>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <div class="float-logo">
        <img src="<?= base_url('assets/images/cpp-logo.svg') ?>" alt="CPP Logo">
    </div>
</header>

  <div id="mainWrapper">
        <section class="light-dark-bg padding-50px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center position-relative margin-3-rem-top">
                        <h3 class="sec-title text-white">IronPDF for C++</h3>

                        
                        <img src="<?= base_url('assets/images/coming-soon.svg') ?>" class="float-coming" alt="">
                    </div>
                </div>
                <div class="row margin-2-rem-top">
                    <div class="col-12">
                        <ul class="unstyled-inline">
                            <?php foreach ($pageData['features'] ?? [] as $feature): ?>
                                <li><span class="fw-bold">#</span> <?= esc($feature) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
    
        </section>
    
        <section class="dark-bg padding-50px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            The new <span class="fw-bold">IronPDF library for C++</span> will enhance the C++ developer’s
                            tool set with robust PDF generation and conversion capabilities. Developers will be able to
                            generate new PDFs from HTML content (from text or from URL), as well as to combine, split,
                            extract, and modify content from existing PDFs.
                        </p>
                        <p>
                            <span class="fw-bold"> IronPDF for C++</span> will help developers create C++ applications that
                            can do all of these PDF processing tasks and more, with speed, precision, control, and
                            excellence.
                        </p>
                    </div>
                </div>
            </div>
    
        </section>
        <section class="dark-gray-bg padding-70px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-lg-left text-center">
                        
                        <img src="<?= base_url('assets/images/html-to-pdf.svg') ?>" class="img-fluid" alt="HTML to PDF converter">
                    </div>
                    <div class="col-lg-9">
                        <h3 class="sec-title margin-1-rem-bottom">Why make a <span class="text-dark-purple">C++ PDF
                                Library</span> </h3>
                        <p>
                            C++ is one of the most popular, oldest, and important programming languages in use, being the
                            language of choice in low-level systems and network programming and other domains where
                            performance is critical.
                        </p>
                        <p>
                            The release of IronPDF for C++ will aid developers in building performant applications that can
                            carry out PDF-related processing tasks
                        </p>
    
                    </div>
                </div>
            </div>
    
        </section>
    
        <section class="light-dark-bg padding-50px-tb">
            <div class="container">
                <div class="row margin-2-rem-bottom">
                    <div class="col-12">
                        <h3 class="sec-title margin-1-rem-bottom">Early Access to <span class="text-dark-purple">C++ PDF
                                Library</span></h3>
                        <p>
                            Joining the early access program will allow you to collaborate closely with our engineering
                            team. You will be playing a key role in the development process as you share your early
                            experiences using the C++ PDF library before its official launch. Your continual feedback after
                            we release the library will be immensely helpful as we release new features and improve on
                            existing features.
                        </p>
                    </div>
    
                </div>
    
                <div class="row">
                    <div class="col-md-4 col-lg-4 margin-1-rem-bottom">
                        <div class="lib-list">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <span class="highlight fw-normal">
                                        # Released
                                    </span>
                                </div>
                                <div class="col-6">
                                    <p class="label-name">
                                        <span class="fw-normal">IRON</span>PDF<br>
                                        <span class="small">for Java</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 margin-1-rem-bottom">
                        <div class="lib-list">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <span class="highlight fw-normal">
                                        # Coming Soon
                                    </span>
                                </div>
                                <div class="col-6">
                                    <p class="label-name">
                                        <span class="fw-normal">IRON</span>PDF<br>
                                        <span class="small">for Python</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 margin-1-rem-bottom">
                        <div class="lib-list">
                            <div class="row d-flex align-items-center">
                                <div class="col-6">
                                    <span class="highlight fw-normal">
                                        # Coming Soon
                                    </span>
                                </div>
                                <div class="col-6">
                                    <p class="label-name">
                                        <span class="fw-normal">IRON</span>PDF<br>
                                        <span class="small">for NodeJS</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>
    
        <section class="dark-bg padding-50px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column position-relative">
                        <h3 class="sec-title text-white">Sign up to our <span class="text-dark-purple">Beta Program</span></h3>
                        <div class="input-group w-40 margin-1-rem-top">
                            <input type="text" class="form-control" placeholder="Enter Email address">
                            <div class="input-group-append">
                                <button class="btn-reset" type="button">Sign up now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>
    
    </div>

<?= $this->include('layouts/footer') ?>
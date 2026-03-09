<?= view('layout/header') ?>

<div class="hero-wrapper position-relative">

    <nav class="navbar navbar-expand-lg navbar-light z-3">
        <div class="container position-relative">

            <a href="home">
                <img src="/images/logo.svg" alt="logo_image">
            </a>

            <button class="navbar-toggler bg-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-label="Dropdown btn">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ps-lg-3" id="mainNavbar">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-uppercase text-white fw-bold"
                            data-bs-toggle="dropdown">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Product 1</a></li>
                            <li><a class="dropdown-item" href="#">Product 2</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-white fw-bold">About us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-white fw-bold">Career</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>


    <section class="hero-section">

        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-lg-6 beta-section">

                    <img src="/images/hero_logo.svg" alt="hero logo" class="mb-3">

                    <p class="text-white fs-6 m-0">
                        <?= $data['Hero']['Hero_Text_1'] ?>
                    </p>

                    <h1 class="text-white fw-bold display-5 m-0">
                        <?= $data['Hero']['Hero_Text_2'] ?>
                    </h1>

                    <h1 class="fw-bold display-5 m-0 text-highlight">
                        <?= $data['Hero']['Hero_Product'] ?>
                    </h1>

                    <p class="opacity-50 fs-6 text-highlight">
                        <?= $data['Hero']['Coming_Soon'] ?>
                    </p>

                </div>

            </div>
        </div>


        <div class="hero-gradient-bg">

            <div class="container">
                <div class="signup-section">

                    <h2 class="text-white fs-2 fw-bold m-0">
                        <?= $data['Hero']['Hero_Text_3'] ?>
                    </h2>

                    <p class="text-white fw-bold m-0">
                        <?= $data['Hero']['Hero_Text_4'] ?>
                    </p>

                    <form class="signup-form my-3">

                        <input class="form-control border-0"
                            type="email"
                            placeholder="<?= $data['Signup']['Placeholder'] ?>">

                        <button class="btn text-white text-nowrap"
                            type="submit">
                            <?= $data['Hero']['Sign_Up_Now'] ?>
                        </button>

                    </form>

                    <div class="d-flex flex-column flex-lg-row gap-2 align-items-lg-center">

                        <div>
                            <div class="badge rounded-pill bg-light text-dark opacity-50 p-2 px-3">
                                # <?= $data['Hero']['Coming_Soon'] ?>
                            </div>
                        </div>

                        <p class="text-white m-0">
                            <span class="opacity-50">
                                <?= $data['Hero']['Hero_Text_5'] ?>
                            </span>
                            <span class="fw-bold text-white">
                                <?= $data['Hero']['Techs'] ?>
                            </span>
                        </p>

                    </div>

                </div>
            </div>

        </div>


        <img src="/images/hero_image.svg"
            class="hero-image img-fluid"
            alt="hero image">

    </section>

</div>



<section class="text-center py-5">

    <div class="position-relative d-inline-block">

        <h1 class="text-white fw-bold display-5 mb-0">
            <?= $data['Features']['Title'] ?>
        </h1>

        <img src="/images/coming_soon_badge.svg"
            alt="coming soon"
            class="coming-soon-badge">

    </div>


    <div class="container mt-5">

        <div class="row justify-content-center text-center g-3">

            <div class="col-lg-auto">
                <p class="text-white"># <span class="opacity-50">
                        <?= $data['Features']['Feature_1'] ?>
                    </span></p>
            </div>

            <div class="col-lg-auto">
                <p class="text-white"># <span class="opacity-50">
                        <?= $data['Features']['Feature_2'] ?>
                    </span></p>
            </div>

            <div class="col-lg-auto">
                <p class="text-white"># <span class="opacity-50">
                        <?= $data['Features']['Feature_3'] ?>
                    </span></p>
            </div>

        </div>

    </div>

</section>



<section class="info-section">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10">

                <p class="info-text">
                    <?= $data['Info_Section']['Info_Text_1']; ?>
                </p>

                <p class="info-text">
                    <?= $data['Info_Section']['Info_Text_2'] ?>
                </p>

                <p class="info-text">
                    <?= $data['Info_Section']['Info_Text_3']; ?>
                </p>

            </div>

        </div>
    </div>

</section>



<section class="faq-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-4 text-center">
                <img src="/images/html_to_pdf.svg" alt="HTML to PDF">
            </div>

            <div class="col-lg-7">

                <h1 class="text-white fs-2 fw-bold">
                    <?= $data['Why_Cpp']['Title'] ?>
                </h1>

                <p class="text-white opacity-50">
                    <?= $data['Why_Cpp']['Description_1'] ?>
                </p>

                <p class="text-white opacity-50">
                    <?= $data['Why_Cpp']['Description_2'] ?>
                </p>

            </div>

        </div>

    </div>

</section>



<section class="early-access-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <h1 class="text-white fs-2 fw-bold">
                    <?= $data['Early_Access']['Title'] ?>
                </h1>

                <p class="text-white opacity-50">
                    <?= $data['Early_Access']['Description'] ?>
                </p>

            </div>

        </div>


        <div class="row justify-content-center g-4 mt-4">

            <div class="col-lg-4">

                <div class="release-pill d-flex align-items-center gap-2 mx-auto">

                    <span class="release-badge fw-bold">
                        <?= $data['Early_Access']['Released'] ?>
                    </span>

                    <div class="d-flex flex-column ps-2">
                        <strong class="logo-text fs-4">
                            <span class="fw-bold">IRON</span>PDF
                        </strong>
                        <small class="logo-text">
                            <?= $data['Early_Access']['Java'] ?>
                        </small>
                    </div>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="release-pill d-flex align-items-center gap-2 mx-auto">

                    <span class="release-badge fw-bold">
                        <?= $data['Early_Access']['Coming_Soon'] ?>
                    </span>

                    <div class="d-flex flex-column ps-2">
                        <strong class="logo-text fs-4">
                            <span class="fw-bold">IRON</span>PDF
                        </strong>
                        <small class="logo-text">
                            <?= $data['Early_Access']['Python'] ?>
                        </small>
                    </div>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="release-pill d-flex align-items-center gap-2 mx-auto">

                    <span class="release-badge fw-bold">
                        <?= $data['Early_Access']['Coming_Soon'] ?>
                    </span>

                    <div class="d-flex flex-column ps-2">
                        <strong class="logo-text fs-4">
                            <span class="fw-bold">IRON</span>PDF
                        </strong>
                        <small class="logo-text">
                            <?= $data['Early_Access']['Node'] ?>
                        </small>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="signup-beta-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-6 text-center">

                <h1 class="text-white fw-bold fs-2">
                    <?= $data['Signup']['Title'] ?>
                    <span class="text-highlight"><?= $data['Signup']['Highlight'] ?></span>
                </h1>

                <form class="signup-form mx-auto mt-4">

                    <input class="form-control border-0"
                        type="email"
                        placeholder="<?= $data['Signup']['Placeholder'] ?>">

                    <button class="btn text-white text-nowrap">
                        <?= $data['Signup']['Button'] ?>
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<?= view('layout/footer') ?>
<?php

$pageTitle = $pageTitle ?? "Papa G's Grills";
$currentPage = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Papa G's Grills - freshly grilled chicken, pap and Papa G's Chakalaka.">

    <title>
        <?= htmlspecialchars($pageTitle) ?> |
        Papa G's Grills
    </title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="assets/css/style.css">

</head>

<body>

<header class="site-header">

    <div class="top-strip">

        FRESHLY GRILLED
        •
        FULL OF FLAVOUR
        •
        MADE FOR YOU

    </div>

    <nav class="navbar container">

        <a class="brand"
           href="index.php">

            <img src="assets/images/papa-g-logo.png"
                 alt="Papa G's Grills Logo">

            <span>
                PAPA G'S
                <small>GRILLS</small>
            </span>

        </a>

        <button class="menu-toggle"
                type="button"
                aria-label="Open navigation"
                aria-expanded="false">

            ☰

        </button>

        <div class="nav-links"
             id="navLinks">

            <a href="index.php"
               class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">

                Home

            </a>

            <a href="about.php"
               class="<?= $currentPage === 'about.php' ? 'active' : '' ?>">

                About Us

            </a>

            <a href="menu.php"
               class="<?= $currentPage === 'menu.php' ? 'active' : '' ?>">

                Menu

            </a>

            <a href="contact.php"
               class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>">

                Contact Us

            </a>

            <a class="nav-cta"
               href="contact.php#enquiry">

                Make an Enquiry

            </a>

        </div>

    </nav>

</header>

<main>
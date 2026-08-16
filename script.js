document.addEventListener("DOMContentLoaded", function () {

    /* =====================================================
       MOBILE NAVIGATION
    ===================================================== */

    const menuToggle =
        document.getElementById("menuToggle");

    const navLinks =
        document.getElementById("navLinks");


    if (menuToggle && navLinks) {

        menuToggle.addEventListener("click", function () {

            navLinks.classList.toggle("open");

            const isOpen =
                navLinks.classList.contains("open");

            menuToggle.textContent =
                isOpen ? "✕" : "☰";

        });


        navLinks.querySelectorAll("a").forEach(function (link) {

            link.addEventListener("click", function () {

                navLinks.classList.remove("open");

                menuToggle.textContent = "☰";

            });

        });

    }


    /* =====================================================
       CONTACT FORM
    ===================================================== */

    const form =
        document.getElementById("enquiryForm");

    const formMessage =
        document.getElementById("formMessage");


    if (form) {

        form.addEventListener("submit", function (event) {

            event.preventDefault();


            const name =
                document.getElementById("name").value.trim();

            const phone =
                document.getElementById("phone").value.trim();

            const email =
                document.getElementById("email").value.trim();

            const subject =
                document.getElementById("subject").value;

            const message =
                document.getElementById("message").value.trim();


            /*
             * Basic validation
             */

            if (name.length < 2) {

                showMessage(
                    "Please enter your full name.",
                    "error"
                );

                return;

            }


            if (phone.length < 7) {

                showMessage(
                    "Please enter a valid phone number.",
                    "error"
                );

                return;

            }


            if (
                email !== "" &&
                !isValidEmail(email)
            ) {

                showMessage(
                    "Please enter a valid email address.",
                    "error"
                );

                return;

            }


            if (subject === "") {

                showMessage(
                    "Please select an enquiry type.",
                    "error"
                );

                return;

            }


            if (message.length < 10) {

                showMessage(
                    "Please enter a little more detail in your message.",
                    "error"
                );

                return;

            }


            /*
             * Front-end success message
             */

            showMessage(
                "Thank you, " +
                name +
                "! Your enquiry has been received. Papa G's will get back to you soon.",
                "success"
            );


            /*
             * Clear form
             */

            form.reset();

        });

    }


    function isValidEmail(email) {

        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

    }


    function showMessage(message, type) {

        if (!formMessage) {
            return;
        }

        formMessage.textContent = message;

        formMessage.className =
            "form-message " + type;

    }


    /* =====================================================
       SCROLL REVEAL
    ===================================================== */

    const revealElements =
        document.querySelectorAll(
            ".feature-card, .menu-card, .contact-detail, .value"
        );


    if ("IntersectionObserver" in window) {

        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                "visible"
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.12
                }
            );


        revealElements.forEach(function (element) {

            element.classList.add("reveal");

            observer.observe(element);

        });

    }

});
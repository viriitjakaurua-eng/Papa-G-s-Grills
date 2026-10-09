document.addEventListener("DOMContentLoaded", () => {

    /*
    |--------------------------------------------------------------------------
    | Mobile Navigation
    |--------------------------------------------------------------------------
    */

    const toggle = document.querySelector(".menu-toggle");

    const links = document.querySelector("#navLinks");


    if (toggle && links) {

        toggle.addEventListener("click", () => {

            const open =
                links.classList.toggle("open");

            toggle.setAttribute(
                "aria-expanded",
                String(open)
            );

            toggle.textContent =
                open ? "✕" : "☰";

        });


        links.querySelectorAll("a").forEach(link => {

            link.addEventListener("click", () => {

                links.classList.remove("open");

                toggle.setAttribute(
                    "aria-expanded",
                    "false"
                );

                toggle.textContent = "☰";

            });

        });

    }



    /*
    |--------------------------------------------------------------------------
    | Enquiry Form Validation
    |--------------------------------------------------------------------------
    */

    const form =
        document.querySelector("#enquiryForm");


    if (form) {

        form.addEventListener(
            "submit",
            (event) => {

                const message =
                    form.querySelector(
                        "textarea[name='message']"
                    );


                if (
                    message &&
                    message.value.trim().length < 10
                ) {

                    event.preventDefault();

                    message.focus();

                    alert(
                        "Please provide a little more detail in your message."
                    );

                }

            }
        );

    }

});
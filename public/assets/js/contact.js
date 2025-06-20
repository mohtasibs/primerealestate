//=========================================//
/*/*            Contact Form               */
//=========================================//
try {
    function validateForm() {
        var name = document.forms["myForm"]["name"].value;
        var email = document.forms["myForm"]["email"].value;
        var number = document.forms["myForm"]["number"].value;
        var subject = document.forms["myForm"]["subject"].value;
        var query = document.forms["myForm"]["query"].value;
        document.getElementById("error-msg").style.opacity = 0;
        document.getElementById("error-msg").innerHTML = "";
        document.getElementById("simple-msg").innerHTML = "";
        if (name == "" || name == null) {
            document.getElementById("error-msg").innerHTML =
                "<div class='alert alert-warning error_message'>*Please enter a Name*</div>";
            fadeIn();
            return false;
        }
        if (email == "" || email == null) {
            document.getElementById("error-msg").innerHTML =
                "<div class='alert alert-warning error_message'>*Please enter a Email*</div>";
            fadeIn();
            return false;
        }
        if (number == "" || number == null) {
            document.getElementById("error-msg").innerHTML =
                "<div class='alert alert-warning error_message'>*Please enter a Number*</div>";
            fadeIn();
            return false;
        }
        if (subject == "" || subject == null) {
            document.getElementById("error-msg").innerHTML =
                "<div class='alert alert-warning error_message'>*Please enter a Subject*</div>";
            fadeIn();
            return false;
        }
        if (query == "" || query == null) {
            document.getElementById("error-msg").innerHTML =
                "<div class='alert alert-warning error_message'>*Please enter a Query*</div>";
            fadeIn();
            return false;
        }
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if (this.readyState === 4) {
                const responseDiv = document.getElementById("simple-msg"); // Container for the message
                responseDiv.innerHTML = ""; // Clear previous messages

                if (this.status === 200) {
                    // Parse the response as JSON
                    const response = JSON.parse(this.responseText);

                    // Insert the raw HTML directly
                    responseDiv.innerHTML = response.message;

                    // Clear form fields
                    document.forms["myForm"]["name"].value = "";
                    document.forms["myForm"]["email"].value = "";
                    document.forms["myForm"]["number"].value = "";
                    document.forms["myForm"]["subject"].value = "";
                    document.forms["myForm"]["query"].value = "";
                } else {
                    // Handle error response
                    const response = JSON.parse(this.responseText);

                    responseDiv.innerHTML =
                        response.message || "Something went wrong.";
                    responseDiv.className = "alert alert-danger";
                    fadeIn("simple-msg");
                }
            }
        };
        xhttp.open("POST", "/contact", true);
        xhttp.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );
        xhttp.setRequestHeader(
            "X-CSRF-TOKEN",
            document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content")
        );
        xhttp.send(
            "name=" +
                encodeURIComponent(name) +
                "&email=" +
                encodeURIComponent(email) +
                "&number=" +
                encodeURIComponent(number) +
                "&subject=" +
                encodeURIComponent(subject) +
                "&query=" +
                encodeURIComponent(query)
        );
        return false;
    }

    function fadeIn() {
        var fade = document.getElementById("error-msg");
        var opacity = 0;
        var intervalID = setInterval(function () {
            if (opacity < 1) {
                opacity = opacity + 0.5;
                fade.style.opacity = opacity;
            } else {
                clearInterval(intervalID);
            }
        }, 200);
    }
} catch (error) {
    console.error("An error occurred:", error); // Log to console
    document.getElementById("error-msg").innerHTML =
        "<div class='alert alert-danger'>An unexpected error occurred. Please try again later.</div>";
    fadeIn();
}

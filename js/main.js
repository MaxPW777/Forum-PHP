clock = document.getElementById("Timer");

function startTimer(duration) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        clock.innerHTML = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

// Get the submit button and add a click event listener
var submitBtn = document.getElementById('UserTweetFormButton');
submitBtn.addEventListener('click', function () {
    // Get the tweet from the form input
    var post = document.getElementById('UserTweetFormInput').value;

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Set the URL of the PHP code that updates the database
    xhr.open('POST', 'PostSend.php', true);

    // Set the Content-Type header to application/x-www-form-urlencoded
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Set the onload and onerror event listeners
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Show a success message
            alert(xhr.responseText);
        } else {
            // Show an error message
            alert('Error updating the database.');
        }
    };
    xhr.onerror = function () {
        // Show an error message
        alert('Error updating the database.');
    };

    // Send the tweet as data to the PHP code
    xhr.send('tweet=' + encodeURIComponent(tweet));
});

window.onload = function () {
    var oneHour = 60 * 60;
    startTimer(oneHour);
}


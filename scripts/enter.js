/* this file contains one event listener for enter_new_record.php.
    the JavaScript here acts as a bridge between the HTML form
    in enter_new_record.php and the PHP script in enter.php -
    which writes the new record into the database.
*/

// this is the form in enter_new_record.php -
const jokeform = document.querySelector('#jokeform');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const joke_form = document.querySelector('#joke');
// show the DIV if it is hidden
joke_form.style.display = 'block';


// event handler

jokeform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(jokeform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        joke_form.style.display = 'none';
        response_content.innerHTML =
        "<div class='col-lg-8 mx-auto p-3 my-5 border border-3 border-success box'>" + "<p class='text-center lead'>" + data + "</p>" +
       "<p class='text-center lead'><a href='new_joke.php'>Return to form</a></p>"  +
      "<p class='text-center lead'><a href='jokelist.php'>View jokes</a></p>"+ "</div>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end jokeform.onsubmit

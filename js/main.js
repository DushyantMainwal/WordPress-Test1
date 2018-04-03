console.log('DUhsyant Mainwal JS');

var postButton = document.getElementById("rest_post_button");
var postDivContainer = document.getElementById("rest_posts_container");

if (postButton) {
    postButton.addEventListener("click", function () {
            console.log('Post Button Clicked');
            var ourRequest = new XMLHttpRequest();
            ourRequest.open('GET', 'http://localhost/wordpress/wp-json/wp/v2/posts?categories=1&order=asc');
            ourRequest.onload = function () {
                if (ourRequest.status >= 200 && ourRequest.status < 400) {
                    var data = JSON.parse(ourRequest.responseText);
                    console.log('JSON Data: ', data);
                    createHTML(data);
                    postButton.remove();
                } else {
                    console.log("We connected to the server, but it returned an error.");
                }
            };

            ourRequest.onerror = function () {
                console.log("Connection error");
            };

            ourRequest.send();
        }
    );
}

function createHTML(data) {
    var ourHTMLString = "";

    for (i = 0; i < data.length; i++) {
        ourHTMLString += "<h2>" + data[i].title.rendered + "</h2>";
        ourHTMLString += data[i].content.rendered;
    }

    postDivContainer.innerHTML = ourHTMLString;
}
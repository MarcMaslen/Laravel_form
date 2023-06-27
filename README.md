
## About Laravel Form Project - Marc Maslen

Just wanted to discuss a bit about what I did. Would have loved to hook it up to a database but ran out of time. When you click the submit button on the form, it sends a POST request to the /submitMessage route. This route is set up to trigger the store function in your MessageController. This function extracts the message from the request, can optionally save it in the database (not included in the code), and then sends back a response with the message included.

In the provided code, the POST request is made through JavaScript using the Fetch API.  When the form is submitted, the 'submit' event is captured by JavaScript, and the default form submission action is prevented using event.preventDefault(). Then, a POST request is made using fetch(), with '/submitMessage' as the endpoint, and the form data is sent as the body of the request. Once the server processes the request and sends a response back, the Fetch API's promise is resolved, and the response data is used to update the text in the '#response' div.

Within my own projects, I like to add clear and concise comments to make sure the code can be understood but not overwhelming. Also javascript and CSS done within the file just to make it easier to read.

Files I worked with are:
 - resources/views/welcome.blade.php
 - resources/routes/web.php
 - app/HTTP/controllers/MessageController.php

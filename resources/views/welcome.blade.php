<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Add the CSRF token to the page -->

        <title>The Compliance Guys - Project</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'figtree', sans-serif;
                
            }

            h1 {
                font-size: 3rem;
                font-weight: 600;
                color: #000;
            }
            label {
                font-size: 1.5rem;
                font-weight: 400;
                color: #000;
            }
            input {
                font-size: 1.5rem;
                font-weight: 400;
                color: #000;
            }
            button {
                font-size: 1.5rem;
                font-weight: 400;
                color: #000;
            }
        </style>
    </head>

    <!-- Form & Javascript -->
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <h1>The Compliance Guys - Project</h1>

            <!-- Form for user to write message -->
            <form id="messageForm">
                @csrf
                <label for="message">Message</label>
                <input type="text" name="message">
                <input type="submit">
             </form>
            <div id="response"></div>

            <!-- Javascript to submit form and return message. -->
            <script>
                document.getElementById('messageForm').addEventListener('submit', function(event) {
                event.preventDefault();

                let messageForm = document.getElementById('messageForm');
                let formData = new FormData(messageForm);

                // Send the form data to the server using the fetch API
                fetch('/submitMessage', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    body: formData
                })
                .then(function(response) {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Something went wrong');
                    }
                })
                .then(function(data) {
                    document.getElementById('response').innerText = data.message;
                })
                .catch(function(error) {
                    console.log(error);
                });
            });
            </script>

        </div>
    </body>
</html>

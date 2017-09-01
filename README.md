# Tracker
Open/Click tracking API

The project is implementing these primary features.
1. Token generation for open tracking of emails.
2. Token generation for click tracking of links embedded in emails.
3. Recording statistics for open tokens generated and individual opens.
4. Recording statistics for click tokens generated and individual clicks on the links.

## How to use the API?

Routes have been exposed for the following:
1. Input : email id of the entity the client wants to send the email.
   This will generate a unique token against that email id for that email.
2. Input : email id of the entity the client wants to send the email and link that the client wants to embed in the email.
   This will generate a unique token against that email id for that email and link.
3. Statistics for each open/click token generated as well as statistics for each indvidual click or open that has been
   recorded against each token.

## How is data arranged and stored?

Token generation records : 
Each open/click token generated is assigned an unique ID, along with it corresponding details such as email and/or link is
recorded. The timestamp at which it was created and the number of times it was opened/clicked is also saved.

Token opened/clicked records:
Each open/click record is accompanied by the ID of the token, IP of the system that opened/clicked the token, browser used,
and the timestamp of the event.

Currently the system uses MySQL for storing all types of data.

## Files to review :

1. routes/web.php : Contains all the routes that have been exposed.
2. app/Http/Controllers/TrackersController.php : Controller file with all the function that are called on route hits.
3. resources/views : Contains all the view files which were used to render the frontend UI.

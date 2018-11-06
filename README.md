# DADLabActivity
Lab Activity for subject Distribution Application Development to develop a application using public REST API. This application use Kitsu API to do Search. The application is using php language to request from the api server and get the return value (JSON value) from the api server. Anime details will be output using table.

# API link used
https://kitsu.io/api/edge/anime?filter[text]=search

# Response
var request = require('request');
request('https://kitsu.io/api/edge/anime?filter[text]=naruto', function (error, response, body) {
  console.log('error:', error); // Print the error if one occurred
  console.log('statusCode:', response && response.statusCode); // Print the response status code if a response was received
  console.log('body:', body); // Print the HTML for the Google homepage.
});

# Screenshot1 
![alt text](https://github.com/Colazhai/DADLabActivity/blob/master/Screenshot1.png)

# Screenshot2
![alt text](https://github.com/Colazhai/DADLabActivity/blob/master/Screenshot2.png)

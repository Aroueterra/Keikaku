//  ("use strict");

 const Mangadex = require('mangadex-api')

 const client = new Mangadex({
   host: 'https://mangadex.org',
   apiHost: 'https://mangadex.org/api',
   getCredentials: async () => {
 
   }
 })
 
 client.agent.login('username', 'password', false)
   .then(async () => {
 
     const result = await client.search('To Be Winner')
 
     console.log(result)
 
     await client.agent.saveSession('/path/to/session')
 
   })

// var group = new api.Group();
//   group.fillByQuery("MangaDex Scans").then(group => {
//     console.log(
//       `${group.title} has uploaded ${group.uploads} chapters and has ${group.followers} followers and ${group.views} views.`
//     );
//   });
// });
// // var x = new XMLHttpRequest();
// // x.open('GET', 'https://cors-anywhere.herokuapp.com/https://mangadex.org');
// // // I put "XMLHttpRequest" here, but you can use anything you want.
// // x.setRequestHeader("X-Requested-With", "XMLHttpRequest");
// // x.onload = function() {
// //     console.log(x.responseText);
// // }

// const api = require("mangadex-full-api");
// /*
//             Add to the beginning of your code and
//             before any calls to the API.
//             Replace "mangadex.cc" with any working domain.
//         */
// api.agent.domainOverride = "mangadex.org";
// api.agent.login("a_User", "password123", false).then(() => {
//   var manga = new api.Manga();
//   manga.fillByQuery("Ancient Magus Bride").then(manga => {
//     console.log(`${manga.title} by ${manga.authors.join(", ")}`);
//   });

//   var group = new api.Group();
//   group.fillByQuery("MangaDex Scans").then(group => {
//     console.log(
//       `${group.title} has uploaded ${group.uploads} chapters and has ${group.followers} followers and ${group.views} views.`
//     );
//   });
// });

// xServer.use(function(req, res, next) {
//     res.setHeader("Access-Control-Allow-Origin", 'http://localhost:80');
//     res.setHeader('Access-Control-Allow-Methods', 'POST,GET,OPTIONS,PUT,DELETE');
//     res.setHeader('Access-Control-Allow-Headers', 'Content-Type,Accept');
  
//     next();
//   });

import html2canvas from 'html2canvas';

html2canvas(document.body).then(function(canvas) {
    document.body.appendChild(canvas);
});
var convertMeToImg = $('#save2img')[0];

html2canvas(convertMeToImg).then(function(canvas) {
    $('#image').append(canvas);
});

// html2canvas([document.getElementById('save2img')], {
//     onrendered: function (canvas) {
//         document.getElementById('canvas').appendChild(canvas);
//         var data = canvas.toDataURL('image/png');
//         // AJAX call to send `data` to a PHP file that creates an image from the dataURI string and saves it to a directory on the server

//         var image = new Image();
//         image.src = data;
//         document.getElementById('image').appendChild(image);
//     }
// });
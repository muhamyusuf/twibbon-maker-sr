var photoimg = "";
// Upload image to the directory
$(document).ready(function() {
    $('#photoimg').change(function(){
        var formData = new FormData();
        var files = $('#photoimg')[0].files;
        formData.append('photo', files[0]);
        $.ajax({
            url: "upload.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
              photoimg = response;
            }
        });
    });
});

// Real time preview twibbon
setInterval(function(){
  preview();
}, 0);

function preview(){
  var twibbonimg = $('#twibbonimg').val();
  var width = $('#width').val() + 'px'; // Ambil nilai input range dan tambahkan '%'
  var height = $('#height').val() + 'px'; // Ambil nilai input range dan tambahkan '%'
  var wh = $('#wh').val() + '%'; // Ambil nilai input range dan tambahkan '%'
  var top = $('#top').val() + 'px'; // Ambil nilai input range dan tambahkan 'px'
  var left = $('#left').val() + 'px'; // Ambil nilai input range dan tambahkan 'px'
  $("#photo").attr("src", photoimg);
  $('#twibbon').attr("src", twibbonimg);
  $('#photo').css("width", wh);
  $('#photo').css("height", wh);
  $('#photo').css("top", top);
  $('#photo').css("left", left);
}

// Download twibbon
var element = $(".twibbon");
$("#download").on('click', function(){
  html2canvas(element, {
    onrendered: function(canvas) {
      var imageData = canvas.toDataURL("image/png");
      var newData = imageData.replace(/^data:image\/png/, "data:application/octet-stream");
      $("#download").attr("download", "image.png").attr("href", newData);
    }
  });
});

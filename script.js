let photoimg = "";
// Upload image to the directory
document.addEventListener("DOMContentLoaded", () => {
  const photoInput = document.getElementById("photoimg");

  photoInput.addEventListener("change", () => {
    const formData = new FormData();
    const files = photoInput.files;

    formData.append("photo", files[0]);

    fetch("upload.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((response) => {
        photoimg = response;
      })
      .catch((error) => {
        console.error("Error uploading photo:", error);
      });
  });
});


// Real time preview twibbon
function preview() {
  const twibbonimg = document.getElementById("twibbonimg").value;
  // const width = document.getElementById("width").value + "%"; // Ambil nilai input range dan tambahkan '%'
  // const height = document.getElementById("height").value + "%"; // Ambil nilai input range dan tambahkan '%'
  const wh = document.getElementById("wh").value + "%"; // Ambil nilai input range dan tambahkan '%'
  const top = document.getElementById("top").value + "px"; // Ambil nilai input range dan tambahkan 'px'
  const left = document.getElementById("left").value + "px"; // Ambil nilai input range dan tambahkan 'px'
  
  document.getElementById("photo").src = photoimg;
  document.getElementById("twibbon").src = twibbonimg;
  document.getElementById("photo").style.width = wh;
  document.getElementById("photo").style.height = wh;
  document.getElementById("photo").style.top = top;
  document.getElementById("photo").style.left = left;
}

setInterval(() => {
  preview();
}, 0);

// Download twibbon
document.getElementById("download").addEventListener("click", () => {
  const element = document.querySelector(".twibbon");

  html2canvas(element, {
    onrendered: (canvas) => {
      const imageData = canvas.toDataURL("image/png");
      const newData = imageData.replace(/^data:image\/png/, "data:application/octet-stream");
      const a = document.createElement("a");
      a.href = newData;
      a.download = "image.png";
      a.style.display = "none";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
    },
  });
});




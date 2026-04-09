// Ambil canvas
const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

// Gambar persegi
ctx.fillStyle = "red";
ctx.fillRect(50, 50, 150, 100);

// Gambar garis
ctx.beginPath();
ctx.moveTo(0, 0);
ctx.lineTo(600, 400);
ctx.strokeStyle = "white";
ctx.stroke();

// Gambar lingkaran
ctx.beginPath();
ctx.arc(300, 200, 50, 0, 2 * Math.PI);
ctx.fillStyle = "yellow";
ctx.fill();
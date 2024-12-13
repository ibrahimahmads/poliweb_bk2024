let marqueeText = document.getElementById("marqueeText");
let texts = [
  "&#128512; Jaga Jarak dan Tetap Sehat di Poliklinik Udinus!",
  "&#128077; Poliklinik Udinus: Layanan Kesehatan Terbaik untuk Anda! &#128571;",
];

let index = 0;

function updateMarqueeText() {
  marqueeText.style.animation = "none"; // Hentikan animasi sementara
  marqueeText.style.opacity = 1; // Pastikan teks terlihat
  setTimeout(function () {
    marqueeText.innerHTML = texts[index]; // Ganti teks
    marqueeText.style.animation = "fadeText 3s ease-in-out"; // Mulai animasi
    marqueeText.style.opacity = 1; // Tampilkan teks baru
  }, 3000); // Tunggu 3 detik sebelum memulai animasi dan mengganti teks
}

// Ganti teks setiap 6 detik (3 detik teks biasa + 3 detik animasi)
setInterval(function () {
  updateMarqueeText(); // Ganti teks dengan animasi setelah 3 detik
  index = (index + 1) % texts.length; // Ganti teks sesuai urutan
}, 6000);

let front = document.getElementById("bgfront");
let mid1 = document.getElementById("bg1");
let mid2 = document.getElementById("bg2");
let sky = document.getElementById("bg3");
let moon = document.getElementById("moon");
let text = document.getElementById("text");

window.addEventListener("scroll", () => {
  let value = window.scrollY;

  front.style.marginTop = value * 0.6 + "px";
  mid1.style.top = value * 0.8 + "px";
  mid1.style.left = value * 0.44 + "px";
  mid2.style.top = value * 0.9 + "px";
  sky.style.top = value * 1.1 + "px";
  moon.style.top = value * 1.3 + "px";
  text.style.marginTop = value * 1.3 + "px";
});

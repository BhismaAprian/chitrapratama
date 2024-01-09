import './bootstrap';
import 'flowbite';
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

Fancybox.bind("[data-fancybox]");

const topUpButton = document.getElementById('top-up-button');

window.addEventListener('resize', () => {
    // Periksa apakah layar saat ini adalah tampilan mobile atau tidak
    if (window.innerWidth <= 640) { // Atur sesuai dengan lebar layar yang Anda inginkan
        topUpButton.style.display = 'none'; // Sembunyikan tombol pada tampilan mobile
    } else {
        topUpButton.style.display = 'block'; // Tampilkan tombol pada tampilan desktop
    }
});

// Tambahkan event listener untuk mendeteksi perubahan guliran
window.addEventListener('scroll', () => {
    // Ambil posisi vertikal (tinggi) guliran saat ini
    const scrollY = window.scrollY;

    // Tampilkan tombol Top Up jika pengguna telah menggulir sejauh 50 piksel atau lebih
    if (scrollY >= 50) {
        topUpButton.style.display = 'block';
    } else {
        topUpButton.style.display = 'none';
    }
});

// Tambahkan event listener untuk meng-handle klik tombol Top Up
topUpButton.addEventListener('click', () => {
    // Gulir ke atas halaman
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

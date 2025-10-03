// sticku navbar
let navbarNav = document.querySelector(".navbar");
window.addEventListener("scroll", function () {
  navbarNav.classList.toggle("sticky-nav", window.scrollY > 0);
});

// responsvive nav-menu
const navbarMenu = document.getElementById("nav-menu");
const closeMenu = document.getElementById("close-menu");
const hamburgerMenu = document.getElementById("hamburger-menu");
function hideMenuNav() {
  navbarMenu.style.opacity = "0";
   hamburgerMenu.style.display = "block";
   closeMenu.style.display = "none";
}
function showMenuNav() {
  navbarMenu.style.opacity = "100%";
  hamburgerMenu.style.display = "none";
  closeMenu.style.display = "block";
}


// copyright
document.querySelector("#year_copyright").innerHTML = new Date().getFullYear();


// accordion faq
const items = document.querySelectorAll(".accordion-row button");

items.forEach((item) => {
  item.addEventListener("click", function () {
    const isExpanded = this.getAttribute("aria-expanded") === "true";

    // Tutup semua item terlebih dahulu
    items.forEach((btn) => {
      btn.setAttribute("aria-expanded", "false");
      btn.closest(".accordion-item").removeAttribute("data-expanded");
    });

    // Jika item sebelumnya tidak terbuka, buka yang diklik
    if (!isExpanded) {
      this.setAttribute("aria-expanded", "true");
      this.closest(".accordion-item").setAttribute("data-expanded", "true");
    }
  });
});

// active menu nav every section
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".nav-list");

function scrollTracker() {
  const scrollY = window.scrollY;

  sections.forEach((section) => {
    const sectionTop = section.offsetTop - 170;
    const sectionHeight = section.offsetHeight;
    const sectionId = section.getAttribute("id");

    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
       console.log("Aktif di section:", sectionId);
      navLinks.forEach((link) => {
        link.classList.remove("active-menu");
        if (link.getAttribute("href") === `#${sectionId}`) {
          link.classList.add("active-menu");
        }
      });
    }
  });
}

window.addEventListener("scroll", scrollTracker);

// load more product
document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggleBtn");
  const cards = document.querySelectorAll(".card-item");
  const searchInput = document.getElementById("search");
  const limit = 8;
  let expanded = false;

  // --- Toggle Selengkapnya / Lebih Sedikit ---
  toggleBtn.addEventListener("click", function (e) {
    e.preventDefault();

    if (!expanded) {
      cards.forEach((card) => card.classList.remove("hidden"));
      toggleBtn.textContent = "Lebih Sedikit";
      expanded = true;
    } else {
      cards.forEach((card, index) => {
        if (index >= limit) {
          card.classList.add("hidden");
        }
      });
      toggleBtn.textContent = "Selengkapnya";
      expanded = false;
    }
  });

  // --- Fungsi reset ke kondisi awal ---
  function resetCards() {
    cards.forEach((card, index) => {
      card.style.display = "";
      if (!expanded && index >= limit) {
        card.classList.add("hidden");
      } else {
        card.classList.remove("hidden");
      }
    });
    toggleBtn.style.display = "inline-block";
  }

  // --- Search filter ---
  function handleSearch() {
    const filter = searchInput.value.toLowerCase();

    if (filter !== "") {
      cards.forEach((card) => {
        const text = card.innerText.toLowerCase();
        if (text.includes(filter)) {
          card.style.display = "";
          card.classList.remove("hidden");
        } else {
          card.style.display = "none";
        }
      });

      toggleBtn.style.display = "none"; // tombol disembunyikan saat search aktif
    } else {
      resetCards(); // kalau input dikosongkan / klik X → reset
    }
  }

  // Jalankan saat ketik dan saat klik X bawaan input search
  searchInput.addEventListener("keyup", handleSearch);
  searchInput.addEventListener("input", handleSearch);
});



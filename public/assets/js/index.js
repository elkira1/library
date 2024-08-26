const menu = [
  {
    id: 1,
    title: " a residence house",
    category: "residence",
    price: 45000000,
    img: "./images/wood.jpg",
    desc: `exterior building maintenance and common services are managed by a condominium association, reducing the workload for residents. `,
  },
  {
    id: 2,
    title: " a apartement",
    category: "apartment",
    price: 26000000,
    img: "./images/apartement.jpg",
    desc: `This apartment is often located in the urban area, offering convenient access to amenities, public transportation, shops and services. `,
  },
  {
    id: 3,
    title: "room",
    category: "room-lounge",
    price: 6000000,
    img: "./images/alouer.jpg",
    desc: `This home has more interior and exterior space, offering more possibilities for design and personalization.`,
  },
  {
    id: 4,
    title: "great villa",
    category: "villa",
    price: 25000000,
    img: "./images/fascade.jpg",
    desc: `exterior building maintenance and common services are managed by a condominium association, reducing the workload for residents. `,
  },
  {
    id: 5,
    title: " a good room",
    category: "living-room",
    price: 3000000,
    img: "./images/image2-3.jpg",
    desc: `This one-room home offers a simplified and compact living space that is easy to maintain and clean. This is especially suitable for people who prefer a minimalist lifestyle or are looking to reduce their environmental footprint. `,
  },
  {
    id: 6,
    title: "room with a beautiful beach",
    category: "room-with-pool",
    price: 18000000,
    img: "./images/avecpiscine-transformed.jpeg",
    desc: `A home pool allows you to enjoy leisure, relaxation and entertainment without having to leave your property. You can swim, exercise, have pool parties, or just relax and enjoy the sun in a private setting.`,
  },
  {
    id: 7,
    title: "a small room ",
    category: "room-in-a-shantytown",
    price: 800000,
    img: "./images/nonlotie.jpg",
    desc: `This one-room home offers a simplified and compact living space that is easy to maintain and clean. This is especially suitable for people who prefer a minimalist lifestyle or are looking to reduce their environmental footprint.`,
  },
  {
    id: 8,
    title: "tools",
    category: "building-material",
    price: 1200000,
    img: "./images/materiel.jpg",
    desc: `Construction tools make work easier, improve efficiency and accuracy, and ensure worker safety  `,
  },
  {
    id: 9,
    title: "old house",
    category: "village-house",
    price: 800000,
    img: "./images/villagehouse.jpg",
    desc: `This traditional house is built using local and durable materials such as stone, wood, terracotta, etc. These materials offer good resistance to weather, heat, cold and structural damage.`,
  },
  {
    id: 10,
    title: "a room",
    category: "room",
    price: 220000,
    img: "./images/room.jpg",
    desc: `a beautiful lounge and its contents at your disposal if you wish.`,
  },
  {
    id: 11,
    title: "A good partial",
    category: "partial-for-sale",
    price: 7000000,
    img: "./images/partial.jpg",
    desc: `a partial at less cost at disposal .`,
  },
  {
    id: 12,
    title: "all for house",
    category: "building-material",
    price: 2000000,
    img: "./images/materiel1.jpg",
    desc: `Construction tools make work easier, improve efficiency and accuracy, and ensure worker safety.`,
  },
  {
    id: 13,
    title: "iron",
    category: "building-material",
    price: 150000,
    img: "./images/materiqux.jpg",
    desc: `Construction tools make work easier, improve efficiency and accuracy, and ensure worker safety.`,
  },
  {
    id: 14,
    title: "A good partial",
    category: "partial-for-sale",
    price: 5000000,
    img: "./images/terrain.jpg",
    desc: `a partial at less cost at disposal .`,
  },
  {
    id: 15,
    title: "A beautiful House",
    category: "room-with-pool",
    price: 22000000,
    img: "./images/maisonavecpiscine.jpg",
    desc: `A home pool allows you to enjoy leisure, relaxation and entertainment without having to leave your property. You can swim, exercise, have pool parties, or just relax and enjoy the sun in a private setting.`,
  },
  {
    id: 16,
    title: "All for house",
    category: "building-material",
    price: 230000,
    img: "./images/penurie.jpg",
    desc: `Construction tools make work easier, improve efficiency and accuracy, and ensure worker safety.`,
  },
  {
    id: 17,
    title: "a small room",
    category: "room-in-a-shantytown",
    price: 900000,
    img: "./images/non-lotie.jpeg",
    desc: `This one-room home offers a simplified and compact living space that is easy to maintain and clean. This is especially suitable for people who prefer a minimalist lifestyle or are looking to reduce their environmental footprint. `,
  },
  {
    id: 18,
    title: "old house",
    category: "village-house",
    price: 650000,
    img: "./images/villagehouse1.jpg",
    desc: `This traditional house is built using local and durable materials such as stone, wood, terracotta, etc. These materials offer good resistance to weather, heat, cold and structural damage..`,
  },
  {
    id: 19,
    title: "a room",
    category: "room",
    price: 350000,
    img: "./images/room1.jpg",
    desc: `This one-room home offers a simplified and compact living space that is easy to maintain and clean. This is especially suitable for people who prefer a minimalist lifestyle or are looking to reduce their environmental footprint..`,
  },
  {
    id: 20,
    title: "a room",
    category: "room",
    price: 400000,
    img: "./images/room2.jpg",
    desc: `a beautiful lounge and its contents at your disposal if you wish.`,
  },
  {
    id: 21,
    title: "a room",
    category: "room",
    price: 250000,
    img: "./images/room3.jpg",
    desc: `a beautiful lounge and its contents at your disposal if you wish.`,
  },
  {
    id: 22,
    title: "a room",
    category: "room",
    price: 400000,
    img: "./images/room4.jpg",
    desc:`This one-room home offers a simplified and compact living space that is easy to maintain and clean. This is especially suitable for people who prefer a minimalist lifestyle or are looking to reduce their environmental footprint.`,
  },
  {
    id: 23,
    title: " a residence house",
    category: "residence",
    price: 35000000,
    img: "./images/residence.jpg",
    desc: `exterior building maintenance and common services are managed by a condominium association, reducing the workload for residents. `,
  },
];
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});
// get parent element
const sectionCenter = document.querySelector(".section-center");
const btnContainer = document.querySelector(".btn-container");
// display all items when page loads
window.addEventListener("DOMContentLoaded", function () {
  diplayMenuItems(menu);
  displayMenuButtons();
});

function diplayMenuItems(menuItems) {
  let displayMenu = menuItems.map(function (item) {
    // console.log(item);

    return `<article class="menu-item">
         <a href="paypal.html" target="_blank"> <img src=${item.img} alt=${item.title} class="photo" /><a>
          <div class="item-info">
            <header>
              <h4>${item.title}</h4>
              <h4 class="price">${item.price} XOF</h4>
            </header>
            <p class="item-text">
              ${item.desc}
            </p>
          </div>
        </article>`;
  });
  displayMenu = displayMenu.join("");
  // console.log(displayMenu);

  sectionCenter.innerHTML = displayMenu;
}
function displayMenuButtons() {
  const categories = menu.reduce(
    function (values, item) {
      if (!values.includes(item.category)) {
        values.push(item.category);
      }
      return values;
    },
    ["all"]
  );
  const categoryBtns = categories
    .map(function (category) {
      return `<button type="button" class="filter-btn" data-id=${category}>
          ${category}
        </button>`;
    })
    .join("");

  btnContainer.innerHTML = categoryBtns;
  const filterBtns = btnContainer.querySelectorAll(".filter-btn");
  console.log(filterBtns);

  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      // console.log(e.currentTarget.dataset);
      const category = e.currentTarget.dataset.id;
      const menuCategory = menu.filter(function (menuItem) {
        // console.log(menuItem.category);
        if (menuItem.category === category) {
          return menuItem;
        }
      });
      if (category === "all") {
        diplayMenuItems(menu);
      } else {
        diplayMenuItems(menuCategory);
      }
    });
  });
}



var registrationForm = document.getElementById('middle');
var productsSection = document.getElementById('menu');

registrationForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Empêche le rechargement de la page

  // Récupère les valeurs saisies par l'utilisateur
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var name = document.getElementById('name').value;
  // Vérifie si les champs sont remplis
  if ( name && email && password || email && password) {
    // Affiche la section des produits
    registrationForm.style.display = 'none';
    productsSection.style.display = 'block';
  }
});

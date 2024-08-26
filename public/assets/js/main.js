// Element.getBoundingClientRect() method returns the size of an element and its position relative to the viewport.
// pageYOffset is a read - only window property that returns the number of pixels the document has been scrolled vertically.
// slice extracts a section of a string without modifying original string
//offsetTop - A Number, representing the top position of the element, in pixels

// ********** set date ************
// select span
const date = document.getElementById("date");
date.innerHTML = new Date().getFullYear();

// ********** close links ************
const navToggle = document.querySelector(".nav-toggle");
const linksContainer = document.querySelector(".links-container");
const links = document.querySelector(".links");

navToggle.addEventListener("click", function () {
  // linksContainer.classList.toggle("show-links");

  const linksHeight = links.getBoundingClientRect().height;
  const containerHeight = linksContainer.getBoundingClientRect().height;
  if (containerHeight === 0) {
    linksContainer.style.height = `${linksHeight}px`;
  } else {
    linksContainer.style.height = 0;
  }
  // console.log(linksContainer.getBoundingClientRect());
});

// ********** fixed navbar ************

const navbar = document.getElementById("nav");
const topLink = document.querySelector(".top-link");

window.addEventListener("scroll", function () {
  const scrollHeight = window.pageYOffset;
  const navHeight = navbar.getBoundingClientRect().height;
  if (scrollHeight > navHeight) {
    navbar.classList.add("fixed-nav");
  } else {
    navbar.classList.remove("fixed-nav");
  }
  // setup back to top link

  if (scrollHeight > 500) {
    console.log("helo");

    topLink.classList.add("show-link");
  } else {
    topLink.classList.remove("show-link");
  }
});

// ********** smooth scroll ************
// select links
const scrollLinks = document.querySelectorAll(".scroll-link");
scrollLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    // prevent default
    e.preventDefault();
    // navigate to specific spot
    const id = e.currentTarget.getAttribute("href").slice(1);
    const element = document.getElementById(id);

    const navHeight = navbar.getBoundingClientRect().height;
    const containerHeight = linksContainer.getBoundingClientRect().height;
    const fixedNav = navbar.classList.contains("fixed-nav");
    let position = element.offsetTop - navHeight;

    if (!fixedNav) {
      position = position - navHeight;
    }
    if (navHeight > 82) {
      position = position + containerHeight;
    }

    window.scrollTo({
      left: 0,
      top: position,
    });
    // close
    linksContainer.style.height = 0;
  });
});
// calculate heights

// local reviews data
const reviews = [
  {
    id: 1,
    name: 'Victor Sawadogo',
    job: 'web developer and designer',
    img: './Img/5brmm1.jpg',
    text: "This agent is responsible for the conception and design of our different web platforms, he is one of the best in his field.",
  },
  {
    id: 2,
    name: 'Ange Marie',
    job: 'Real estate agents',
    img: './Img/agent-immobilier.jpeg',
    text: 'It is the professional who works directly with clients to buy, sell or rent real estate. This real estate agent is responsible for finding properties, visits, negotiating terms and conditions and monitoring transactions.',
  },
  {
    id: 3,
    name: 'peter jones',
    job: 'Real estate agents assistants',
    img: './Img/agentassistant.jpg',
    text: 'This agent supports the real estate agent in their daily tasks. He or she may assist in researching properties, preparing documents, coordinating visits and managing communications with clients.',
  },
  {
    id: 4,
    name: 'our members',
    job: 'Real Estate Brokers',
    img: './Img/courtiers-immobilies.jpg',
    text: 'Real estate brokers are the managers of the real estate agency. They supervise the agencys operations, coordinate transactions and ensure compliance with real estate regulations. ',
  },
  {
    id: 5,
    name: 'Andrea Peterson',
    job: 'Rental agents',
    img: './Img/agentlocation.jpg',
    text:'Our leasing agent specializes in the leasing of real estate, be it apartments, houses or commercial premises. She helps tenants find properties that match their needs and helps landlords find suitable tenants. ',
  },
  {
    id: 6,
    name: 'Paul de marseille',
    job: 'Real estate marketing agents',
    img: './Img/agentmarketing.jpg',
    text: 'This real estate marketer is responsible for promoting real estate and the agency. He manages online advertising, marketing campaigns, social media and promotional strategies to attract buyers and sellers. ',
  },
  {
    id: 7,
    name: 'our members',
    job: 'Property Managers',
    img: './Img/gestionnairede.jpg',
    text: 'Property managers manage properties on behalf of owners. They ensure that properties are well maintained, manage rentals, collect rents, and handle any property-related issues. ',
  },
  {
    id: 8,
    name: 'our members',
    job: 'Administrative staff ',
    img: './Img/personel.jpg',
    text: 'Our administrative staff handles administrative tasks, such as managing phone calls, scheduling appointments, maintaining files, preparing documents and coordinating the agencys internal operations. ',
  },
];
// select items
const img = document.getElementById('person-img-1');
const author = document.getElementById('author-1');
const job = document.getElementById('job-1');
const info = document.getElementById('info-1');

const prevBtn1 = document.querySelector('.prev-btn-1');
const nextBtn1 = document.querySelector('.next-btn-1');
const randomBtn1 = document.querySelector('.random-btn-1');

// set starting item
let currentItem = 0;

// load initial item
window.addEventListener('DOMContentLoaded', function () {
  const item = reviews[currentItem];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
});

// show person based on item
function showPerson(person) {
  const item = reviews[person];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
}
// show next person
nextBtn1.addEventListener('click', function () {
  currentItem++;
  if (currentItem > reviews.length - 1) {
    currentItem = 0;
  }
  showPerson(currentItem);
});
// show prev person
prevBtn1.addEventListener('click', function () {
  currentItem--;
  if (currentItem < 0) {
    currentItem = reviews.length - 1;
  }
  showPerson(currentItem);
});
// show random person
randomBtn1.addEventListener('click', function () {
  console.log('hello');

  currentItem = Math.floor(Math.random() * reviews.length);
  showPerson(currentItem);
});


const items = [...document.querySelectorAll('.number')];

const updateCount = (el) => {
  const value = parseInt(el.dataset.value);
  const increment = Math.ceil(value / 1000);
  // const increment = 1;
  let initialValue = 0;

  const increaseCount = setInterval(() => {
    initialValue += increment;

    if (initialValue > value) {
      el.textContent = `${value}+`;
      clearInterval(increaseCount);
      return;
    }

    el.textContent = `${initialValue}+`;
  }, 1);
  // console.log(increaseCount);
};

items.forEach((item) => {
  updateCount(item);
});

//
function toggleChildren() {
  var children = document.querySelector('.children');
  if (children.style.display === 'none') {
    children.style.display = 'block';
  } else {
    children.style.display = 'none';
  }
}


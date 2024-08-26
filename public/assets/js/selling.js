// select modal-btn,modal-overlay,close-btn
// listen for click events on modal-btn and close-btn
// when user clicks modal-btn add .open-modal to modal-overlay
// when user clicks close-btn remove .open-modal from modal-overlay

const modalBtn = document.querySelector(".modal-btn");
const modal = document.querySelector(".modal-overlay");
const closeBtn = document.querySelector(".close-btn");

modalBtn.addEventListener("click", function () {
  modal.classList.add("open-modal");
});
closeBtn.addEventListener("click", function () {
  modal.classList.remove("open-modal");
});


var form = document.getElementById('form');
var objectOutput = document.getElementById('objectOutput');
var imageOutput = document.getElementById('imageOutput');
var amountOutput = document.getElementById('amountOutput');
var saleOutput = document.getElementById('saleOutput');
var rentOutput = document.getElementById('rentOutput');

form.addEventListener('submit', function(event) {
  event.preventDefault(); 

  // Récupère les valeurs saisies par l'utilisateur
  var object = document.getElementById('object').value;
  var image = document.getElementById('image').files[0];
  var amount = document.getElementById('amount').value;
  var sale = document.getElementById('sale').checked;
  var rent = document.getElementById('rent').checked;

  // Affiche les valeurs dans le récapitulatif
  objectOutput.textContent = 'Objet : ' + object;
  amountOutput.textContent = 'Montant : ' + amount + 'XOF';

  // Affiche l'aperçu de l'image
  if (image) {
    var reader = new FileReader();
    reader.onload = function(e) {
      imageOutput.src = e.target.result;
    };
    reader.readAsDataURL(image);
  }

  // Affiche si l'objet est à vendre ou à louer
  if (sale) {
    saleOutput.textContent = 'for sale';
  } else if (rent) {
    rentOutput.textContent = 'for rent';
  }
});

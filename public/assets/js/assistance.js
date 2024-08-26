var preoccupationSelect = document.getElementById('preoccupation');
var generateBtn = document.getElementById('generateBtn');
var adviceSection = document.getElementById('advice');
var adviceOutput = document.getElementById('adviceOutput');

generateBtn.addEventListener('click', function() {
  var preoccupation = preoccupationSelect.value;
  var advice = getAdvice(preoccupation);
  
  adviceOutput.textContent = advice;
  adviceSection.style.display = 'block';
});

function getAdvice(preoccupation) {
  var advice = '';
  
  switch(preoccupation) {
    case 'Property search':
      advice = "Clearly define your search criteria, including property type, location budget and desired features.Be flexible and keep an turn on mind to discover properties that may meet your needs, even whether they make  not exactly match your initial criteria.";
      break;
    case 'Visits to properties':
      advice = "Prepare a list of relevant questions to ask during the visits, in order to obtain as much information as possible about the property. Pay attention to details such that the general condition of the property, surrounding infrastructure, accessibility, light, etc.Take notes and photos to remind you of the features of each property you visit.";
      break;
    case 'Negotiation':
      advice = "Research the local market to get an idea of current prices and trends.Set a budget limit and be prepared to negotiate based on your priorities and the property's features.  Evaluate the advantages and disadvantages of the property and use this information in your negotiation pitch.";
      break;
      case 'Management of administrative formalities':
      advice = "Consult a real estate lawyer or notary to make sure all documents and contracts are in order.Check all terms and conditions carefully before signing any contract or agreement. Keep yourself informed of all the steps in the process and communicate regularly with your real estate assistant to make sure everything is going smoothly.";
      break;
    case 'Advice and expertise':
      advice = "Ask your real estate assistant for information on market trends, neighborhoods, schools, local amenities, etc.Consider your real estate assistant's advice when making your decision, but also do your own research to get the full picture.Be open to investment opportunities or emerging neighborhoods that may offer good growth potential";
      break;
    case 'Network of professionals':
      advice = "rust your real estate assistant's recommendations for real estate rofessionals such as brokers, mortgage lenders, home inspectors, etc.Do your own research and verification to ensure the reliability and reputation of recommended professionals.";
      break;
      case 'Follow-up after the transaction':
      advice = "Keep in touch with your real estate assistant for recommendations on after-sales services such as renovations, repairs and useful contacts in the community.Take care of your property by performing regular maintenance and keeping up with mortgage payments or real estate taxes";
      break;
    default:
      advice = "Sélectionnez une préoccupation dans la liste.";
      break;
  }
  
  return advice;
}

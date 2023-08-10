// code for a pizza size calculation

const pizzaSize = document.getElementById("size");
const pizzaPrice = document.getElementById("price");
const isPizzaRound = document.getElementById("round");
const addPizzaButton = document.querySelector("input[value='Hinzufügen']");
const pizzaList = document.querySelector("ul");

addPizzaButton.addEventListener("click", e => {
    const li = document.createElement("li");
    li.innerText = `Preis pro cm²: ${Math.round((isPizzaRound.value == true ? pizzaPrice.value / (Math.PI * Math.pow(pizzaSize.value / 2, 2)) : pizzaPrice.value / Math.pow(pizzaSize.value, 2)*100))/100}€`;
    pizzaList.appendChild(li);
});
function attachBuyEvents() {
  const buttons = document.querySelectorAll("#products button");

  for (const button of buttons) {
    button.addEventListener("click", function(event) {
      const element = event.target;
      // Get the parent article element
      const parentArticle = element.parentElement;

      // Get the name, price, and quantity elements within the parent article
      const dataID = parentArticle.getAttribute("data-id");
      const nameElement = parentArticle.querySelector("h2");
      const priceElement = parentArticle.querySelector(".price");
      const quantityElement = parentArticle.querySelector(".quantity");

      // Retrieve the values from the elements
      const name = nameElement.textContent;
      const price = priceElement.textContent;
      const quantity = quantityElement.value;
      
      const total = parseInt(quantity) * parseInt(price);

      // Creates a new table row (element) and table cells
      const row = document.createElement("tr");
      const idCell = document.createElement("td");
      const nameCell = document.createElement("td");
      const priceCell = document.createElement("td");
      const quantityCell = document.createElement("td");
      const totalCell = document.createElement("td");

      // Set cell values
      idCell.textContent = dataID;
      nameCell.textContent = name;
      priceCell.textContent = price;
      quantityCell.textContent = quantity;
      totalCell.textContent = total;

      row.appendChild(idCell);
      row.appendChild(nameCell);
      row.appendChild(priceCell);
      row.appendChild(quantityCell);
      row.appendChild(totalCell);

      const table = document.querySelector("#cart thead");
      table.appendChild(row);

      // Toggle the "sale" class on the parent article
      parentArticle.classList.toggle("sale");

      // Get the value of the data-id attribute and print it in the console
      console.log("data-id: ", dataID);
    });
  }
}

attachBuyEvents();

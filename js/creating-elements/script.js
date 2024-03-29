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

      const table = document.querySelector("#cart table tbody");
      const foot = document.querySelector("#cart table tfoot tr th:last-child");

      const existingRow = document.querySelector(`#cart tr[data-id='${dataID}']`);

      if (existingRow) {
        // Update existing row's values
        existingRow.children[2].textContent = parseInt(existingRow.children[2].textContent) + parseInt(quantity);
        existingRow.children[4].textContent = parseInt(existingRow.children[4].textContent) + parseInt(total);
        foot.textContent = parseInt(foot.textContent) + parseInt(total);
      } 
      
      else {
        // Creates a new table row (element) and table cells
        const row = document.createElement("tr");
        const idCell = document.createElement("td");
        const nameCell = document.createElement("td");
        const priceCell = document.createElement("td");
        const quantityCell = document.createElement("td");
        const totalCell = document.createElement("td");
        const deleteCell = document.createElement("td");

        const removeButton = document.createElement("button");
        removeButton.textContent = "Remove";

        removeButton.addEventListener("click", (event) => {
          const deleteRow = event.currentTarget.parentElement.parentElement;;
          foot.textContent = parseInt(foot.textContent) - parseInt(deleteRow.children[4].textContent);
          deleteRow.remove();
        });

        // Set cell values
        idCell.textContent = dataID;
        nameCell.textContent = name;
        priceCell.textContent = price;
        quantityCell.textContent = quantity;
        totalCell.textContent = total;
        deleteCell.appendChild(removeButton);
        
        // Adds a data-id property to a table row
        row.dataset.id = dataID
        
        row.appendChild(idCell);
        row.appendChild(nameCell);
        row.appendChild(quantityCell);
        row.appendChild(priceCell);
        row.appendChild(totalCell);
        row.appendChild(deleteCell);

        foot.textContent = parseInt(foot.textContent) + parseInt(total);

        const table = document.querySelector("#cart tbody");
        table.appendChild(row);
    }

      // Toggle the "sale" class on the parent article
      parentArticle.classList.toggle("sale");

      // Get the value of the data-id attribute and print it in the console
      console.log("data-id: ", dataID);  
    });
  }
}

attachBuyEvents();

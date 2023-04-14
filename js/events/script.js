function attachBuyEvents() {
    const buttons = document.querySelectorAll("#products button");
  
    for (const button of buttons) {
      button.addEventListener("click", function(event) {
        console.log("BUY!");
        console.log(event.currentTarget);
      });
    }
}
  
attachBuyEvents();
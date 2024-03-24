// Dynamically add student ID and name
document.getElementById('studentId').innerText = 'Student ID: YourID | Name: YourName';

// Capture form submission
document.getElementById('pizzaForm').addEventListener('submit', function(event) {
    // Get form values
    const sizep = document.getElementById('sizep').value;
    const topping = document.getElementById('topping').value;
    const crustType = document.getElementById('crustType').value;
    const quantity = document.getElementById('quantity').value;
    const deliveryAddress = document.getElementById('deliveryAddress').value;
    const pizz= new Pizza(sizep, topping, crustType, quantity, deliveryAddress);
});

// Define Pizza class
class Pizza {
    constructor(sizep, topping, crustType, quantity, deliveryAddress) {
        this.sizep = sizep;
        this.topping = topping;
        this.crustType = crustType;
        this.quantity = quantity;
        this.deliveryAddress = deliveryAddress;
    }

    getDescription() {
        return `Size: ${this.sizep}\nTopping: ${this.topping}\nCrust Type: ${this.crustType}\nQuantity: ${this.quantity}\nDelivery Address: ${this.deliveryAddress}`;
    }
}
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".btn-remove").forEach(function (button) {
        button.addEventListener("click", function () {
            let cartId = this.getAttribute("data-cart-id");
            let deleteModal = new bootstrap.Modal(
                document.getElementById("deleteModal-" + cartId)
            );
            deleteModal.show();
        });
    });

    document.querySelectorAll(".quantity-input").forEach(function (input) {
        input.addEventListener("change", function () {
            let cartId = this.name.split("_")[1];
            let price = parseFloat(
                this.closest(".cart-item")
                    .querySelector(".price")
                    .textContent.replace("₱", "")
            );
            let quantity = parseInt(this.value);
            let totalElement =
                this.closest(".cart-item").querySelector(".total");
            totalElement.textContent = "₱" + (price * quantity).toFixed(2);
            updateCartTotal();
        });
    });

    function updateCartTotal() {
        let total = 0;
        document.querySelectorAll(".cart-item").forEach(function (item) {
            let itemTotal = parseFloat(
                item.querySelector(".total").textContent.replace("₱", "")
            );
            total += itemTotal;
        });
        document.querySelector(".total-price").textContent =
            "₱" + total.toFixed(2);
    }
});
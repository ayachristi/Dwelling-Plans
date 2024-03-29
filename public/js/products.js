document.addEventListener("DOMContentLoaded", function () {
    const previewImages = document.querySelectorAll(".preview-image");

    previewImages.forEach(function (image) {
        image.addEventListener("click", function () {
            const src = this.getAttribute("src");
            showImagePreview(src);
        });
    });

    function showImagePreview(src) {
        const previewModal = document.createElement("div");
        previewModal.classList.add("image-preview-modal");

        const previewImage = document.createElement("img");
        previewImage.src = src;
        previewImage.classList.add("preview-image");

        const closeButton = document.createElement("span");
        closeButton.classList.add("close-preview");
        closeButton.innerHTML = "&times;";

        closeButton.addEventListener("click", function () {
            document.body.removeChild(previewModal);
        });

        previewModal.appendChild(previewImage);
        previewModal.appendChild(closeButton);
        document.body.appendChild(previewModal);
    }
});

$(document).ready(function () {
    $(".checkbox").change(function () {
        updateTotalPrice($(this));
    });

    function updateTotalPrice(checkbox) {
        let total_price = 0;
        checkbox
            .closest(".modal")
            .find(".checkbox:checked")
            .each(function () {
                let item_price = parseFloat($(this).data("price"));
                if (!isNaN(item_price)) {
                  
                    total_price += item_price;
                }
            });
        checkbox
            .closest(".modal")
            .find(".total-price")
            .text("Total Price: PHP " + total_price.toFixed(2)); 
    }


    updateTotalPrice();
});
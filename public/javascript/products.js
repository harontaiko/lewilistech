function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#image-product").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function sleep(time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

//calculate discount, discount =
document.getElementById("product-disc").addEventListener("input", function () {
  console.log("input");
  var discount = document.getElementById("product-disc").value;
  var price = document.getElementById("product-price").value;
  var discountPrice = price - (price * discount) / 100;
  document.getElementById("product-newprice").value = discountPrice;
});

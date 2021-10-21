function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#image-product").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

readURL();

function sleep(time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}
